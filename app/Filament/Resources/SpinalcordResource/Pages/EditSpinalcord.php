<?php

namespace App\Filament\Resources\SpinalcordResource\Pages;

use App\Filament\Resources\SpinalcordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpinalcord extends EditRecord
{
    protected static string $resource = SpinalcordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
