<?php

namespace App\Http\Controllers\mngr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //

    public function index()
    {
        return view('mngr.users.index');
    }
}
