<?php

Route::group(['middleware' => 'web', 'prefix' => 'daerah', 'namespace' => 'Modules\Daerah\Http\Controllers'], function()
{
    Route::get('/', 'DaerahController@index');
});
