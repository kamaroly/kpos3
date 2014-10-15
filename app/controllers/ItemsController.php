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
		if ($this->items->create(Input::all())) {
			
			Redirect::to('itemslist');
		}
		else{
			Response::header(404);
		}
	}

	/**
	 * Display the specified resource.
	 * GET /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /items/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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