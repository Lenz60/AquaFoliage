<?php

namespace App\Controllers;

use App\Models\BlacklistModel;


class HomeController extends BaseController
{
    public function index()
    {
        $blacklistModel = new BlacklistModel();
        $currentCookie = $_COOKIE['COOKIE-SESSION'];
        // dd($currentCookie);
        $checkBlacklist = $blacklistModel->checkJwtBlacklist($currentCookie);
        if (!$checkBlacklist) {
            return view('pages/home');
        }
    }
}
