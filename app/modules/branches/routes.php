<?php

Route::get('branches','App\Modules\Branches\Controllers\branchesController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'branches'), function()
	{		
		Route::get('/','App\Modules\Branches\Controllers\ApibranchesController@index');
    });
});