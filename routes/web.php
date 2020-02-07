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
    return view('city-detail',['city'=>$city]);
})->name('find-city');

Route::get('accounts',function(){
    return view('accounts');
});



// Route of Website

Route::post('/Auth/login','AuthController@index')->name('login');
Route::get('/Auth/logout','AuthController@logout')->name('logout');
Route::get('/dashboard/{UserName}',function($UserName){
    return view('user.user-dashboard');
})->name('dashboard/{UserName}');


Route::get('/shopkeeper-dash',function(){
    
    return view('shopkeeper.shop-dash');
})->name('/s_dashboard');

Route::get('/admin-dash',function(){
    return view('admin.admin-dash');
});

//Ajax Call Route

Route::post('/Check/Email','AuthController@CheckEmail')->name('Check.Email');
Route::post('/SignUp','AuthController@SignUp')->name('SignUp');
Route::get('/home/{name?}',function(){
    return view('user.user-dashboard');
})->middleware('CheckRole');



            //*******Admin site Routes******//






