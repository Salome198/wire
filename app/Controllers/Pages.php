<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('pages/home', ['title' => 'Wire | Home']);
    }

    public function about()
    {
        return view('pages/about', ['title' => 'Wire | About']);
    }

    public function testimonials()
    {
        return view('pages/testimonials', ['title' => 'Wire | Testimonials']);
    }

    public function partners()
    {
        return view('pages/partners', ['title' => 'Wire | Partners']);
    }
}
