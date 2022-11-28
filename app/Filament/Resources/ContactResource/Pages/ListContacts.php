<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    public static $resource = ContactResource::class;
}
