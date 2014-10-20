<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('items', function (Illuminate\Database\Schema\Blueprint $table) {
			
          $table->increments('id')->index();
          $table->string('name',30)->unique();
          $table->string('slug',40);
          $table->longText('description',255)->nullable();
          $table->boolean('allow_decimal_quantities'); //Sets this flag to true if decimal value is allowed in quantity (default to false)
          $table->decimal('quantity',5, 2);            //cost, only zero or positive value is allowed; should have more than 2 decimal palces
          $table->decimal('cost',5, 2);                //cost, only zero or positive value is allowed; should have more than 2 decimal palces
          $table->longText('serialnumber')->nullable();   //barcodes per store , it will be saved in jason format
          $table->boolean('disable_discount');         //Sets this flag to true if retail price cannot be discounted at the store (default to false)
          $table->boolean('disable_inventory');        //Sets this flag to true if product does not require inventory tracking (e.g. service), (default to false)
          $table->boolean('enable_open_price');        //Sets this flag to true if cashier is allowed to change retail price (default to false)
          $table->decimal('retail_price',5,1);         //retail price, only zero or positive value is allowed; should not have more than 2 decimal places
          $table->boolean('tax_exempt');               //Sets this flag to true if tax should not be computed for this item (default to false)
          $table->integer('category_id');                  //category id
          $table->string('thumbnail',100)->nullable();             //item image 
          $table->longText('tag_list')->nullable();               //list of tags separated with comma
          $table->boolean('status');                   //Possible values are True and False (True = Active, 'false' = Deleted)
          $table->longText('custom_fields')->nullable(); //This will restore custom additional fields in a json formal
          $table->integer('created_by') ; //Id of the user who created this record
          $table->integer('modified_by'); //id of the user who modified this records
          $table->timestamps();
   });
}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('items');
	}

}
