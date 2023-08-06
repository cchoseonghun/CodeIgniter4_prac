<?php

namespace App\Controllers;

class Second extends BaseController
{
    public function index(): string
    {
        return view('test2');
    }
}
