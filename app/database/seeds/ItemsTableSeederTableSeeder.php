<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeederTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Items::create(  [
                 'name'                   => $faker->name,
                 'slug'                   => $faker->slug,
                 'description'            => $faker->text,
                 'allow_decimal_quantities' => true,
                 'quantity'               => $faker->randomDigit,
                 'cost'                   => $faker->randomNumber(2),
                 'barcodes'               =>$faker->ean13,
                 'disable_discount'       => true,
                 'disable_inventory'      => true,
                 'enable_open_price'      => true,
                 'retail_price'           =>$faker->randomNumber(2),
                 'tax_exempt'             =>true,
                 'category'               =>$faker->randomDigit,
                 'thumbnail'              =>$faker->imageUrl($width = 140, $height = 140),
                 'tag_list'               => str_replace(' ', '_', $faker->text(6)),
                 'status'                 =>true,
                 'custom_fields'          => $faker->text(6),
                 'created_by'             =>$faker->randomDigit,
                 'modified_by'            =>$faker->randomDigit
                ]);
		}
	}

}