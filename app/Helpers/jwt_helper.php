<?php

use App\Models\UserModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;



function getJWT($header)
{
    if (is_null($header)) {
        throw new Exception("JWT Authentication failed");
    }
    return explode(" ", $header)[1];
}

function validateJWT($token)
{
    $model = new UserModel();
    $key = getenv('JWT_SECRET_CODE');
    $decodedToken = JWT::decode($token, new Key($key, 'HS256'));
    $model->checkAuth($decodedToken->id);
}

function createJWT($id, $username)
{
    $requestTIme = time();
    $tokenTime = getenv('JWT_TIME_EXP');
    $tokenExpireTime = $requestTIme + $tokenTime;
    $payload = [
        'id' => $id,
        'username' => $username,
        'iat' => $requestTIme,
        'exp' => $tokenExpireTime,
    ];
    $jwt = JWT::encode($payload, getenv('JWT_SECRET_CODE'), 'HS256');
    return $jwt;
}