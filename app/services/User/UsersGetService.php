<?php

namespace App\services\User;

use App\Repositories\UsersRepository;

class UsersGetService
{
    protected UsersRepository $users;

    public function __construct(UsersRepository $users)
    {
        $this->users = $users;
    }


    public function getProfile()
    {
        return $this->users->getProfile();
    }
}
