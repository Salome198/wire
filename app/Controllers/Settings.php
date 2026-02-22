<?php

namespace App\Controllers;

use App\Models\UserModel;

class Settings extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        // Why: we fetch user info from DB so settings reflects stored profile data.
        $users = new UserModel();
        $user = $users->find(session()->get('user_id'));

        return view('settings/index', [
            'title' => 'Wire | Settings',
            'user'  => $user
        ]);
    }

    public function updateProfileImage()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $file = $this->request->getFile('profile_image');

        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }

        // Why: basic security - only allow image types
        $allowed = ['image/jpg','image/jpeg','image/png','image/webp'];
        if (!in_array($file->getMimeType(), $allowed)) {
            return redirect()->back()->with('error', 'Only JPG, PNG or WEBP images are allowed.');
        }

        // Why: random name prevents overwriting + keeps files unique
        $newName = $file->getRandomName();
        $file->move(FCPATH . 'assets/img/profiles', $newName);

        // Why: store filename in DB so it loads dynamically later
        $users = new UserModel();
        $users->update(session()->get('user_id'), [
            'profile_image' => $newName
        ]);

        return redirect()->to('/settings')->with('success', 'Profile image updated.');
    }
}