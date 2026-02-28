<?php

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['image'] = $this->firstUploadPath($data['image'] ?? null);
        $data['content'] = $this->normalizeContentSrc($data['content'] ?? []);

        return $data;
    }

    private function firstUploadPath($value): ?string
    {
        if (empty($value)) {
            return null;
        }
        if (is_array($value)) {
            $first = reset($value);

            return is_string($first) ? $first : null;
        }

        return is_string($value) ? $value : null;
    }

    private function normalizeContentSrc(array $content): array
    {
        $out = [];
        foreach ($content as $item) {
            if (! is_array($item)) {
                continue;
            }
            $item['src'] = $this->firstUploadPath($item['src'] ?? null);
            $out[] = $item;
        }

        return $out;
    }
}
