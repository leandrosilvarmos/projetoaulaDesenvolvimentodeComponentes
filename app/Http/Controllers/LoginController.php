<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    //

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userProvider = Socialite::driver($provider)->stateless()->user();
        // dd($userProvider);

        $user =  User::firstOrCreate(
            ['email' => $userProvider->getEmail()] , 
            ['name' => $userProvider->getName()  ?? $userProvider->getNickname() , 'password'=>'loginsocial']
        );

        Auth::login($user);
        return redirect(route('home'));

        $user->token;
    }
}
