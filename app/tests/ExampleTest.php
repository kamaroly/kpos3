<?php

class ExampleTest extends TestCase {

	 //Test if the item root api index is okay
	public function testItemslist()
	{
		$this->call('GET','api/items');
		$this->assertResponseOk();
	}

}
