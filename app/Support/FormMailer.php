<?php

namespace App\Support;

use App\Mail\ContactFormMail;
use App\Mail\QuoteRequestMail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Throwable;

class FormMailer
{
    public static function sendContact(array $data): bool
    {
        $subject = '[Contact Form] ' . $data['subject'];
        $body = implode(PHP_EOL, [
            'New contact form submission',
            '',
            'Name: ' . $data['name'],
            'Email: ' . $data['email'],
            'Subject: ' . $data['subject'],
            '',
            'Message:',
            $data['message'],
        ]);

        return self::send(
            new ContactFormMail(
                senderName: $data['name'],
                senderEmail: $data['email'],
                formSubject: $data['subject'],
                messageBody: $data['message'],
            ),
            $subject,
            $body,
            $data['email'],
            $data['name'],
        );
    }

    public static function sendQuote(array $data, ?UploadedFile $file = null): bool
    {
        $subject = '[Quote Request] ' . (($data['company'] ?? null) ?: 'New RFQ');
        $body = implode(PHP_EOL, [
            'New quote request submission',
            '',
            'Name: ' . $data['name'],
            'Company: ' . (($data['company'] ?? null) ?: '-'),
            'Email: ' . $data['email'],
            'Phone: ' . (($data['phone'] ?? null) ?: '-'),
            'Industry: ' . (($data['industry'] ?? null) ?: '-'),
            'Attachment: ' . ($file ? $file->getClientOriginalName() : '-'),
            '',
            'Project Details:',
            ($data['details'] ?? null) ?: '-',
        ]);

        return self::send(
            new QuoteRequestMail(
                name: $data['name'],
                company: $data['company'] ?? null,
                email: $data['email'],
                phone: $data['phone'] ?? null,
                industry: $data['industry'] ?? null,
                details: $data['details'] ?? null,
                file: $file,
            ),
            $subject,
            $body,
            $data['email'],
            $data['name'],
        );
    }

    private static function send(object $mailable, string $subject, string $body, string $replyToEmail, string $replyToName): bool
    {
        try {
            Mail::mailer('failover')
                ->to(self::recipient())
                ->send($mailable);

            return true;
        } catch (Throwable $exception) {
            report($exception);

            return self::sendWithPhpMail($subject, $body, $replyToEmail, $replyToName);
        }
    }

    private static function sendWithPhpMail(string $subject, string $body, string $replyToEmail, string $replyToName): bool
    {
        if (! function_exists('mail')) {
            return false;
        }

        $fromAddress = self::cleanHeader(config('mail.from.address'));
        $fromName = self::cleanHeader(config('mail.from.name'));
        $replyToEmail = self::cleanHeader($replyToEmail);
        $replyToName = self::cleanHeader($replyToName);

        $headers = implode("\r\n", [
            "From: {$fromName} <{$fromAddress}>",
            "Reply-To: {$replyToName} <{$replyToEmail}>",
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: PHP/' . phpversion(),
        ]);

        return @mail(self::recipient(), self::cleanHeader($subject), $body, $headers);
    }

    private static function recipient(): string
    {
        return config('mail.contact_to', config('mail.from.address'));
    }

    private static function cleanHeader(?string $value): string
    {
        return trim(str_replace(["\r", "\n"], '', (string) $value));
    }
}
