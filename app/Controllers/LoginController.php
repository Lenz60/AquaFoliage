<?php

namespace App\Controllers;

use App\Filters\JwtFilter;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class LoginController extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        if (!isset($_COOKIE['COOKIE-SESSION'])) {
            return view('pages/login');
        } else {
            return redirect()->to('/');
        }
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
    public function logout()
    {
        setcookie('COOKIE-SESSION', null);
        return redirect()->to('/login');
        // session_write_close();
    }
}
