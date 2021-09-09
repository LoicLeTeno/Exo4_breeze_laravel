<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        // return $request->user()->hasVerifiedEmail()
        //             ? redirect()->intended(RouteServiceProvider::HOME)
        //             : view('auth.verify-email');

        // if (Auth::user()->users->name == 'admin') {
            return $request->user()->hasVerifiedEmail()
                ? redirect()->intended(RouteServiceProvider::HOME)
                : view('auth.verify-email');
        // } else {
        //     return $request->user()->hasVerifiedEmail()
        //         ? redirect()->intended(RouteServiceProvider::MEMBRE)
        //         : view('auth.verify-email');
        // }
    }
}
