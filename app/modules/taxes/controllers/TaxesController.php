<?php namespace App\Modules\Taxes\Controllers;
use App\Modules\Taxes\Models\Tax as Tax;

class TaxesController extends \BaseController {

	/**
	 * Display a listing of taxes
	 *
	 * @return Response
	 */
	public function index()
	{
		return $taxes = Tax::all();

		return View::make('taxes.index', compact('taxes'));
	}

	/**
	 * Get the Items that are currently using this tax
	 *
	 * @return Response
	 */
	public function items($taxid)
	{
		return Tax::find($taxid)->items;
	}

	/**
	 * get the branches of this tax
	 *
	 * @return Response
	 */
	public function branches($taxid)
	{
		return Tax::find($taxid)->branches;
	}

}
