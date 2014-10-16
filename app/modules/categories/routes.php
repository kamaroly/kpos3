<?php

Route::get('categories',function(){
    return 'Landed in items categories';
});


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // items  management
    Route::group(array('prefix' => 'categories'), function()
	{		
		//get all
		Route::get('/',['as'=>'categorylist','uses'=>'App\Modules\Categories\Controllers\ApiCategoriesController@index']); //Get all
		Route::get('{categoryid}','App\Modules\Categories\Controllers\ApiCategoriesController@Getitems')
             ->where('categoryid', '[\d,]+');
        
        Route::get('{categoryid}/categories',['as'=>'categoryitems','uses'=>'App\Modules\Categories\Controllers\ApiCategoriesController@categories']);
        
        Route::post('/',['as'=>'create','uses'=>'App\Modules\Categories\Controllers\ApiCategoriesController@create']); //Create
        Route::put('{categoryid}','App\Modules\Categories\Controllers\ApiCategoriesController@update'); //Update
        Route::delete('{categoryid}','App\Modules\Categories\Controllers\ApiCategoriesController@destroy')
             ->where('categoryid', '[\d,]+');; //Delete
		
		Route::get('{categoryid}/restore','App\Modules\Categories\Controllers\ApiCategoriesController@restore'); //Restore
    
    });
});