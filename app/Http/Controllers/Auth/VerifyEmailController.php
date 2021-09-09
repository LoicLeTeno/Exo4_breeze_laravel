<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            // if (Auth::user()->users->name == 'admin') {
                return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
            // } else {
            //     return redirect()->intended(RouteServiceProvider::MEMBRE.'?verified=1');
            // }
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        // if (Auth::user()->users->name == 'admin') {
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        // } else {
        //     return redirect()->intended(RouteServiceProvider::MEMBRE.'?verified=1');
        // }
    }
}