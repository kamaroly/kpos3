<?php namespace App\Modules\Customers\Controllers;

use App\Modules\Customers\Models\Customers;
use Controller, Config, View;
 
class CustomerController extends Controller {

	public function getIndex()
	{
			
		return "Welcome to the Customer module";
	}

}
