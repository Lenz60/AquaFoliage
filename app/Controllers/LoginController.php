<?php

namespace App\Controllers;

use App\Filters\JwtFilter;
use App\Models\BlacklistModel;
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
        if (!isset($_COOKIE['COOKIE-SESSION'])) {
            return view('pages/login');
        } else {
            $model = new BlacklistModel();
            $currentCookie = $_COOKIE['COOKIE-SESSION'];
            $dataToken = [
                'token' => $currentCookie,
                'logout_at' => date("Y-m-d H:i:s"),

            ];
            $model->addBlacklist($dataToken);
            setcookie('COOKIE-EXPIRED', true);
            setcookie('COOKIE-SESSION', null);
            return redirect()->to('/login');
        }
    }
}
