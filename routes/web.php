<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Users\UserDetailsController;
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
    
// Main page of the application.
Route::get('/', [ HomeController::class, 'render' ])
    ->name('home');

// USERS
Route::prefix('users')->group(function() {

    // Display all users of the application.
    Route::get('/', [ UsersController::class, 'render' ])
        ->name('users');

    // Display user details.
    Route::get('/{userId}', [ UserDetailsController::class, 'render' ])
        ->name('users.user');
});
