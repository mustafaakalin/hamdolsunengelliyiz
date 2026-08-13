<?php

namespace App\Filament\Resources\SpasticResource\Pages;

use App\Filament\Resources\SpasticResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpastic extends EditRecord
{
    protected static string $resource = SpasticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
