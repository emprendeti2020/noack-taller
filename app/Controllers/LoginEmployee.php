<?php

namespace App\Controllers;

class LoginEmployee extends BaseController
{
    public function index() {
        return view('employee/login');
    }

    public function forgot_password () {
        return view('employee/forgot-password');
    }
}