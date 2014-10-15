<?php

class ItemsController extends \BaseController {
    
    public $items;
    
    function __construct(Items $item) {
    	
    	$this->items = $item;
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
		 return $this->items->all();
	}

	/**
	 * Show one items based on theid
	 * GET /items/{itemId}
	 *
	 * @return Response
	 */
	public function GetItem($itemId)
	{
		return $this->items->FindOrFail($itemId);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function create()
	{
	
	   return $this->items->create(Input::all());
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
        
         return $this->items->whereIn('id', $ids)->get();
         
	
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
		$updateinformation = Input::all(); //Get all submited information

        $item = $this->items->FindOrFail($itemId); //Find item with the id provided
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