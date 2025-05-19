<?php

namespace App\Filament\Admin\Resources\AcaraResource\Pages;

use App\Filament\Admin\Resources\AcaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcaras extends ListRecords
{
    protected static string $resource = AcaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
