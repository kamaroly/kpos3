<?php namespace App\Modules\Items\Controllers;
//load the models
use App\Modules\Items\Models\Item as Item;
use App\Modules\Categories\Models\Category as Category;
use App\Modules\Taxes\Models\Tax as Tax;
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
class ApiItemsController extends \BaseController {
    
    public $item;
    
    function __construct(Item $items) {
    	
    	$this->item = $items;
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
		 return $this->item->paginate(20);
	}

	/**
	 * Show one items based on theid
	 * GET /items/{itemId}
	 *
	 * @return Response
	 */
	public function GetItem($itemId)
	{
		return $this->item->FindOrFail($itemId);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function create()
	{
	
	   return $this->item->create(\Input::all());

	   //if the items has branches then 
	   //$this->item->attach(branchs ids in array);
	}

	/**
	 * Display the specified resource.
	 * GET /items/{ids}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function Getitems($itemIds)
	{
		 //get passed ids
		 $ids = explode(',', $itemIds);
        
         return $this->item->whereIn('id', $ids)->get();
         
	
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /items/{itemId}
	 *
	 * @param  int  $itemId
	 * @return Response
	 */
	public function update($itemId)
	{
		$updateinformation = \Input::all(); //Get all submited information

        $item = $this->item->FindOrFail($itemId); //Find item with the id provided
        $item->fill($updateinformation);    //fill the data
        
        if ($item->save()) {
          return ['id'=>$itemId,
                  'message' => 'items.item_well_updted'
                 ];
        }else{
        	 return ['id'=>$itemId,
                     'message' => 'items.could_not_update'
                 ];
        }
	}

    /**
    * Get categories of passed ITEMS ids
    * GET api/items/{ids}/categories
    *@param  $ids
    *@return Response
    */
    public function categories($itemIds)
    {
    	return $this->item->find($itemIds)->Category;
    }
    
    /**
    * Get categories of passed ITEMS ids
    * GET api/items/{ids}/categories
    *@param  $ids
    *@return Response
    */
    public function branches($itemIds)
    {
    	return $this->item->find($itemIds)->branches;
    }

    /**
    * Get categories of passed ITEMS ids
    * GET api/items/{ids}/taxes
    *@param  $ids
    *@return Response
    */
    public function taxes($itemIds)
    {
    	return $this->item->find($itemIds)->taxes;
    }

    
	/**
	 * Remove the specified resource from storage.
	 * DELETE /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}