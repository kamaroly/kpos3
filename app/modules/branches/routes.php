<?php

Route::get('branches','App\Modules\branches\Controllers\branchesController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'branches'), function()
	{		
 });
});