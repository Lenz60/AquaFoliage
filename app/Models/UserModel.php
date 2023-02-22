<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Exceptions;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseTrait;
use CodeIgniter\Controller\HomeController;
use Exception;
use CodeIgniter\View\View;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password'];

    public function encryptPass($password)
    {
        $salt1 = getenv('SALT1');
        $salt2 = getenv('SALT2');
        $key = getenv('KEY');
        $saltedPassword = $salt1 . $password . $salt2;
        $encryptedPassword = hash_hmac('sha256', $saltedPassword, $key);
        return $encryptedPassword;
    }
    public function register($dataInserted)
    {

        $model = new UserModel();
        $username = $dataInserted['username'];
        $builder = $this->table('users');
        $data = $builder->where('username', $username)->first();
        if (!$data) {
            $model->save($dataInserted);
        } else {
            throw new PageNotFoundException('Account already exists.');
        }
    }
    public function login($username, $password)
    {
        $model = new UserModel();
        $builder = $this->table('users');
        $data = $builder->where('username', $username)->first();
        if (!$data) {
            throw new PageNotFoundException('Login Invalid.');
        } else {
            $pass = $data['password'];
            $encryptedPass = $model->encryptPass($password);
            if ($pass !== $encryptedPass) {
                throw new PageNotFoundException('Login Invalid.');
            }
        }
    }
}
