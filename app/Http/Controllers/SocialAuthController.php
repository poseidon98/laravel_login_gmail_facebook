<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account'])
            ->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'password' => bcrypt('google_dummy_password')
            ]
        );

        Auth::login($user);

        return redirect('/dashboard'); // atau halaman tujuanmu
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')
            ->with(['prompt' => 'select_account'])
            ->redirect();
    }

    public function handleFacebookCallback()
    {

        if (request()->has('error')) {
            return redirect('/login')->with('error', 'Login Facebook dibatalkan.');
        }

        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::firstOrCreate(
            ['email' => $facebookUser->getEmail()],
            [
                'name' => $facebookUser->getName(),
                'password' => bcrypt('facebook_dummy_password')
            ]
        );

        Auth::login($user);

        return redirect('/dashboard'); // ganti sesuai kebutuhan
    }
}
