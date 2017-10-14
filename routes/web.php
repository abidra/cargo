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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', '\Modules\Daerah\Http\Controllers\DaerahController@index')->name('daerah');
Route::get('/admin', '\Modules\Admin\Http\Controllers\AdminController@index')->name('admin');
Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
