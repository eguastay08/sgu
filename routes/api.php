<?php


use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CountryController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\PlatformController;
use \App\Http\Controllers\FileController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;

Route::prefix('v1')->group(function () {
    //Rutas Libres
    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('/countries/{country}', [CountryController::class, 'search']);
    Route::get('/demo', [UserController::class, 'generateVerifyEmail']);
    //rutas con el prefijo /auth
    Route::group(['prefix' => 'auth'], function () {
        Route::post('/login', [AuthController::class, 'login']);
        //Rutas que requieren estar autenticado
        Route::middleware('auth:api')->group(function () {
            Route::get('userloggedin', [UserController::class, 'userLoggedIn']);
            Route::get('/logout', [AuthController::class, 'logout']);
        });
    });
    //Rutas con el prefijo password
    Route::group(['prefix' => 'password'], function () {
        Route::post('/recoverpassword', [UserController::class, 'recoverPassword']);
        Route::post('/reset/{token}', [UserController::class, 'restPassword']);
    });


    Route::get('/image/{img}',[FileController::class,'viewImage']);
    //rutas que requieren estar autenticado
    Route::middleware('auth:api')->group(function () {
        Route::get('/users/userinfo',[UserController::class,'userInfo']);
        Route::post('/users/avatar',[UserController::class,'uploadAvatar']);
        Route::put('/users/userinfo',[UserController::class,'userInfoUpdate']);
        Route::post('/users/verifyemail',[UserController::class,'sendVerifyEmail']);
        Route::post('/users/confirmemail',[UserController::class,'ConfirmEmail']);
        Route::get('/platforms/redirect', [PlatformController::class, 'redirect']);
    });

});

/*
Route::middleware('auth:api')->group(function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('refresh-token', [AuthController::class,'refresh']);
    });

    Route::prefix('v1')->group(function () {
        Route::get('/userinfo',[AuthController::class,'userInfo']);
        Route::get('/user', [AuthController::class, 'user']);
        Route::get('/countries', [CountryController::class, 'index']);
    });

});*/


/*
Route::group(['middleware'=>'auth:api'], function(){

    Route::prefix('v1')->group(function () {
        Route::get('/countries/{country}', [CountryController::class, 'search']);


        Route::get('/categories', [CategoryController::class, 'index']);
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::get('/categories/{cod_category}', [CategoryController::class, 'show']);
        Route::put('/categories/{cod_category}', [CategoryController::class, 'update']);
        Route::delete('/categories/{cod_category}', [CategoryController::class, 'destroy']);


        Route::get('/plataforms', [PlataformController::class, 'index']);
        Route::post('/plataforms', [PlataformController::class, 'store']);
        Route::get('/plataforms/redirect', [PlataformController::class, 'redirect']);
        Route::get('/plataforms/{cod_plataform}', [PlataformController::class, 'show']);
        Route::put('/plataforms/{cod_plataform}', [PlataformController::class, 'update']);
        Route::delete('/plataforms/{cod_plataform}', [PlataformController::class, 'destroy']);

        Route::prefix('/upload')->group(function () {
            Route::post('/avatar', [FileController::class, 'uploadAvatar']);
        });
    });
});*/

