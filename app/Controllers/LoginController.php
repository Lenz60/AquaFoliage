<?php

namespace App\Controllers;

use App\Models\LoginModel;


class LoginController extends BaseController
{

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }
    public function index()
    {

        return view('pages/login');
    }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login',
    //     ];

    //     return view('pages/login', $data);
    // }

    public function saveLogin()
    {
        // dd($this->request->getVar());

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $this->loginModel->login($username, $password);
        return redirect()->to('/');
    }
}
