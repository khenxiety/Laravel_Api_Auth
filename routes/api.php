<?php

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


use App\Http\Controllers\Api\PassportAuthController;
use App\Http\Controllers\Api\ProductController;
 
// Route::post('/register', 'App\Http\Controllers\Api\PassportAuthController@register');
// Route::get('/test', 'App\Http\Controllers\Api\PassportAuthController@test');
Route::get('test', [PassportAuthController::class, 'test']);
Route::post('register', [PassportAuthController::class, 'register']);


Route::post('login', [PassportAuthController::class, 'login']);
  
Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [PassportAuthController::class, 'userInfo']);
 
    Route::resource('products', 'App\Http\Controllers\Api\ProductController');
 
});





