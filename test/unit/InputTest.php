<?php
namespace App\Test;
use CPS\Input;
use PHPUnit\Framework\TestCase;

class InputTest extends TestCase {

	public function testICanUnsetGobal() { 
		$_POST['testing'] = 'post';
		$_GET['testng'] = 'get';

		$this->assertTrue($_POST != null);
		$this->assertTrue($_GET != null);

		$input = new Input();

		$this->assertTrue($_POST == null);
		$this->assertTrue($_GET == null);
	}

	public function testICanRetriveGetValue () {}	
	
	public function testICanRetrivePostValue () {}	

	public function testICanRetiveUnSanitisedGetValue () {}

	public function testICanRetriveUnSanitisedPostValue () {}
}
