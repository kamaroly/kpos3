<?php


Route::group(array('prefix'=>'customers'), function()
{
	Route::get('/',function(){
		return ' This is a route group';
	});
});
