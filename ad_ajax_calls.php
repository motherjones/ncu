<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//$dbhost, $dbuser, $dbpassword, $dbdb
include "incs/credentials.inc";
$cur_date = date("Y-m-d");
print "current date is " . $cur_date . "<br>";
$table_names = array("econundrums_new" => "Econundrums","food_for_thought_redesign" => "Food for Thought","in_the_mix_new" => "In the Mix","political_mojo_new" => "Political MoJo","recharge" => "Recharge","trumpocracy" => "The Russian Connection");
$tbl_count = count($table_names);
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");

foreach($table_names as $table => $newsletter) {
	$read_qry = sprintf("SELECT id, hed_date FROM %s WHERE hed_date >= '%s' ORDER BY hed_date DESC", $table, $cur_date);
	$query_run = mysqli_query($db_connect, $read_qry);
	$results = mysqli_fetch_assoc($query_run)
	$data_return = json_encode($results);
	
	/*while($results = mysqli_fetch_assoc($query_run)) {
		print "<p>";
		print "<input type='checkbox' value='" . $results["id"] . "'> " . $results["hed_date"] . "&#8212;" . $newsletter;
		print "</p>";
	}
	*/
	mysqli_free_result($query_run);
	
	/*
	if($results !== null) {
		$printme = 0;
		foreach($results as $key => $value) {
			if($key == "hed_date") {
				print "<input type='checkbox' value='" . $value . "'>" . $value . "&#8212;" . $newsletter;
			}
		}
	}*/
	
}

mysqli_close($db_connect);
?>