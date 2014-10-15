<?php

class ItemCategoriesController extends \BaseController {

    public $categories;
    function __construct(Item_categories $categories) {
    	$this->categories = $categories;
    }
	/**
	 * Display a listing of the resource.
	 * GET /itemcategories
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show returns categories by ids.
	 * GET /itemcategories/create
	 *
	 * @return Response
	 */
	public function getbyids($ids)
	{
		 $ids = explode(',', $ids);

        return $this->categories::whereIn('id', $ids)->get();
          })->where('id', '[\d,]+');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /itemcategories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /itemcategories/{id}
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
	 * GET /itemcategories/{id}/edit
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
	 * PUT /itemcategories/{id}
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
	 * DELETE /itemcategories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}