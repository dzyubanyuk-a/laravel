<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\CreateCodeRequest;

interface PastesInterface
{
    public function getPaste($token);
    public function selectPastes();
    public function getPastesUser();
    public function getPastesPublic();
    public function createPaste(CreateCodeRequest $request);
}
