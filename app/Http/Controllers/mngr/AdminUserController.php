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

    public function edit($id)
    {
        $userId = $id;

        $userData = $this->adminUserService->getUserData($userId);

        return view('mngr.users.edit', [
            'editdata' => $userData
        ]);
    }

    public function update($id, Request $request)
    {
        $userId = $id;

        $userData = $this->adminUserService->getUserData($userId);

        $validatedData = $request->validate([
            'name' =>'required',
            'phone' =>'required'
        ],[
            'name.required' =>'Name is required',
            'phone.required' =>'Phone is required'
        ]);

        $userData->name = $validatedData['name'];
        $userData->phone = $validatedData['phone'];
        $userData->save();

        return redirect()->route('mngr.users.index')->with('success', 'User data updated successfully');
    }
}
