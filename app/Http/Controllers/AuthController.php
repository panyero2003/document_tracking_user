<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Listeners\LoginActivity;

class AuthController extends Controller
{
    public function getSignUpPage()
    {
        return view('auth.signup');
    }

    public function getSignInPage()
    {
        return view('auth.signin');
    }

    // public function getDashboardPage()
    // {
    //     return view('auth.dashboard');
    // }

    public function postSignUp(Request $request)
    {
        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->route('main');
    }

    public function postSignIn(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('home');
        }
        return redirect()->back();

         //return redirect('/dashboard');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }
}