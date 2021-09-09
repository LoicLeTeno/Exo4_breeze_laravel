<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     $roles = Role::all();
    
//     return view('dashboard', compact('roles'));
// })->middleware(['auth'])->name('dashboard');

// Route::get('/membre', function () {
//     $roles = Role::all();
    
//     return view('pages.home', compact('roles'));
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::all();
    return view('partials.user.index', compact('users'));
});

Route::get('/dashboard', function () {
    $admins = User::where('role_id', '1')->get();
    
    return view('dashboard', compact('admins'));
})->middleware(['auth'])->name('dashboard');

Route::delete('/dashboard/{id}', [RegisteredUserController::class, 'destroy']);

Route::get('/dashboard/{id}/show', function ($id) {
    $show = User::find($id);

    return view('partials.admin.show', compact('show'));
})->middleware(['auth'])->name('show');

Route::get('/users/{id}/edit', function ($id) {
    $users = User::find($id);
    $roles = Role::all();
    return view('partials.user.edit', compact('users', 'roles'));
});

Route::put('/users/{id}/update', function (Request $request, $id) {
    dd($request);
    $users = User::find($id);
    $users->name = $request->name;
    $users->nickName = $request->nickName;
    $users->year = $request->year;
    $users->adress = $request->adress;
    $users->email = $request->email;
    $users->role_id = $request->role_id;
    $users->save();
    return redirect('/users');
});

Route::resource('role', RoleController::class);

require __DIR__.'/auth.php';