<?php

namespace App\Http\Requests\Auth;

use App\Http\Controllers\JwtController;
use App\Models\Payload;
use Firebase\JWT\JWT;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {

        $credentials = [
            'email' =>$this->email,
            'password' =>$this->password
        ];

        $data = DB::table('users')
        ->select('id','email_verified_at')
        ->where('email',$credentials['email'])
        ->first();





        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($credentials,$this->remember)) {

            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                // 'email' => trans('auth.failed'),
                'status' => 'Login Failed',
            ]);
        }else{

            if($this->remember){
                $data = [
                'id' => $data->id,
                'iat' => time(),
                'exp' => time()+3600,

                // 'email_verified_at' => $data->email_verified_at
                ];
                setcookie('rememberEmail', $credentials['email']);
            }else{
                $data = [
                'id' => $data->id,
                'iat' => time(),
                'exp' => time()+3600,
                // 'email_verified_at' => $data->email_verified_at
                ];
                setcookie('rememberEmail', null);
            }
            $token = JWT::encode($data,config('app.jwt_secret'),'HS256');
            setcookie('userData', $token);

            // Remove the offline state when user is login
            if(isset($_COOKIE['offlineState'])){
                setcookie('offlineState', null);
            }
        }



        RateLimiter::clear($this->throttleKey());
    }

    public function encodeToken($payload){
        $token = Auth::refresh();
        dd($token);
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }




}
