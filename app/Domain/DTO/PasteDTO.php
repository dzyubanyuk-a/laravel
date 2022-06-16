<?php

namespace App\Domain\DTO;


use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;

class PasteDTO
{

    public string $title;
    public string $paste;
    public int $language;
    public int $activity;
    public int $access;

    public function __construct(string $title, string $paste, int $language, int $activity, int $access)
    {
        $this->title = $title;
        $this->paste = $paste;
        $this->language = $language;
        $this->activity = $activity;
        $this->access = $access;
    }


    public static function fromRequest( Request $request):PasteDTO
    {
        return new static(
            $request->get('title'),
            $request->get('paste'),
            $request->get('language'),
            $request->get('activity'),
            $request->get('access'),
        );

    }


}
