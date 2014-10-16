<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\Modules\Categories\Models\Category as Category;
class ItemCategoriesTableSeederTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
						Category::create( [
                          'parent'     => $faker->randomDigit,
                          'title'      => $faker->name,
                          'slug'       => $faker->slug,
                          'description'=> $faker->text,
                          'status'     => true,
                          'image'      => $faker->imageUrl($width = 140, $height = 140),
                          'custom_fields' => $faker->text,
                          'created_by' => $faker->randomDigit,
                          'modified_by'=> $faker->randomDigit,
                        ]);
		}
	}

}