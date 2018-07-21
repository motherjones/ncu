<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//$dbhost, $dbuser, $dbpassword, $dbdb
include "incs/credentials.inc";

$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");

if(isset($_REQUEST["ad_type"]) && $_REQUEST["ad_type"] === "ads") {
	fetchAllAds($db_connect);
}
else {
	fetchRecentNewsletters($db_connect);
}

function fetchRecentNewsletters($db_con) {
	$cur_date = date("Y-m-d");
	$table_names = array("econundrums_new" => "Econundrums","food_for_thought_redesign" => "Food for Thought","in_the_mix_new" => "In the Mix","political_mojo_new" => "Political MoJo","recharge" => "Recharge","trumpocracy" => "The Russian Connection");
	$tbl_count = count($table_names);
	$data_return = "";
	
	foreach($table_names as $table => $newsletter) {
		$read_qry = sprintf("SELECT id, hed_date FROM %s WHERE hed_date >= '%s' ORDER BY hed_date DESC", $table, $cur_date);
		$query_run = mysqli_query($db_con, $read_qry);
	
		$count_me = 0;
	
		while($results = mysqli_fetch_assoc($query_run)) {
			$data_return[$table][$results["id"]] = $results["hed_date"];
		}

		mysqli_free_result($query_run);
	}
	print json_encode($data_return);
}

function fetchAllAds($db_con) {
	$return_ads = "";
	$query_run = "SELECT id, ad_name, ad_name2 FROM newsletter_ads";
	$the_query = mysqli_query($db_con, $query_run);
	
	while($results = mysqli_fetch_assoc($the_query)) {
		if($results !== null) {
			$return_ads[$results["id"]] = $results;
		}
	}
	
	print json_encode($return_ads);
}
?>