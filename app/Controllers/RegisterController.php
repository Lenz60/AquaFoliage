<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {

        if (!isset($_COOKIE['COOKIE-SESSION'])) {
            return view('pages\register');
            //Take Validation message from session
            $validation = \Config\Services::validation();
        } else {
            return redirect()->to('/');
        }
    }

    public function register()
    {
        //Validations
        $validate = $this->validate([
            'username' => [
                'rules' => 'required|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Please enter your username'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter your email'
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
            return view('/pages/register', ['validation' => $this->validator]);
        }
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $email = $this->request->getVar('email');
        $encryptedPassword = $model->encryptPass($password);
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $encryptedPassword,
        ];
        $model->register($data);
        return redirect()->to('/login');
    }
}
