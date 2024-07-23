<?php

namespace App\Http\Controllers\mngr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\AdminUserService;

class AdminUserController extends Controller
{
    protected $adminUserService;

    public function __construct(AdminUserService $adminUserService)
    {
        $this->adminUserService = $adminUserService;
    }

    public function index()
    {
        $users = $this->adminUserService->getAllUsers();

        return view('mngr.users.index', [
            'results' => $users
        ]);
    }
}
