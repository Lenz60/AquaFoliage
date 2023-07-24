<?php

namespace App\Http\Controllers;

use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class UserController extends Controller
{

    public function indexLogin(){
        return inertia('Components/Users/Login');
    }
    //
    public function login(){
        $email = request('email');
        $password = request('password');
        // dd(hash($password));
        
        $data = DB::table('users')
        ->select('id','name','email')
        ->where('email', $email)
        ->where('password', bcrypt($password))
        ->first();
        // dd($data);

            if($data){
                // dd($data);
                setcookie("id",$data->id);
                setcookie("name",$data->name);
                setcookie("email",$data->email);
               return inertia('Home');

            }else{
                dd('Login failed, data not found');
                return inertia('Components/Users/Login');
            }

    }
    public function register(){

        return inertia('Components/Users/Register');
    }
}
