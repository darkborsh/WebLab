<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserTitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('titles')->group(function () {
    Route::get('/', [TitleController::class, 'list']);
    Route::get('/{id}', [TitleController::class, 'info']);
});

Route::prefix('features')->group(function () {
    Route::get('/', [FeatureController::class, 'list']);
});

Route::prefix('user')->group(function(){
    Route::post('/', [UserController::class, 'authorization']);
});

Route::prefix('user_titles')->group(function(){
    Route::post('/', [UserTitleController::class, 'info']);
});
