<?php

Route::get('branches','App\Modules\branches\Controllers\branchesController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // branches  management
    Route::group(array('prefix' => 'branches'), function()
	{		
		//get all
		Route::get('/',['as'=>'brancheslist','uses'=>'App\Modules\branches\Controllers\ApibranchesController@index']); //Get all
		Route::get('{branchesisd}',['as' => 'selectedbranches','uses' => 'App\Modules\branches\Controllers\ApibranchesController@Getbranches'])
             ->where('branchesisd', '[\d,]+');
        
        Route::get('{branchesisd}/categories',['as'=>'branchescategories','uses'=>'App\Modules\branches\Controllers\ApibranchesController@categories']);
        
        Route::post('/',['as'=>'create','uses'=>'App\Modules\branches\Controllers\ApibranchesController@create']); //Create
        Route::put('{branchId}','App\Modules\branches\Controllers\ApibranchesController@update'); //Update
        Route::delete('{branchId}','App\Modules\branches\Controllers\ApibranchesController@destroy')
             ->where('branchesisd', '[\d,]+');; //Delete
		
		Route::get('{branchId}/restore','App\Modules\branches\Controllers\ApibranchesController@restore'); //Restore
    
    });
});