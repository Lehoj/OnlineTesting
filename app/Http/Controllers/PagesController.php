<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register_()
    {
        return view('register_');
    }

    public function login_()
    {
        return view('login_');
    }



    /*public function welcome()
    {
        return view('welcome');
    }*/
}
