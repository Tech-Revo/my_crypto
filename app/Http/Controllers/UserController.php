<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users');
    }

    public function userDataAjax()
    {
        $user = User::latest()->get();
        return response()->json(['data' => $user]);
    }

    public function addUserIndex(){
        return view('admin.add_user');
    }
}