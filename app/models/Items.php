<?php

class Items extends \Eloquent {

	protected $fillable = [
                 'name',
                 'slug',
                 'description',
                 'allow_decimal_quantities',
                 'quantity',
                 'cost',
                 'barcodes',
                 'disable_discount',
                 'disable_inventory',
                 'enable_open_price',
                 'retail_price',
                 'tax_exempt',
                 'category',
                 'thumbnail',
                 'tag_list',
                 'status',
                 'custom_fields',
                 'created_by',
                 'modified_by',
                ];

   //Relationship with Category
   public function categories()
   {
   	 return $this->belongsTo('item_categories','id','category');
   }
}