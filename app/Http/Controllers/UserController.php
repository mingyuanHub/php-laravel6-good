<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    function show ($id) {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
