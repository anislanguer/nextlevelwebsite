<?php

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
Route::get('/basic-rules', function () {
    return view('ls-basic-rules');
})->name('basic-rules');
Route::get('/category', function () {
    return view('categorycars');
})->name('category');
Route::get('/category/vans', function () {
    return view('vans');
})->name('vans');
Route::get('/category/suvs', function () {
    return view('suvs');
})->name('suvs');
Route::get('/category/offroad', function () {
    return view('offroad');
})->name('offroad');
Route::get('/category/muscle', function () {
    return view('muscle');
})->name('muscle');
Route::get('/category/coupé', function () {
    return view('coupé');
})->name('coupe');
Route::get('/category/compacts', function () {
    return view('compacts');
})->name('compacts');
Route::get('/category/sports', function () {
    return view('sports');
})->name('sports');
Route::get('/category/sedans', function () {
    return view('sedans');
})->name('sedans');
Route::get('/category/supercars', function () {
    return view('supercars');
})->name('supercars');
Route::get('/category/sportsclass', function () {
    return view('sportsclass');
})->name('sportsclass');

Route::get('/ems-rules', function () {
    return view('ls-ems-rules');
})->name('ems-rules');
Route::get('/illegale-rules', function () {
    return view('ls-illegale-rules');
})->name('illegale-rules');
Route::get('/mort-rp-rules', function () {
    return view('ls-mortrp-rules');
})->name('mort-rp-rules');
Route::get('/police-rules', function () {
    return view('ls-police-rules');
})->name('police-rules');
Route::get('/streamer-rules', function () {
    return view('ls-streamer-rules');
})->name('streamers-rules');
Route::get('/authentication', function () {
    return view('authentication');
})->name('authentication');
Route::get('/index','Controller@index')->name('index');
Route::get('/city','CityController@index')->name('city');
Route::get('/north','NorthController@index')->name('north');
Route::get('/comingsoon', function () {
    return view('comingsoon');
})->name('comingsoon');
Route::get('/profile', function () {
    return view('comingsoon');
})->name('profile');
Route::get('/profile', 'Controller@profile')->name('profile');
Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');