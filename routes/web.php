<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'page' => 'dashboard',
    ]);
})->name('dashboard');

Route::get('/dashboard/user/create', function () {
    return view('dashboard.user.form-create', [
        'page' => 'user',
    ]);
})->name('user.create');

Route::get('/dashboard/user/{user}/edit', function ($user) {
    return view('dashboard.user.form-edit', [
        'page' => 'user',
        'user' => $user,
    ]);
})->name('user.edit');

Route::get('/dashboard/user', function () {
    return view('dashboard.user.index', [
        'page' => 'user',
    ]);
})->name('user.index');

Route::get('/dashboard/profile', function () {
    return view('dashboard.user.profile-settings');
})->name('profile.index');

Route::get('/dashboard/logs', function () {
    return view('dashboard.logs.index', [
        'page' => 'logs',
    ]);
})->name('logs.index');
