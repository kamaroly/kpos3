<?php namespace App\Modules\Categories\Models;
 
class Category extends \Eloquent {

  protected $table = 'item_categories';
	
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
  	 return $this->hasMany('App\Modules\Items\Models\item');
  }

}