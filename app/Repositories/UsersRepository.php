<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UsersInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class UsersRepository extends BaseRepository implements UsersInterface
{
    function model(): string
    {
        return User::class;
    }

    /*public function getProfile()
    {
        return null;
    }*/
}
