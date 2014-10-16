<?php

Route::get('customers','App\Modules\Customers\Controllers\CustomersController@index');


Route::api(['version' => 'v1', 'prefix' => 'api'], function()
{
    // Customers  management
    Route::group(array('prefix' => 'customers'), function()
	{		
		//get all
		Route::get('/',['as'=>'Customerslist','uses'=>'App\Modules\Customers\Controllers\ApiCustomersController@index']); //Get all
		Route::get('{Customersisd}',['as' => 'selectedCustomers','uses' => 'App\Modules\Customers\Controllers\ApiCustomersController@GetCustomers'])
             ->where('Customersisd', '[\d,]+');
        
        Route::get('{Customersisd}/categories',['as'=>'Customerscategories','uses'=>'App\Modules\Customers\Controllers\ApiCustomersController@categories']);
        Route::get('{Customersisd}/branches',['as' =>'Customerbranches','uses' =>'App\Modules\Customers\Controllers\ApiCustomersController@branches']);
        Route::post('/',['as'=>'create','uses'=>'App\Modules\Customers\Controllers\ApiCustomersController@create']); //Create
        Route::put('{CustomerId}','App\Modules\Customers\Controllers\ApiCustomersController@update'); //Update
        Route::delete('{CustomerId}','App\Modules\Customers\Controllers\ApiCustomersController@destroy')
             ->where('Customersisd', '[\d,]+');; //Delete
		
		Route::get('{CustomerId}/restore','App\Modules\Customers\Controllers\ApiCustomersController@restore'); //Restore
    
    });
});