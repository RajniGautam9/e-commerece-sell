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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', function () {
    return view('index');
});


    

Route::resource('/product','ProductController');

Route::resource('/Brand','brandController');

Route::resource('/category','categoryController');

Route::resource('/Store','storeController');

Route::resource('/Department','departmentController');

Route::resource('/Employee','EmployeeController');

Route::resource('/Degination','DeginationController');

Route::resource('/payment','paymentController');

// Route::resource('/customer','CustomerController');

Route::resource('/admin','AdminController');

Route::resource('/profile','profileController');



Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

