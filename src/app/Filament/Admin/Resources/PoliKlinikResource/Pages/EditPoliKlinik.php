<?php

namespace App\Filament\Admin\Resources\PoliKlinikResource\Pages;

use App\Filament\Admin\Resources\PoliKlinikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoliKlinik extends EditRecord
{
    protected static string $resource = PoliKlinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
