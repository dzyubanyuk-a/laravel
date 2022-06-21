<?php

namespace App\Repositories\Interfaces;


use App\Http\Requests\CreateCodeRequest;

interface PastesInterface
{
    public function selectPastes();

    public function getPastesPublic();

    public function getPaste($token);

    public function createPaste(CreateCodeRequest $request);

}
