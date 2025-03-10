<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use Filament\Actions;
use App\Models\section;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PartnerResource;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(section $record) {
                        if($record->thumbnail) {
                            Storage::disk('public')->delete($record->thumbnail);
                        }
                    }
                ),
        ];
    }
}
