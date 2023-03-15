<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Exceptions;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller\HomeController;
use Exception;
use CodeIgniter\View\View;

class BlacklistModel extends Model
{
    use ResponseTrait;
    protected $table      = 'jwtblacklist';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token', 'logout_at'];


    public function addBlacklist($dataToken)
    {
        $model = new BlacklistModel();
        $builder = $this->table('jwtblacklist');
        // dd($dataToken);
        $model->save($dataToken);
    }
    public function checkJwtBlacklist($currentCookie)
    {
        $builder = $this->table('jwtblacklist');
        $datatoken = $builder->where('token', $currentCookie)->first();
        if ($datatoken) {
            //! Blacklisted token detected, back to login and reset cookie session
            setcookie("COOKIE-BLACKLISTED", true);
            setcookie('COOKIE-SESSION', null);
        } else {
            return false;
        }
    }
}
