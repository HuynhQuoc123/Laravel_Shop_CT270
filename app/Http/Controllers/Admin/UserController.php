<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showListUser(){
        $data = User::all()->toArray();
        return view('admin.user.UserList', compact('data'));    
    }
}
