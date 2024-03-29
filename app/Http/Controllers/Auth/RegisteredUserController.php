<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Firebase\JWT\JWT;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Illuminate\Support\Testing\Fakes\Fake;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Components/Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // dd(fake()->uuid());
        $user = User::create([
            'id' => fake()->uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'role' => '2',
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        event(new Registered($user));

        $data = [
                'id' => $user->id,
                'iat' => time(),
                'exp' => time()+3600,

                // 'email_verified_at' => $data->email_verified_at
                ];
                $token = JWT::encode($data,config('app.jwt_secret'),'HS256');

                setcookie('userData', $token);
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME2);
    }
}
