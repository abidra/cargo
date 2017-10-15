<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/users', 'AdminController@index')->name('admin.users');
    Route::get('/admins', 'AdminsController@index')->name('admin.admins');
    route::get('/invoice', 'AdminController@invoice')->name('admin.invoice');
//    Route::get('/admins/create', 'AdminsController@create')->name('admin.admins.create');
//    Route::post('/admins/store', 'AdminsController@create')->name('admin.admins.store');
//    Route::get('/admins/{id}/edit', 'AdminsController@edit')->name('admin.admins.edit');
//    Route::put('/admins/{id}/update', 'AdminsController@update')->name('admin.admins.update');
//    Route::put('/admins/{id}/destroy', 'AdminsController@destroy')->name('admin.admins.destroy');
    Route::resource('admins', 'AdminsController');
//    Route::get('/usermanagements', 'UsermanagementsController@index')->name('admin.usermanagements');
//    Route::get('/usermanagements/create', 'UsermanagementsController@create')->name('admin.usermanagements.create');
//    Route::get('/usermanagements/store', 'UsermanagementsController@store')->name('admin.usermanagements.store');
//    Route::get('/usermanagements/{id}/edit', 'UsermanagementsController@edit')->name('admin.usermanagements.edit');
//    Route::get('/usermanagements/{id}/update', 'UsermanagementsController@update')->name('admin.usermanagements.update');
//    Route::get('/usermanagements/{id}/destroy', 'UsermanagementsController@destroy')->name('admin.usermanagements.destroy');
    Route::resource('usermanagements', 'UsermanagementsController');

});
