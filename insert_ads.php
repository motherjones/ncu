<?php 
class insertAds {
	//private variables
	private $var_array;
	
	//accessors
	//get individual values from array
	public function getVars($the_key) {
		return $this->var_array[$the_key];
	}
	
	//set individual values in array
	private static function setVars($the_key, $value="") {
		$this->var_array[$the_key] = $value;
	}
	
	//get the entire array
	public function getArray() {
		return $this->var_array;
	}
	
	//constructor--must be passed $_REQUEST/$_POST/$_GET super global array when
	//making a new object: $my_var = new insertAds($_REQUEST)
	public function __construct($req_array) {
		foreach($req_array as $key => $value) {
			if(isset($value) && $value !== "") {
				$this::setVars($key, $value);
				//$this->var_array[$key] = trim($req_array[$key]);
			}
			else {
				$this::setVars($key);
				//$this->var_array[$key] = "";
			}
		}
	}
}
?>