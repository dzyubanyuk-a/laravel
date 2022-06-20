<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('app/Repositories/Interfaces/PastesInterface', 'app/Repositories/PastesRepository');

    }
}
