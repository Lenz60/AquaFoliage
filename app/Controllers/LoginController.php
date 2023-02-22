<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {

        return view('pages/login');
    }

    public function login()
    {
        //Validations
        $validate = $this->validate([
            'username' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Please enter your username'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Please enter your password'
                ]
            ],
        ]);
        if (!$validate) {
            return view('/pages/login', ['validation' => $this->validator]);
        }
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $model->login($username, $password);
        return redirect()->to('/');
    }
}
