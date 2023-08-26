<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $provider_user= '$'.$provider.'_user';
        $provider_id= $provider.'_id';

        try {

            $provider_user= Socialite::driver($provider)->user();

            $user= User::where($provider_id, $provider_user->getId())->first();

            if(!$user){
                $new_user = new User();
                $new_user->name= $provider_user->getName();
                $new_user->email= $provider_user->getEmail();
                $new_user->$provider_id= $provider_user->getId();
                $new_user->save();

                Auth::login($new_user);

                return redirect()->intended('user/home');

        }else
        {
            Auth::login($user);

            return redirect()->intended('user/home');
        }
        }catch (\throwable $th){
            dd('something went wrong '. $th->getMessage());
        }

    }

}
