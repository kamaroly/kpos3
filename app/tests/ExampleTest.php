<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testCreateUser()
	{
		$this->call('POST','api/users',['name'=>'Lambert Kamaro']);
        $this->assertResponseOk();
	}

}
