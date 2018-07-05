<?php 
class insertAds {
	//private variables
	private $var_array;
	private $db_connect;
	
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
			}
			else {
				$this::setVars($key);
			}
		}
	}
	
	public function writeToDB($host, $user, $psswd, $db) {
		$query_str = "INSERT INTO newsletter_ads(";
		$values = "VALUES(";
		$this->db_connect = mysqli_connect($host, $user, $psswd, $db) or die("Can't connect to database");
		
		foreach($this->getArray as $key => $value) {
			$query_str .= $key . ",";
			$values .= "'" . $value . "'" . ",";
		}
		
		$query_str = rtrim(trim($query_str), ",");
		$values = rtrim(trim($values), ",");
		
		$query_str .= ")";
		$values .= ");";
		
		$query_str .= $values;
		
		mysqli_query($this->db_connect, $query_str) or die("Query did not run correctly". mysqli_error($this->db_connect));
		mysqli_close($this->db_connect);
	}
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