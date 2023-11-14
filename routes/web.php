<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/Welcome', [UserController::class,'welcome']);

//Route::get("person/{name?}", [PersonController::class, "getPerson"])->whereAlpha("name");
Route::get("person/{name?}", [PersonController::class, "getPerson"])->whereAlpha("name");
//Route::get("person/{name?}", [PersonController::class, "getPerson"])->whereAlphaNumeric("name");

//Route::get("personid/{id?}", [PersonController::class, "getPersonById"])->whereNumber("id");

//person/john/account/123
Route::get("personid/{name}/account/{accountId}", [PersonController::class, "getPersonById"])->whereNumber("id");
