<?php

use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::group(['middleware' => 'auth'], static function () {
    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__.'/auth.php';

Route::get('/{short_url}', [RedirectController::class, 'index']);
