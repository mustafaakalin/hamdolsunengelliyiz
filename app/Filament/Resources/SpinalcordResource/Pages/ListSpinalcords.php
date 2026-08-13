<?php

namespace App\Filament\Resources\SpinalcordResource\Pages;

use App\Filament\Resources\SpinalcordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpinalcords extends ListRecords
{
    protected static string $resource = SpinalcordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
