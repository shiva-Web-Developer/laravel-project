<?php

use Illuminate\Support\Facades\Route;

// use APP\Http\Controllers\Membercontroller;

use App\Http\Controllers\Membercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LOGIN VIEW 
Route::get('/', function () {
    return view('index');
});


// SAVE DATA
Route::post('getAdd',[Membercontroller::class,'getAdd']);
// LOGIN VIEW
Route::get('login',[Membercontroller::class,'login']);
// LOGIN QUERY
Route::post('logindata',[Membercontroller::class,'logindata']);
// LIST VIEW
Route::get('view',[Membercontroller::class,'view']);
// DELETE DATA
Route::get('delete/{id}',[Membercontroller::class,'delete']);
// EDIT VIEW
Route::get('editview/{id}',[Membercontroller::class,'editview']);
// EDIT QUERY
Route::post('edit',[Membercontroller::class,'update']);
// LOGOUT DATA 
Route::get('logout',[Membercontroller::class,'logout']);

