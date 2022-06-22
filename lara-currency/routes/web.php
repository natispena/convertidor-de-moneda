<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;

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
    return view('login');
});
Route::get('inicio/', [
    'uses' =>'ApiController@inicio',
    'as' => 'inicio'
]);
Route::post('auth/login/', [
    'uses' =>'ApiController@login',
    'as' => 'auth.login'
]);

//ruta de currency.
Route::get("/currency",[CurrencyController::class,"index"]);
Route::post("/currency",[CurrencyController::class,"convertCurrency"]);


