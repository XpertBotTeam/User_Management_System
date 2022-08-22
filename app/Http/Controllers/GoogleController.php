<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        
        return Socialite::driver('google')->redirect();
        
    }
    //
    public function callbackFromGoogle()
    {
        
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);

                return redirect('/employees');

            }else{
                $newUser = User::create([

                    'username' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id,

                    'last_name'=> $user->user['family_name'],

                    'first_name'=> $user->user['given_name'],

                    'password'=>Hash::make($user->user['id']),



                ]);

                Auth::login($newUser);

                return redirect('/employees');

            }  
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
