<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nickName' => ['required', 'string', 'max:255'],
            'year' => ['required', 'integer', 'gte:18', 'lte:80'],
            'adress' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'nickName' => $request->nickName,
            'year' => $request->year,
            'adress' => $request->adress,
            'email' => $request->email,
            'role_id' => 1,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // if (Auth::user()->users->name == 'admin') {
            return redirect(RouteServiceProvider::HOME);
        // } else {
        //     return redirect(RouteServiceProvider::MEMBRE);
        // }
        
    }

    public function destroy($id){
        $destroy = User::find($id);
        $destroy -> delete();
        return redirect()->back();
    }
}
