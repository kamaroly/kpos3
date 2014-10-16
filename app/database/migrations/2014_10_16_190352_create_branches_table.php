<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('branches', function(Blueprint $table)
		{
			$table->increments('id'); // Unique ID
            $table->string('name')->Unique(); 	// Unique name identifies the Branch
            $table->string('street')->nullable(); 	// Street address
            $table->string('city'); 	// City
            $table->string('state')->nullable(); 	// State (see table for reference )
            $table->string('country'); 	// 2 Letter Country Code (see table for reference)
            $table->string('zipcode')->nullable(); 	// zipcode
            $table->string('tin'); 	// Tax identification number
            $table->string('site_type')->nullable(); 	// Blank if regular branch, "head_office" if branch is head office
            $table->integer('subscription_type'); 	// 0 - Free, 1 - Trial, 2 - Premium
            $table->integer('created_by'); 	// Created date and time
            $table->integer('updated_by'); 	// Last updated date and time
            $table->boolean('status'); 	// FALSE if deleted, otherwise TRUE

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
		Schema::drop('branches');
	}

}
