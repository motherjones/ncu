<?php 
header("Content-Type: text/html;charset=UTF-8");

$override = "";

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
	$information_dispersal = str_replace("'", "", $_REQUEST["information_retrieval"]);
	retrieveAllAds($information_dispersal);
}

function defaultMembership() {
	if(!isset($_REQUEST) || ($_REQUEST["start_date"] === "" && $_REQUEST["sub_url"] === "" && $_REQUEST["sub_image"] === "" && $_REQUEST["sub_text"] === "" && $_REQUEST["sub_code"] === "")) {
		print "No information submitted. All fields are empty.";
		exit();
	}
	else {
		if(isset($_REQUEST["override"]) && $_REQUEST["override"] !== "") {
			$override = "yes";
		}
		
		if(isset($_REQUEST["start_date"]) && $_REQUEST["start_date"] !== "") {
			$start_date = $_REQUEST["start_date"];
		}
	
		if(isset($_REQUEST["sub_url"]) && $_REQUEST["sub_url"] !== "") {
			$sub_url = $_REQUEST["sub_url"];
		}
	
		if(isset($_REQUEST["sub_image"]) && $_REQUEST["sub_image"] !== "") {
			$sub_image = $_REQUEST["sub_image"];
		}
	
		if(isset($_REQUEST["sub_text"]) && $_REQUEST["sub_text"] !== "") {
			$sub_text = $_REQUEST["sub_text"];
		}
	
		if(isset($_REQUEST["sub_code"]) && $_REQUEST["sub_code"] !== "") {
			$sub_code = $_REQUEST["sub_code"];
		}
		
		if(isset($_REQUEST["id"]) && $_REQUEST["id"] !="") {
			$id = $_REQUEST["id"];
		}
	
		//prepare data for db write
		$sub_url = trim($sub_url);
		$sub_image = trim($sub_image);
		$sub_text = addslashes(trim($sub_text));
		$sub_code = trim($sub_code);
	
		/* db operations */
		//open db connection
		include "incs/credentials.inc";
		$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die(mysqli_connect_error());
		//check for entry with same start date
		$find_qry = "SELECT start_date FROM membership_ads WHERE start_date = '$start_date'";
		if($count = mysqli_num_rows(mysqli_query($db_connect, $find_qry))) {
			if($count > 0 && $override !== "yes") {
				print "Exists";
				exit();
			}
		}
		//write new default ad to db
		if(isset($override) && $override === "yes") {
			$update_default = "UPDATE membership_ads SET start_date='$start_date',sub_url='$sub_url',sub_image='$sub_image',sub_text='$sub_text',sub_code='$sub_code' WHERE id=$id";
		}
		else {
			$update_default = "INSERT INTO membership_ads(id,start_date,sub_url,sub_image,sub_text,sub_code) VALUES('$id','$start_date','$sub_url','$sub_image','$sub_text','$sub_code')";
		}
		if(mysqli_query($db_connect, $update_default)) {
			print "Success";
			exit();
		}
		else {
			print "Action could not be completed: " . mysqli_error($db_connect);
			exit();
		}
	}
}

function retrieveAllAds($info_disp) {
	$return_array;
	include "incs/credentials.inc";
	$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("there is an error " . mysqli_connect_error());
	
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
					print "None";
					exit();
				}
				
				while($data_dispersal = mysqli_fetch_assoc($qry_runs)) {
					$return_array[$data_dispersal["id"]] = $data_dispersal;
				}
				//$data_dispersal = mysqli_fetch_assoc($qry_runs);
				$disperse = json_encode($return_array);
				print $disperse;
			}
			else {
				print "Query did not run as expected.";
			}
			break;
		default:
			//do something here, maybe
			break;
	}
}
?>