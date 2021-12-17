<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
Route::group(['middleware' => 'auth:sanctum'],function(){
Route::Apiresource('categories','App\Http\Controllers\Api\CategoryController');
Route::Apiresource('transactions','App\Http\Controllers\Api\TransactionController');
});

Route::post('/auth/login',[\App\Http\Controllers\Api\AuthController::class,'login']);
Route::post('/auth/register',[\App\Http\Controllers\Api\AuthController::class,'register']);
Route::post('/auth/logout',[\App\Http\Controllers\Api\AuthController::class,'logout']);



