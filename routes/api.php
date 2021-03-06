<?php

use App\Http\Controllers\API\TestController;
use App\Http\Controllers\API\v1\BusinessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\CategoryController;
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

Route::get('test', [TestController::class, 'index']);


Route::get('v1/categories', [CategoryController::class, 'index']);
Route::post('v1/categories', [CategoryController::class, 'store']);



Route::get('v1/business', [BusinessController::class, 'index']);



