<?php

namespace App\Filament\Resources\PageSeoResource\Pages;

use App\Filament\Resources\PageSeoResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditPageSeo extends EditRecord
{
    protected static string $resource = PageSeoResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        foreach (['og_image', 'twitter_image'] as $field) {
            $val = $data[$field] ?? null;
            if (is_string($val) && $val !== '' && ! Str::startsWith($val, 'http')) {
                $data[$field] = $val;
            } else {
                $data[$field] = null;
            }
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['og_image'] = $this->firstUploadPath($data['og_image'] ?? null) ?? $this->record->og_image;
        $data['twitter_image'] = $this->firstUploadPath($data['twitter_image'] ?? null) ?? $this->record->twitter_image;

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
}
