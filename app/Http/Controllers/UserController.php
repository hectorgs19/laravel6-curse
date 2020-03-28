<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($name) {

        //dd($user);
        return view('users', ['user' => User::where('name', $name)->firstOrfail()]);
    }

}
