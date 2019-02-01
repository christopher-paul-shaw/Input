<?php
namespace App\Test;
use CPS\Input;
use PHPUnit\Framework\TestCase;

class InputTest extends TestCase {
	
	public function setUp () {
		unset($_POST);
		unset($_GET);
	}

	public function testICanUnsetGobal() { 
		$_POST['testing'] = 'post';
		$_GET['testng'] = 'get';

		$this->assertTrue($_POST != null);
		$this->assertTrue($_GET != null);

		$input = new Input();

		$this->assertTrue($_POST == null);
		$this->assertTrue($_GET == null);
	}

	public function testICanRetriveGetValue () {
		$value = 'testICanRetriveGetValue';
		$_GET['test'] = $value;
		
		$input = new Input();
		$this->assertEquals($input->get('test'), $value);
	}	
	
	public function testICanRetrivePostValue () {
		$value = 'testICanRetrivePostValue';
		$_GET['test'] = $value;
		
		$input = new Input();
		$this->assertEquals($input->post('test'), $value);
	
	}	

	public function testICanRetiveUnSanitisedGetValue () {}

	public function testICanRetriveUnSanitisedPostValue () {}
}
