<?php
use Faker\Factory as Faker; 
class ItemsTest extends TestCase {

	 //Test if the item root api index is okay
	public function testItemslist()
	{
		$this->call('GET','api/items');
		$this->assertResponseOk();
	}

	//test if we can get one item
	public function testGetOne()
	{
		$itemId=4;

		$this->call('GET','api/items/'.$itemId);
		$this->assertResponseOk();
	}

	public function testCreateItem()
	{
		$faker =Faker::create();
		  
		 $item=[
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
                ];

           $this->call('POST','api/items',$item);

           $this->assertRedirectTo('home');
	}

}
