<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



 Route::group(['prefix' => 'pbn', 'namespace' => 'Seekahost\Pbn\Http\Controllers', 'as' => 'pbn.'], function () {
    Route::get('', 'PbnController@index')->name('index');
    Route::get('create', 'PbnController@create')->name('create');
    Route::post('store', 'PbnController@store')->name('store');
});

