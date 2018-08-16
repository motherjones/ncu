<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$errors = array();
$data = array();

if(!isset($_REQUEST) || !isset($_POST) || !isset($_GET)) {
	$errors["fields"] = "No information submitted. All fields are empty.";
}
else {
	if(isset($_REQUEST["start_date"]) && $_REQUEST !== "") {
		$start_date = $_REQUEST["start_date"];
	}
	
	if(isset($_REQUEST["sub_url"]) && $_REQUEST !== "") {
		$sub_url = $_REQUEST["sub_url"];
	}
	
	if(isset($_REQUEST["sub_image"]) && $_REQUEST !== "") {
		$sub_image = $_REQUEST["sub_image"];
	}
	
	if(isset($_REQUEST["sub_text"]) && $_REQUEST !== "") {
		$sub_text = $_REQUEST["sub_text"];
	}
	
	if(isset($_REQUEST["sub_code"]) && $_REQUEST !== "") {
		$sub_code = $_REQUEST["sub_code"];
	}
	
	//prepare data for db write
	$sub_url = addslashes(trim($sub_url));
	$sub_image = addslashes(trim($sub_image));
	$sub_text = addslashes(trim($sub_text));
	$sub_code = addslashes(trim($sub_code));
	
/* db operations */
	//open db connection
	$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
	//check for entry with same start date
	$find_qry = "SELECT start_date FROM membership_ads WHERE start_date = '$start_date'";
	if($count = mysqli_num_rows(mysqli_query($db_connect, $find_qry))) {
		if($count > 0) {
			print "Exists";
			mysqli_free_results($)
			exit();
		}
	}
	else {
		print mysqli_error($db_connet);
		exit();
	}
	//write new default ad to db
	$update_default = "INSERT INTO membership_ads(start_date,sub_url,sub_image,sub_text,sub_code) VALUES('$start_date','$sub_url','$sub_image','$sub_text','$sub_code')";
	if(mysqli_query($db_connect, $update_default)) {
		print "Success";
	}
	else {
		print mysqli_error($db_connect);
	}
}
?>