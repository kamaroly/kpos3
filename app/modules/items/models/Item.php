<?php namespace App\Modules\Items\Models;
/**
 * Kpos3   Kamaro Point of Sale
 * @author Lambert Kamaro <http://github.com/kamaroly>
 */

class Item extends \Eloquent {
    
    protected $table ="items";

	protected $fillable = [
                 'name',
                 'slug',
                 'description',
                 'allow_decimal_quantities',
                 'quantity',
                 'cost',
                 'serialnumber',
                 'disable_discount',
                 'disable_inventory',
                 'enable_open_price',
                 'retail_price',
                 'tax_exempt',
                 'category_id',
                 'thumbnail',
                 'tag_list',
                 'status',
                 'custom_fields',
                 'created_by',
                 'modified_by',
                ];

   //Relationship with Category
   public function Category()
   {
   	 return $this->belongsTo('App\Modules\Categories\Models\Category');
   }

   //Relationship to the branches
    public function branches()
     {
       return $this->belongsToMany('App\Modules\Branches\Models\Branch');
     }

     //Many to Many relationship with Taxes
      public function taxes()
     {
       return $this->belongsToMany('App\Modules\Taxes\Models\Tax');
     }
}