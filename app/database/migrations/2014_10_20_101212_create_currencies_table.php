<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currencies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('=store_id');
			$table->string('code');
			$table->string('title');
			$table->boolean('enabled');
			$table->decimal(' exchange_rate');
			$table->string('format');
			$table->string('decimal_point');
			$table->string('thousand_point');
			$table->string('rounding');
			$table->boolean ('default');
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
		Schema::drop('currencies');
	}

}
