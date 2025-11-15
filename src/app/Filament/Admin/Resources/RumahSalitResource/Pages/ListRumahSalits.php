<?php

namespace App\Filament\Admin\Resources\RumahSalitResource\Pages;

use App\Filament\Admin\Resources\RumahSalitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRumahSalits extends ListRecords
{
    protected static string $resource = RumahSalitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
