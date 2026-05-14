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
        'user_id' => $user['id'],
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name'],
        'email' => $user['email'],
        'profile_image' => $user['profile_image'] ?? null,
        'role' => $user['role'],
        'is_logged_in' => true,
    ]);

       if ($user['role'] === 'admin') {
     return redirect()->to('/admin');
    }

    return redirect()->to('/dashboard');
    }

    public function apiLogin()
{
    $email = trim($this->request->getPost('email'));
    $password = $this->request->getPost('password');

    if (!$email || !$password) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Please enter your email and password.'
        ]);
    }

    $users = new UserModel();
    $user = $users->where('email', $email)->first();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Invalid login details.'
        ]);
    }

    if ($user['role'] !== 'student') {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Only student accounts can use the mobile app.'
        ]);
    }

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Login successful',
        'user' => [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'role' => $user['role'],
            'profile_image' => $user['profile_image'] ?? null
        ]
    ]);
}

    public function apiRegister()
{
    $first = trim($this->request->getPost('first_name'));
    $last  = trim($this->request->getPost('last_name'));
    $email = trim($this->request->getPost('email'));
    $pass  = $this->request->getPost('password');
    $pass2 = $this->request->getPost('confirm_password');

    if (!$first || !$last || !$email || !$pass || !$pass2) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Please complete all fields.'
        ]);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Please enter a valid email address.'
        ]);
    }

    if ($pass !== $pass2) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Passwords do not match.'
        ]);
    }

    if (strlen($pass) < 6) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Password must be at least 6 characters.'
        ]);
    }

    $users = new UserModel();

    if ($users->where('email', $email)->first()) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'That email is already registered. Please log in.'
        ]);
    }

    $users->insert([
        'first_name' => $first,
        'last_name' => $last,
        'email' => $email,
        'password_hash' => password_hash($pass, PASSWORD_DEFAULT),
        'profile_image' => null,
        'role' => 'student'
    ]);

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Account created successfully. Please log in.'
    ]);
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
        'first_name' => $first,
        'last_name' => $last,
        'email' => $email,
        'password_hash' => password_hash($pass, PASSWORD_DEFAULT),
        'profile_image' => null,
        'role' => 'student'
    ]);

        return redirect()->to('/login')->with('success', 'Account created successfully. Please log in.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function updateProfile()
{
    $userModel = new \App\Models\UserModel();

    $id = $this->request->getPost('id');

    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name'  => $this->request->getPost('last_name'),
    ];

    $password = $this->request->getPost('password');

    if (!empty($password)) {
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $userModel->update($id, $data);

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Profile updated successfully'
    ]);
}
}

