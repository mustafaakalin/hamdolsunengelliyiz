<?php

namespace App\Filament\Resources\SpasticResource\Pages;

use App\Filament\Resources\SpasticResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpastics extends ListRecords
{
    protected static string $resource = SpasticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
