<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('main/presentation');
    }

    public function about () {
        return view('main/about');
    }

    public function contact () {
        return view('main/contact');
    }
}
