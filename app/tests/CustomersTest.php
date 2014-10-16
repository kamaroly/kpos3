<?php
use Faker\Factory as Faker; 

class CustomersTest extends TestCase {

	//1. Test if the Customer  root api index is OK.
	public function testItemslist()
	{
		$this->call('GET','api/customers');
		$this->assertResponseOk();
	}
}