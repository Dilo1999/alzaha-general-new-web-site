<?php

namespace App\Filament\Resources\PageSeoResource\Pages;

use App\Filament\Resources\PageSeoResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePageSeo extends CreateRecord
{
    protected static string $resource = PageSeoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['og_image'] = $this->firstUploadPath($data['og_image'] ?? null);
        $data['twitter_image'] = $this->firstUploadPath($data['twitter_image'] ?? null);

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
