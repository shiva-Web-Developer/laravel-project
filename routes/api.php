<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIcontroller;
use App\Http\Controllers\POSTAPIcontroller;

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

// normal fuction call 
Route::get("hello",[APIcontroller::class,'hello']);

// data insert api use
Route::post("Datasend",[POSTAPIcontroller::class,'Datasend']);

// data update api use 
Route::put("update",[POSTAPIcontroller::class,'update']);

// data delete api use 
Route::delete("delete/{id}",[POSTAPIcontroller::class,'delete']);

