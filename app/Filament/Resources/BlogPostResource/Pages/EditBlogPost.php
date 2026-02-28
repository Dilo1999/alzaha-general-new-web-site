<?php

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditBlogPost extends EditRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        foreach (['image'] as $field) {
            $val = $data[$field] ?? null;
            if (is_string($val) && $val !== '' && ! Str::startsWith($val, 'http')) {
                $data[$field] = $val;
            } else {
                $data[$field] = null;
            }
        }

        $content = $data['content'] ?? [];
        foreach ($content as $key => $item) {
            if (is_array($item)) {
                $src = $item['src'] ?? null;
                if (is_string($src) && $src !== '' && ! Str::startsWith($src, 'http')) {
                    $content[$key]['src'] = $src;
                } else {
                    $content[$key]['src'] = null;
                }
            }
        }
        $data['content'] = $content;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['image'] = $this->firstUploadPath($data['image'] ?? null) ?? $this->record->image;
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
