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
	
	if(isset($_REQUEST["end_date"]) && $_REQUEST !== "") {
		$end_date = $_REQUEST["end_date"];
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
	$sub_url = trim($sub_url);
	$sub_image = trim($sub_image);
	$sub_text = trim($sub_text);
	$sub_code = trim($sub_code);
	
	//db operations
	$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
	$restore_qry = "UPDATE membership_ads SET is_default = 0 WHERE is_default = 1";
	mysqli_query($db_connect, $restore_qry);
}
?>