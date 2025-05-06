<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
   public function create()
   {
        return view('auth.user.login');
   }

   public function store(UserRequest $request)
   {
        $phone = $request->input('phone');
        $cardNumber = $request->input('card_number');

        $user = User::where('phone', $phone)->first();
     
        if ($user && $user->cards()->where('card_number', $cardNumber)->exists()) {
            Auth::login($user);
            return redirect()->route('user.dashboard');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login.form');
    }
}
