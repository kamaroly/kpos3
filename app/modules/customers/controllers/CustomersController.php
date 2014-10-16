<?php namespace App\Modules\Customers\Controllers;

use App\Modules\Customers\Models\Customer as Customer;
/**
 * Kpos
 * 
 * An open source Point Of Sale
 *
 * @package		kpos3
 * @author		Kamaro Lambert <http://github.com/kamaroly>
 * @copyright	Copyright (c) 2012 - 2014 Kpos, 
 * @license		http://www.kamaroly.com/license.txt
 * @link		http://www.kamaroly.com
 * 
 */


class CustomersController extends \BaseController {
    
    public $customer;
    
    function __construct(Customer $Customer) {
    	
    	$this->customer = $Customer;
    }
	/**
	 * Display a listing of the resource.
	 * GET /items
	 *
	 * @return Response
	 */
	public function index()
	{
		//get facker instance 
		 return $this->customer->first();
	}

	
}