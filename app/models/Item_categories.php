<?php

class Item_categories extends \Eloquent {
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
  	 return $this->hasMany('items','category','id');
  }

}