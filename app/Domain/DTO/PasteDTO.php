<?php

namespace App\Domain\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class PasteDTO extends DataTransferObject
{

    public string $title;
    public string $paste;
    public int $language;
    public int $activity;
    public int $access;



}
