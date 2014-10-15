<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CustomerTableseederTableSeeder');
		$this->call('ItemCategoriesTableSeederTableSeeder');
		$this->call('ItemsTableSeederTableSeeder');
	}

}
