<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

//Route::get('data',[ApiController::class, 'getdata']);
Route::post('added',[ApiController::class, 'AddSubmit']);

Route::get('list',[ApiController::class, 'list']);
Route::get('list/{id?}',[ApiController::class, 'listparam']);
