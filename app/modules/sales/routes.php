<?php

Route::get('sales','App\Modules\Sales\Controllers\SalesController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'sales'), function()
	{		
         Route::get('/',function(){
            return 'You have landed in the right place';
         });
    });
});