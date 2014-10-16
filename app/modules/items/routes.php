<?php

Route::get('items','App\Modules\items\Controllers\ItemsController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // items  management
    Route::group(array('prefix' => 'items'), function()
	{		
		//get all
		Route::get('/',['as'=>'itemslist','uses'=>'App\Modules\Items\Controllers\ApiItemsController@index']); //Get all
		Route::get('{itemsisd}',['as' => 'selecteditems','uses' => 'App\Modules\Items\Controllers\ApiItemsController@Getitems'])
             ->where('itemsisd', '[\d,]+');
        
        Route::get('{itemsisd}/categories',['as'=>'itemscategories','uses'=>'App\Modules\Items\Controllers\ApiItemsController@categories']);
        
        Route::post('/',['as'=>'create','uses'=>'App\Modules\Items\Controllers\ApiItemsController@create']); //Create
        Route::put('{itemId}','App\Modules\Items\Controllers\ApiItemsController@update'); //Update
        Route::delete('{itemId}','App\Modules\Items\Controllers\ApiItemsController@destroy')
             ->where('itemsisd', '[\d,]+');; //Delete
		
		Route::get('{itemId}/restore','App\Modules\Items\Controllers\ApiItemsController@restore'); //Restore
    
    });
});