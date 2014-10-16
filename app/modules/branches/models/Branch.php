<?php namespace App\Modules\Branches\Models;

class Branch extends \Eloquent {

  protected $table ="branches";
	
  protected $fillable = [
                       'name',
                       'street',
                       'city',
                       'state',
                       'country',
                       'zipcode',
                       'tin',
                       'site_type',
                       'subscription_type',
                       'created_by',
                       'updated_by',
                       'status'
	];


 //Relationship to the branches table
  public function items()
  {
    return $this->belongsToMany('App\Modules\Items\Models\item');
  }
}