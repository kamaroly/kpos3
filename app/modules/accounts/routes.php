<?php 
/*
|--------------------------------------------------------------------------
| Account Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::group(array('prefix' => 'account'), function()
{

	# Account Dashboard
	Route::get('/', array('as' => 'account', 'uses' => 'Controllers\Account\DashboardController@getIndex'));

	# Profile
	Route::get('profile', array('as' => 'profile', 'uses' => 'Controllers\Account\ProfileController@getIndex'));
	Route::post('profile', 'Controllers\Account\ProfileController@postIndex');

	# Change Password
	Route::get('change-password', array('as' => 'change-password', 'uses' => 'Controllers\Account\ChangePasswordController@getIndex'));
	Route::post('change-password', 'Controllers\Account\ChangePasswordController@postIndex');

	# Change Email
	Route::get('change-email', array('as' => 'change-email', 'uses' => 'Controllers\Account\ChangeEmailController@getIndex'));
	Route::post('change-email', 'Controllers\Account\ChangeEmailController@postIndex');

});