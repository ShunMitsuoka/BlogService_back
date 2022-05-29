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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 会員登録
use App\Http\Controllers\API\Auth\RegisterApiController;
Route::post('/user/register', [RegisterApiController::class, 'register']);
// ログイン
use App\Http\Controllers\API\Auth\LoginApiController;
Route::post('/user/login', [LoginApiController::class, 'login']);
