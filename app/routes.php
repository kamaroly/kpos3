<?php


Route::get('/', function()
{
	return View::make('layouts.desktop ');
});

Route::get('/main', function()
{
	return View::make('partials.main');
});

Route::get('/modal', function()
{
	return View::make('partials.modal');
});

Route::api(['version' => 'v1'], function()
{
     // Product category management
    Route::group(array('prefix' => 'categories'), function()
	{
		//get all
		Route::get('/', function(){
			return 'List All';
		});
		
		//Get one 
		Route::get('{categoryid}', function(){
			return 'Get a one with id: {categoryid}';
		});
       
        //Create one 
        Route::post('/', function(){
        	return 'Create one';
        });

        //Update 
        Route::put('{categoryid}', function(){
        	return 'Update ';
        });
        //Delete
		Route::delete('{categoryid}', function(){
			return 'Delete a user';
		});

		//Restore deleted
		Route::get('{categoryid}/restore',function(){
           return 'Restore a deleted';
		});
    });
    
     

    //Customer  management
    Route::group(array('prefix' => 'customers'), function()
	{
		//get all
		Route::get('/', function(){
			return 'List All';
		});
		
		//Get one 
		Route::get('{CustomerId}', function(){
			return 'Get a one with id: {CustomerId}';
		});
       
        //Create one 
        Route::post('/', function(){
        	return 'Create one';
        });

        //Update 
        Route::put('{CustomerId}', function(){
        	return 'Update ';
        });
        //Delete
		Route::delete('{CustomerId}', function(){
			return 'Delete a user';
		});

		//Restore deleted
		Route::get('{CustomerId}/restore',function(){
           return 'Restore a deleted';
		});
    });
    //Cart  management
    Route::group(array('prefix' => 'cart'), function()
	{
		//get all
		Route::get('/', function(){
			return 'List All items in cart currently';
		});
		
		//Get one 
		Route::get('{itemid}', function(){
			return 'Get on Cart item using ID';
		});
       
        //Create one 
        Route::get('{ItemId}/remove', function(){
        	return 'Remove one Item from the cart';
        });

        //Update 
        Route::post('{ItemId}', function(){
        	return 'Update item in the cart';
        });
        //Destroy current cart
		Route::delete('/destroy', function(){
			return 'Destroy';
		});

		//Empty cart
		Route::get('/empty',function(){
           return 'Empty current cart';
		});
       //susbpend cart
		Route::get('/empty',function(){
           return 'suspend current cart';
		});
    });
});