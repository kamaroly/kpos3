<?php namespace App\Modules\Sales\Models;

class Sale extends \Eloquent {

	// VAlidation rules for the sales
	public static $rules = [
		             'reference'  =>'alpha_dash',
                     'customer_id'=>'integer',
                     'user_id'    =>'integer|required',
                     'remark'     =>'alpha_dash',
                     'branch_id'  =>'integer|required'
	];

	//fillable filds for the sales
	protected $fillable = [
                     'reference'  ,
                     'customer_id',
                     'user_id'    ,
                     'remark'     ,
                     'branch_id'  ,
	               ];

}