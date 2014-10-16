<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BranchesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Branch::create([
                       'name'               => $faker->name,
                       'street'             => $faker->address,
                       'city'               => $faker->city,
                       'state'              => $faker->state,
                       'country'            => $faker->country,
                       'zipcode'            => 250,
                       'tin'                => 123456789,
                       'site_type'          => null,
                       'subscription_type'  => 0,
                       'created_by'         => $faker->randomDigit,
                       'updated_by'         => $faker->randomDigit,
                       'status'             => true
			]);
		}
	}

}