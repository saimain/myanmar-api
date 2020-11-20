<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/townships', [APIController::class, 'getTownships']);
Route::get('/regions', [APIController::class, 'getRegions']);
