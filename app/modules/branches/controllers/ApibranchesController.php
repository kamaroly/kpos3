<?php namespace App\Modules\Branches\Controllers;

use App\Modules\Branches\Models\Branch as Branch;
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

class ApibranchesController extends \BaseController {

   public $Branch;
   function __construct(Branch $Branch) {

   	$this->Branch = $Branch;
   }
	/**
	 * Display a listing of the resource.
	 * GET /branches
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->Branch->all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /branches/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /branches
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /branches/{id}
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
	 * GET /branches/{id}/edit
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
	 * PUT /branches/{id}
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
	 * DELETE /branches/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}