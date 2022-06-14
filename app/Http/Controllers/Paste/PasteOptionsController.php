<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;


class PasteOptionsController extends BaseController
{
    public function index()
    {
        $languages = $this->PasteOptionsService->getLanguages();
        $activities = $this->PasteOptionsService->getActivities();
        $accesses = $this->PasteOptionsService->getAccesses();
        $pastesPublic = $this->PastesGetService->getPastesPublic();
        $pastesUser = $this->PastesGetService->getPastesUser();



        return view('main',[
            'languages' => $languages,
            'activities' => $activities,
            'accesses'=>$accesses,
            'pastes' => $pastesPublic,
            'user_pastes' => $pastesUser,
        ]);
    }
}
