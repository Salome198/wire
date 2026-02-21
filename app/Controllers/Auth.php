<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login', ['title' => 'Wire | Login']);
    }

    public function loginPost()
    {
        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Please enter your email and password.');
        }

        $users = new UserModel();
        $user = $users->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password_hash'])) {
            return redirect()->back()->with('error', 'Invalid login details. Please try again.');
        }

        session()->set([
            'user_id'      => $user['id'],
            'first_name'   => $user['first_name'],
            'last_name'    => $user['last_name'],
            'is_logged_in' => true,
        ]);

        return redirect()->to('/dashboard');
    }

    public function register()
    {
        return view('auth/register', ['title' => 'Wire | Register']);
    }

    public function registerPost()
    {
        $first = trim($this->request->getPost('first_name'));
        $last  = trim($this->request->getPost('last_name'));
        $email = trim($this->request->getPost('email'));
        $pass  = $this->request->getPost('password');
        $pass2 = $this->request->getPost('confirm_password');

        if (!$first || !$last || !$email || !$pass || !$pass2) {
            return redirect()->back()->with('error', 'Please complete all fields.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please enter a valid email address.');
        }

        if ($pass !== $pass2) {
            return redirect()->back()->with('error', 'Passwords do not match.');
        }

        if (strlen($pass) < 6) {
            return redirect()->back()->with('error', 'Password must be at least 6 characters.');
        }

        $users = new UserModel();

        if ($users->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'That email is already registered. Please log in.');
        }

        $users->insert([
            'first_name'    => $first,
            'last_name'     => $last,
            'email'         => $email,
            'password_hash' => password_hash($pass, PASSWORD_DEFAULT),
            'profile_image' => null
        ]);

        return redirect()->to('/login')->with('success', 'Account created successfully. Please log in.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

