<?php namespace App\Modules\Taxes\Models;

class Tax extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	'name' =>'required|alpha',
    'description' =>'required|alpha',
    'percentage_rate' =>'required|numeric',
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
    'description',
    'percentage_rate',
    ];


     //Many to Many relationship with Taxes
      public function items()
     {
       return $this->belongsToMany('App\Modules\Items\Models\Item');
     }

     //Many to Many relationship with Taxes
      public function branches()
     {
       return $this->belongsToMany('App\Modules\Branches\Models\Branch');
     }
}