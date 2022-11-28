<?php

namespace App\Controllers;

class OtController extends BaseController
{
    public function index() {
        return view('admin/ot/manage');
    }
}