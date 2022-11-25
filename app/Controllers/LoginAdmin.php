<?php

namespace App\Controllers;

class LoginAdmin extends BaseController
{
    public function index() {
        return view('admin/login');
    }

    public function forgot_password () {
        return view('admin/forgot_password');
    }
}