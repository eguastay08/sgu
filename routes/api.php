<?php


use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CountryController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\PlataformController;
use \App\Http\Controllers\FileController;

Route::prefix('v1')->group(function () {
    Route::get('/countries/{country}',[CountryController::class,'search']);
    Route::get('/countries',[CountryController::class,'index']);

    Route::get('/categories',[CategoryController::class,'index']);
    Route::post('/categories',[CategoryController::class,'store']);
    Route::get('/categories/{cod_category}',[CategoryController::class,'show']);
    Route::put('/categories/{cod_category}',[CategoryController::class,'update']);
    Route::delete('/categories/{cod_category}',[CategoryController::class,'destroy']);


    Route::get('/plataforms',[PlataformController::class,'index']);
    Route::post('/plataforms',[PlataformController::class,'store']);
    Route::get('/plataforms/redirect',[PlataformController::class,'redirect']);
    Route::get('/plataforms/{cod_plataform}',[PlataformController::class,'show']);
    Route::put('/plataforms/{cod_plataform}',[PlataformController::class,'update']);
    Route::delete('/plataforms/{cod_plataform}',[PlataformController::class,'destroy']);


    Route::prefix('/plataforms')->group(function () {

    });

    Route::prefix('/upload')->group(function () {
        Route::post('/avatar',[FileController::class,'uploadAvatar']);
    });


});

