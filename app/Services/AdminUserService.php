<?php

namespace App\Services;

use App\Models\User;

class AdminUserService
{
    public function getAllUsers()
    {
        return User::all();
    }
}
