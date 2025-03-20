<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\volt;

Route::view('/', 'welcome');

Route::get('show/users',function(){
    $users = App\Models\User::all();
    //dd($users->toArray());
    return view('users-factory')->with('users', $users);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
