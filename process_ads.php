<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";

if(isset($_REQUEST) && $_REQUEST["ad_type"] !== "") {
	switch($_REQUEST["ad_type"]) {
		case "ads":
			//do something here
			break;
		case "membership":
			//do something else here
			break;
		case "membership_d":
			defaultMembership();
			break;
		default:
			break;
	}
}

if(isset($_REQUEST) && $_REQUEST["information_retrieval"] !== "") {
	$information_dispersal = $_REQUEST["information_retrieval"];
	retrieveAllAds($information_dispersal);
}

function defaultMembership() {
	if(!isset($_REQUEST) || ($_REQUEST["start_date"] === "" && $_REQUEST["sub_url"] === "" && $_REQUEST["sub_image"] === "" && $_REQUEST["sub_text"] === "" && $_REQUEST["sub_code"] === "")) {
		print "No information submitted. All fields are empty.";
		exit();
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
		$sub_url = trim($sub_url);
		$sub_image = trim($sub_image);
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
				exit();
			}
		}
		//write new default ad to db
		$update_default = "INSERT INTO membership_ads(start_date,sub_url,sub_image,sub_text,sub_code) VALUES('$start_date','$sub_url','$sub_image','$sub_text','$sub_code')";
		if(mysqli_query($db_connect, $update_default)) {
			print "Success";
		}
		else {
			print "Action could not be completed: " . mysqli_error($db_connect);
			exit();
		}
	}
}

function retrieveAllAds($info_disp) {
	$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
	
	switch($info_disp) {
		case "ads":
			//do something here
			break;
		case "membership":
			//do something here
			break;
		case "membership_d":
			$query_run = "SELECT * FROM membership_ads";
			if($qry_runs = mysqli_query($db_connect,$query_run)) {
				if(mysqli_num_rows($qry_runs) < 1) {
					print "There are no ads in the database";
					exit();
				}
				
				$data_dispersal = mysqli_fetch_assoc($qry_runs);
				$disperse = json_encode($data_dispersal);
				print $disperse;
			}
			//do something here
			break;
		default:
			//do something here, maybe
			break;
	}
}
?>