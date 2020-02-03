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
    return view('sections.select-cities');
});

Route::get('/find-city/{city?}',function($city){
    return $city;
})->name('find-city');

Route::get('accounts',function(){
    return view('accounts');
});