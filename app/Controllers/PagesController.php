<?php

namespace App\Controllers;


class PagesController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function header()
    {
        return view('pages/header');
    }

    public function footer()
    {
        return view('pages/footer');
    }
}
