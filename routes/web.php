<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/sac/redirect', [AuthController::class,'keycloakRedirect']);

Route::get('/auth/sac/callback', [AuthController::class,'loginWithKeycloak']);

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
     $user = Socialite::driver('google')->user();
    return $user->token;
});
