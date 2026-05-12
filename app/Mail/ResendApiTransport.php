<?php

namespace App\Mail;

use Illuminate\Support\Facades\Http;
use Symfony\Component\Mailer\Exception\TransportException;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\RawMessage;
use Throwable;

class ResendApiTransport extends AbstractTransport
{
    public function __construct(
        private ?string $apiKey,
        private string $endpoint = 'https://api.resend.com',
        private int $timeout = 10,
        private bool $verifySsl = true,
    ) {
        parent::__construct();
    }

    protected function doSend(SentMessage $message): void
    {
        if (! $this->apiKey) {
            throw new TransportException('RESEND_API_KEY is not configured.');
        }

        $payload = $this->payloadFromMessage($message);

        try {
            $response = Http::withToken($this->apiKey)
                ->acceptJson()
                ->asJson()
                ->timeout(max(1, $this->timeout))
                ->withOptions(['verify' => $this->verifySsl])
                ->post(rtrim($this->endpoint, '/') . '/emails', $payload);
        } catch (Throwable $exception) {
            throw new TransportException('Could not connect to the Resend email API.', 0, $exception);
        }

        if ($response->failed()) {
            $message->appendDebug($response->body());

            throw new TransportException(sprintf(
                'Resend email API failed with status %s: %s',
                $response->status(),
                $response->body()
            ), $response->status());
        }

        $resendMessageId = $response->json('id');

        if (is_string($resendMessageId) && $resendMessageId !== '') {
            $message->setMessageId($resendMessageId);
        }
    }

    public function __toString(): string
    {
        return 'resend+api';
    }

    private function payloadFromMessage(SentMessage $message): array
    {
        $email = $message->getOriginalMessage();

        if (! $email instanceof Email) {
            throw new TransportException(sprintf(
                'The Resend transport only supports %s messages, %s given.',
                Email::class,
                $email instanceof RawMessage ? $email::class : get_debug_type($email)
            ));
        }

        $to = $this->stringifyAddresses($email->getTo());

        if ($to === []) {
            $to = $this->stringifyAddresses($message->getEnvelope()->getRecipients());
        }

        if ($to === []) {
            throw new TransportException('The Resend transport requires at least one recipient.');
        }

        $payload = [
            'from' => $this->firstAddress($email->getFrom())
                ?? $this->firstAddress([$message->getEnvelope()->getSender()]),
            'to' => $to,
            'subject' => $email->getSubject() ?: '(No subject)',
        ];

        $this->addAddresses($payload, 'cc', $email->getCc());
        $this->addAddresses($payload, 'bcc', $email->getBcc());
        $this->addAddresses($payload, 'reply_to', $email->getReplyTo());

        if ($email->getHtmlBody() !== null) {
            $payload['html'] = $email->getHtmlBody();
        }

        if ($email->getTextBody() !== null) {
            $payload['text'] = $email->getTextBody();
        }

        if (! array_key_exists('html', $payload) && ! array_key_exists('text', $payload)) {
            throw new TransportException('The Resend transport requires an HTML or text email body.');
        }

        $attachments = $this->attachments($email->getAttachments());

        if ($attachments !== []) {
            $payload['attachments'] = $attachments;
        }

        return $payload;
    }

    private function firstAddress(array $addresses): ?string
    {
        if ($addresses === []) {
            return null;
        }

        return $this->stringifyAddresses([$addresses[0]])[0];
    }

    private function addAddresses(array &$payload, string $key, array $addresses): void
    {
        $formattedAddresses = $this->stringifyAddresses($addresses);

        if ($formattedAddresses !== []) {
            $payload[$key] = $formattedAddresses;
        }
    }

    private function attachments(array $attachments): array
    {
        return array_values(array_map(function (DataPart $attachment): array {
            return [
                'filename' => $attachment->getFilename() ?: 'attachment',
                'content' => base64_encode($attachment->getBody()),
            ];
        }, $attachments));
    }
}
