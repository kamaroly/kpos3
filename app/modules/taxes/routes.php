<?php

Route::get('taxes','App\Modules\Taxes\Controllers\TaxesController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'taxes'), function()
	{		
       Route::get('{taxid}/items','App\Modules\Taxes\Controllers\TaxesController@items');

       Route::get('{taxid}/branches','App\Modules\Taxes\Controllers\TaxesController@branches');
    });
});