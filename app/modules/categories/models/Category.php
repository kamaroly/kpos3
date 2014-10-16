<?php namespace App\Modules\Categories\Models;
 /**
 * Kpos3   Kamaro Point of Sale
 * @author Lambert Kamaro <http://github.com/kamaroly>
 */
class Category extends \Eloquent {

  protected $table = 'categories';
	
  protected $fillable = [
                          'parent',
                          'title',
                          'slug',
                          'description',
                          'status',
                          'image',
                          'custom_fields',
                          'created_by',
                          'modified_by',
                        ];
  
  //Relationship with item
  public function item()
  {
  	 return $this->hasMany('App\Modules\Items\Models\item','category_id');
  }

}