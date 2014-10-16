<?php namespace App\Modules\items\Controllers;

//load the models
use App\Modules\Items\Models\Item as Item;
/**
 * items controller
 * @author Lambert Kamaro <kamaroly@gmail.com>
 */
class ItemsController extends \BaseController {
    
    public $item;
    
    function __construct(Item $item) {
    	
    	$this->item = $item;
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
		 return 'Test';
	}

	
}