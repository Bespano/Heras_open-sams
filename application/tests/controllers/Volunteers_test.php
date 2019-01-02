<?php

class Volunteers_test extends TestCase
{
	public function test_get_models_construct()
	{
		$output=$this->load->model('volunteers_model');
		$expected=TRUE;
		$this->assertContains($expected, $output)
	}

}


?>