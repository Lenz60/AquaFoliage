<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Exceptions;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseTrait;
use CodeIgniter\Controller\HomeController;
use Exception;
use CodeIgniter\View\View;

class LoginModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    protected $validationRules = [
        'username'   => 'required|min_length[4]',
        'password'   => 'required|min_length[4]',
    ];

    protected $validationMessages = [
        'username'   => 'The username field is required.',
        'password'   => 'The password field is required.',
    ];

    public function login($username, $password)
    {

        $builder = $this->table('users');
        $data = $builder->where('username', $username)->first();
        if (!$data) {
            throw new PageNotFoundException('Login Invalid.');
        }
    }
}
