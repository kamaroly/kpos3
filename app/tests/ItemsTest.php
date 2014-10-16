<?php
use Faker\Factory as Faker; 

class ItemsTest extends TestCase {

	//1. Test if the item root api index is okay
	public function testItemslist()
	{
		$this->call('GET','api/items');
		$this->assertResponseOk();
	}

	//2. test if we can get one item
	public function testGetOne()
	{
		$itemId=4;

		$this->call('GET','api/items/'.$itemId);
		$this->assertResponseOk();
	}
   
    //3. Test Create item
	public function testPostCreateItem()
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

           $this->assertResponseOk();
	}

	//4. test getmany ( this can be used to fetch one or multiple items)
	public function testGetitems()
	{
		$itemids = "1,2,3,4,5";
        $this->call('GET','api/items/'.$itemids);

        $this->assertResponseOk();
	}

	//5. Test update
	public function testPutUpdateItem()
	{

		 $itemId = 1;
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

           $this->call('PUT','api/items/'.$itemId,$item);

           $this->assertResponseOk();
	}

  //6. Test items module
	public function testItemModule()
	{
		$this->call('GET','items');
		$this->assertResponseOk();
	}
   
  //7. Test items categories
    public function testItemCategories()
    {
        
        $this->call('GET','api/items/2/categories');
        $this->assertResponseOk();
    }
}
