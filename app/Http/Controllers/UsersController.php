<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit (User $user)
    {
        $user = Auth::user();
        return view('layouts.dashboard.settings', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            //'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            //'type' => 'required',
            //'country' => 'required',
            //'position' => 'required'
    ]);

        $user->name = request('name');
        //$user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        //$user->type = request('type');
        //$user->country = request('country');
        //$user->position = request('position');

        $user->save();

        return back();
    }
}
