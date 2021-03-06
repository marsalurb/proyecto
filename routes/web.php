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

Route::get('/home', 'HomeController@index');
Route::resource('suppliers', 'SupplierController');
Route::resource('users', 'UserController');
Route::resource('employers', 'EmployerController');
Route::resource('purchasers', 'PurchaserController');
Route::resource('sales', 'SaleController');
Route::resource('items', 'ItemController');
Route::resource('itemSales', 'ItemSaleController');
Route::resource('itemSuppliers', 'ItemSupplierController');

Route::get('/information',function(){
    return view('information');
})->name('information');



