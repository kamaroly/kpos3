<?php namespace App\Modules\Branches\Models;
/**
 * Kpos
 * 
 * An open source Point Of Sale
 *
 * @package   kpos3
 * @author    Kamaro Lambert <http://github.com/kamaroly>
 * @copyright Copyright (c) 2012 - 2014 Kpos, 
 * @license   http://www.kamaroly.com/license.txt
 * @link    http://www.kamaroly.com
 * 
 */
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