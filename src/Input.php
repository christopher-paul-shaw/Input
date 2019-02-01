<?php
namespace CPS;

class Input {
	private $post;
	private $get;

	public function __construct () {
		$this->clean();
	}

	private function clean () {
		
		if (is_array($_POST)) {
			foreach ($_POST as $key => $value) {
				$this->post[$key] = $value;
			}
		}
		unset($_POST);
		    
		if (is_array($_POST)) {
			foreach ($_GET as $key => $value) {
				$this->get[$key] = $value;
			}
		}
		unset($_GET);
	}

	public function get ($key, $default=false, $sanitize=true) {
		$value = isset($this->get[$key]) ? $this->get[$key] : $default;
		if ($sanitize) {
			$value = strip_tags($value);
		}
		return $value;
	}

	public function post ($key, $default=false, $sanitize=true) {
		$value =  isset($this->get[$key]) ? $this->get[$key] : $default;
		if ($sanitize) {
			$value = strip_tags($value);
		}
		return $value;
	}

}
