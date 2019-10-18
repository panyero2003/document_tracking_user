<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/login');
});

Route::get('/home', 'HomeController@index');
    
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::auth();

Route::resource('/home', 'HomeController@index');

Route::get('/search_pr_input', [
        'uses' => 'PRsController@index',
        'as' => 'search_pr_input'
         ]);

Route::get('/user_pr', [
        'uses' => 'PurchaseRequestResultController@index',
        'as' => 'user_pr'
         ]);

Route::get('/user_payroll', [
        'uses' => 'PayrollResultController@index',
        'as' => 'user_payroll'
         ]);

Route::get('/user_voucher', [
        'uses' => 'VoucherResultController@index',
        'as' => 'user_voucher'
         ]);

Route::get('search', 'PRsController@Search')->name('search');

Route::get("my-search-result","PRsController@Search")->name('my-search-result');

Route::get("my-search","HomeController@viewSearch")->name('my-search');

Route::resource('search_pr_input','PRsController');

Route::resource('search_payroll_input','PayrollController');

Route::resource('search_voucher_input','VoucherController');

// Route::get('add-to-log', 'HomeController@myTestAddToLog');
// Route::get('logActivity', 'HomeController@logActivity');

Route::resource('/users','UserController');

Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');