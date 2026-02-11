<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login', ['title' => 'Wire | Login']);
    }

    public function register()
    {
        return view('auth/register', ['title' => 'Wire | Register']);
    }
}
