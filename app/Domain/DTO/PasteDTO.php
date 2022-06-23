<?php

namespace App\Domain\DTO;


class PasteDTO
{
    public string $title;
    public string $paste;
    public string $language;
    public int $activity;
    public int $access;

    public function __construct(array $values)
    {
        foreach ($values as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

}
