<?php

   # User Management
	Route::group(array('prefix' => 'users'), function()
	{
		Route::get('/','App\Modules\Users\Controllers\UsersController@getIndex');
		Route::get('create','App\Modules\Users\Controllers\UsersController@getCreate');
		Route::post('create','App\Modules\Users\Controllers\UsersController@postCreate');
		Route::get('{userId}/edit','App\Modules\Users\Controllers\UsersController@getEdit');
		Route::post('{userId}/edit','App\Modules\Users\Controllers\UsersController@postEdit');
		Route::get('{userId}/delete','App\Modules\Users\Controllers\UsersController@getDelete');
		Route::get('{userId}/restore','App\Modules\Users\Controllers\UsersController@getRestore');
	
	});

   
Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'taxes'), function()
	{		
       Route::get('{taxid}/items','App\Modules\Taxes\Controllers\TaxesController@items');

       Route::get('{taxid}/branches','App\Modules\Taxes\Controllers\TaxesController@branches');
    });
});