<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\Modules\Customers\Models\Customer as Customer;
class CustomerTableseederTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
	 Customer::create([
            'first_name'    => $faker->firstName,
            'last_name'     => $faker->lastName,
            'email'         => $faker->email,
            'phone'         => $faker->phoneNumber,
            'history'       => $faker->text,
            'image'         => $faker->imageUrl($width = 140, $height = 140),
            'custom_fields' => $faker->text,
            'created_by'    => $faker->randomDigit,
            'modified_by'   => $faker->randomDigit 
            ]);
		}
	}

}