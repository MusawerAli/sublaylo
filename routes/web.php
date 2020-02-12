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
Auth::routes();

Route::get('profile','ProfileController@index')->name('profile');
Route::group(['middleware'=>['shopper','auth']],function(){
    Route::get('shopper','ProfileController@index');
});


Route::post('UpdateProfile','ProfileController@UpdateProfile')->name('update.profile');

// Route of Website

 Route::get('/Auth/login','AuthController@index')->name('login');
 Route::post('/Auth/login','AuthController@index')->name('login');
 Route::get('/Auth/logout','AuthController@logout')->name('logout');
Route::get('/dashboard',function(){
    return view('user.user-dashboard');
})->name('dashboard');


Route::get('/shopkeeper-dash',function(){
    
    return view('shopkeeper.shop-dash');
});



//Ajax Call Route

Route::post('/Check/Email','AuthController@CheckEmail')->name('Check.Email');
Route::post('/SignUp','AuthController@SignUp')->name('SignUp');
Route::get('/home/{name?}',function(){
    return view('user.user-dashboard');
})->middleware('CheckRole');



            //*******Admin site Routes******//




Route::get('/add-shops',function(){
    return view('admin.pages.add-shops');
})->name('AddShops');
Route::get('/admin-dash',function(){
    return view('admin.admin-dash');
})->name('admin-dash');
Route::post('/add-business','ShopsController@add_business')->name('AddBusiness');

Route::get('/ShopskeeperDetail','ShopsController@shops_detail')->name('ShopskeeperDetail');
Route::get('/test','ShopsController@shops_detail')->name('test');
Route::get('/statuschange','ShopsController@ChangeStatus')->name('status');



        //**************ShopKeeper site Route *************//

Route::get('/shopdash','UserShopsController@index')->name('ShopDash');
Route::get('/AddPrd','UserShopsController@AddPrd')->name('AddPrd');