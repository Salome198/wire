<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login_stub', ['title' => 'Wire | Login']);
    }

    public function register()
    {
        return view('auth/register_stub', ['title' => 'Wire | Register']);
    }
}
