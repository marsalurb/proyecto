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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('suppliers', 'SupplierController');
Route::resource('users', 'UserController');
Route::resource('employers', 'EmployerController');
Route::resource('purchaser', 'PurchaserController');
Route::resource('sales', 'SaleController');
Route::resource('items', 'ItemController');
Route::resource('linesales', 'LineSaleController');

Route::get('saludo', function(){
    return view('saludo');
});
