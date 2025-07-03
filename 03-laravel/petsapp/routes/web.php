<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('factory', function () {
    $users= \App\Models\User::all();
    return view('users-factory')->with('users', $users);
});

Route::get('/dashboard', function (Request $request) {
    if (Auth::user()->role == 'Admin') {
        return view('dashboard-admin');
    } else if (Auth::user()->role == 'Customer') {
        return view('dashboard-customer');
    } else {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('error', 'Role no exist!');
    }

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resources([
        'users' => UserController::class,
        //'pets' => UserController::class,
        //'adoptions' => UserController::class,
    ]);

    Route::post('users/search', [UserController::class, 'search']);
});

require __DIR__.'/auth.php';
