<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserAuthController extends Controller
{
    /**
     * Show login form.
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.user.login');
    }

    /**
     * Login request for user.
     * @param \App\Http\Requests\Auth\UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
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

    /**
     * Logout user.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('user.login.form');
    }
}
