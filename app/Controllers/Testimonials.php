<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Testimonials extends BaseController
{
    public function index()
    {
        $reviewModel = new ReviewModel();

        $data['reviews'] = $reviewModel->orderBy('created_at', 'DESC')->findAll();

        return view('pages/testimonials', $data);
    }

    public function submit()
    {
        $reviewModel = new ReviewModel();

        $name = $this->request->getPost('name');
        $review = $this->request->getPost('review');

        if (!$name || !$review) {
            return redirect()->back()->with('error', 'Please complete all fields.');
        }

        $reviewModel->save([
            'name'   => $name,
            'review' => $review
        ]);

        return redirect()->to('/testimonials')->with('success', 'Thank you for your review.');
    }
}