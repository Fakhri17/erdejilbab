<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;
    protected static bool $canCreateAnother = false;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
