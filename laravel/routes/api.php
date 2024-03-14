<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/test',[ArticlesController::class,'test']);
Route::post('register',[ArticlesController::class, 'register']);
Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {

    // Route::post('login',[AuthController::class,'login']);
    // Route::get('/user',[AuthController::class,'/user']);
    // Route::post('/update',[AuthController::class,'/update']);
    // Route::post('logout',[AuthController::class,'logout']);
    // Route::post('refresh',[AuthController::class,'refresh']);
    // Route::post('me',[AuthController::class,'me']);

});


//get type_ie=3 articles where are welcome info
Route::get('/welcomeinfo/',[ArticlesController::class, 'welcomeInfo']);
