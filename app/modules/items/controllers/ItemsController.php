<?php namespace App\Modules\items\Controllers;

//load the models
use App\Modules\Items\Models\Item as Item;
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