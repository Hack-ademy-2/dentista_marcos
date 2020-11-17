<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/','home')->name('home');
Route::view('/implantologia','implantologia')->name('implantologia');
Route::view('/protesis','protesis')->name('protesis');
Route::view('/somos','somos')->name('somos');

// Route::get('/implantologia', function () {
//     return view('implantologia');
// });

// Route::get('/protesis', function () {
//     return view('protesis');
// });

// Route::get('/somos', function () {
//     return view('somos');
// });


