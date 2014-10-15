<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
             $table->increments('id');
             $table->string('first_name');
             $table->string('last_name');
             $table->string('email');
             $table->string('phone');
             $table->string('history'); //This will store the history of the customer transaction in a json format
             $table->string('image');
             $table->longText('custom_fields'); //This will restore custom additional fields in a json formal
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
		Schema::create('customers');
	}

}
