<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Redirect;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('countries', 'App\Http\Controllers\CountryController')
    ->middleware(['auth']);

Route::get('/', function () {
    return Redirect::action('App\Http\Controllers\CountryController@index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
