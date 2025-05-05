<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRequest;
use App\Models\Card;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
   public function loginForm()
   {
        return view('auth.login');
   }

   public function login(UserRequest $request)
   {
        $phone = $request->input('phone');
        $cardNumber = $request->input('card_number');

        $user = User::where('phone', $phone)->first();
     
        if ($user && $user->cards()->where('card_number', $cardNumber)->exists()) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}
