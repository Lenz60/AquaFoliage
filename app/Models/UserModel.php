<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Exceptions;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller\HomeController;
use Exception;
use CodeIgniter\View\View;

class UserModel extends Model
{
    use ResponseTrait;
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'token', 'logout_at'];

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
            throw new PageNotFoundException('User Not Found.');
        } else {
            $id = $data['id'];
            $pass = $data['password'];
            $encryptedPass = $model->encryptPass($password);
            if ($pass !== $encryptedPass) {
                throw new Exception("Passwords do not match");
            }
            helper('jwt');
            $token = createJWT($id, $username);
            $expireCookie = time() + 604800;
            setcookie("COOKIE-EXPIRED", false);
            setcookie("COOKIE-SESSION", $token, $expireCookie, '/', null, 'null', true);
            return $token;
        }
    }


    public function checkAuth($id)
    {
        $builder = $this->table('users');
        $data = $builder->where("id", $id)->first();
        if (!$data) {
            throw new PageNotFoundException('Authentification failed.');
        } else {
            return $data;
        }
    }
}
