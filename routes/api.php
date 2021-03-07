<?php

use App\Http\Controllers\CantonController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CountryController;
use \App\Http\Controllers\ProvinceController;

Route::prefix('v1')->group(function () {
    Route::get('/countries/{country}',[CountryController::class,'search']);
    Route::get('/countries',[CountryController::class,'index']);
});

