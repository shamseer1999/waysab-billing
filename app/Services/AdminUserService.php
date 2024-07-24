<?php

namespace App\Services;

use App\Models\User;

class AdminUserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserData($user)
    {
        return User::find($user);
    }
}
