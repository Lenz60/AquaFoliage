<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Auth;


// use UnexpectedValueException;


if(!function_exists('validateJWT')){
    function validateJWT($token){
        //v Checking the JWT token
        // $jwt = $_COOKIE['userData'];
        try{
            JWT::decode($token,new Key(config('app.jwt_secret'),'HS256'));
            return true;

        }catch(\LogicException | \UnexpectedValueException  $e){
            // dd($e->getMessage());

            setcookie('userData', null);
            Auth::guard('web')->logout();
            session()->invalidate();
            session()->regenerateToken();

            return false;
        }
        //v ////////////////////////////
    }
}
