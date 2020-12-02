<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // dd($is_login);
        if (!$is_login) {
            return back();
        }

        return redirect(route('admin.home'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.login'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        // dd($user);
        $email = $user->email;

        $db_user = User::where('email', $email)->first();
        if ($db_user == null) {
            $user_githup = User::create([
                'username' => $user->nickname,
                'email' => $user->email,
                'password' => Hash::make('1234'),
                'oauth_token' => $user->token,
                'access_token' => Hash::make('01551785942'),
            ]);

            Auth::login($user_githup);
        } else
            Auth::login($db_user);

        return redirect(route('admin.home'));
        // $user->token;
    }
}
