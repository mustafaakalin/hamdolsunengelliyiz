<?php

namespace App\Filament\Resources\OrthopedicResource\Pages;

use App\Filament\Resources\OrthopedicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrthopedics extends ListRecords
{
    protected static string $resource = OrthopedicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
