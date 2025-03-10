<?php

namespace App\Filament\Resources\DessertResource\Pages;

use App\Filament\Resources\DessertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDessert extends EditRecord
{
    protected static string $resource = DessertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
