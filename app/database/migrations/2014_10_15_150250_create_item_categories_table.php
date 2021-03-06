<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Illuminate\Database\Schema\Blueprint $table)
		{
               $table->increments('id');      
               $table->integer('parent');
               $table->string('title')->unique();
               $table->string('slug')->unique();
               $table->string('description')->nullable();
               $table->boolean('status');
               $table->string('image')->nullable();		
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
	public function down()
	{
		Schema::drop('categories');
	}

}
