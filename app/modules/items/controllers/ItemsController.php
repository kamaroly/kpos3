<?php namespace App\Modules\items\Controllers;

//load the models
use App\Modules\Items\Models\Item as Item;
/**
 * Kpos3   Kamaro Point of Sale
 * @author Lambert Kamaro <http://github.com/kamaroly>
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