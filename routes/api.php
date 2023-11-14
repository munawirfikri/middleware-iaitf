<?php

use App\Http\Controllers\MainWebController;
use App\Http\Controllers\PortalController;
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

Route::prefix('main-web')->group(function(){
    Route::get('/get-posts', [MainWebController::class, 'getPostTitle']);
});

Route::prefix('portal')->group(function(){
    Route::get('/get-students', [PortalController::class, 'getMasterStudents']);
});

