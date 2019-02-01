<?php
namespace App\Test;
use CPS\Input;
use PHPUnit\Framework\TestCase;

class InputTest extends TestCase {
	
	public function setUp () {
		$_POST = false;
		$_GET = false;
	}

	public function testICanUnsetGobal() { 
		$_POST['testing'] = 'post';
		$_GET['testng'] = 'get';

		$this->assertTrue($_POST != null);
		$this->assertTrue($_GET != null);

		$input = new Input();

		$this->assertFalse($_POST);
		$this->assertFalse($_GET);
	}

	public function testICanRetriveGetValue () {
		$value = 'testICanRetriveGetValue';
		$_GET['test'] = $value;
		
		$input = new Input();
		$this->assertEquals($input->get('test'), $value);
	}	
	
	public function testICanRetrivePostValue () {
		$value = 'testICanRetrivePostValue';
		$_POST['test'] = $value;
		
		$input = new Input();
		$this->assertEquals($input->post('test'), $value);
	}	

	public function testICanRetiveUnSanitisedGetValue () {
		$value = 'testICanRetriveGetValue';
		$value_2 = '<script>testICanRetriveGetValue</script>';
		$_GET['test'] = $value_2;

		$input = new Input();
		$this->assertEquals($input->get('test'), $value);
		$this->assertEquals($input->get('test',false,false), $value_2);
	}

	public function testICanRetriveUnSanitisedPostValue () {
		$value = 'testICanRetrivePostValue';
		$value_2 = '<script>testICanRetrivePostValue</script>';
		$_POST['test'] = $value_2;

		$input = new Input();
		$this->assertEquals($input->post('test'), $value);
		$this->assertEquals($input->post('test',false,false), $value_2);
	}
}
