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
    return view('home');
});

Route::get('/lang/{lang}',function($lang){
    if(in_array($lang,['en','ar','tr'])){
        Session()->put('lang',$lang);
    }
    
    return back();
});

Route::group(['middleware'=>'Lang'],function(){
    Route::get('/',function(){
        return view('home');
    });
    Route::get('/contactus',function(){
        return view('contact');
    });
    
    Route::get('/products','HomeController@showproducts');
});



Auth::routes(['register' => false]);
Route::get('/logout',function(){
    Auth::logout();
    return Redirect::to('login');
});
Route::get('/admins', 'AdminController@index')->name('home');

Route::get('/admins/add/product','AdminController@showFormProduct');
Route::post('/admins/add/product','AdminController@saveFormProduct');
Route::get('/admins/show/product','AdminController@showProducts');
Route::get('/admins/edit/product/{id}','AdminController@showFormEdit');
Route::post('/admins/edit/product/{id}','AdminController@saveEdit');
Route::get('admins/delete/product/{id}','AdminController@deleteProduct');
Route::get('admins/add','AdminController@showadminadd');
Route::get('admins/show','AdminController@showAllAdmin');