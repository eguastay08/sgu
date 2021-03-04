<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CountryController;
//Route::get('/countries/{search}',[CountryController::class,'show']);

Route::prefix('v1')->group(function () {
  //  Route::get('/country',[CountryController::class,'index']);
   // Route::apiResource('/countries',CountryController::class);
    Route::get('/countries',[CountryController::class,'index']);
    Route::get('/countries/{country}',[CountryController::class,'show']);
    //Route::get('/countries/{country}/{}',[CountryController::class,'show']);

});

