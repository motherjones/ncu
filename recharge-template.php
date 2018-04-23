<?php 
/*Template for ReCharge newsletter
 * Author: Young Kim
 * Creation Date: 4/18/2018
 * Version: .1B
 */

//Post and Request section
<<<<<<< HEAD
if(isset($_REQUEST['recharge_main_hed']) && $_REQUEST['recharge_main_hed'] !== "") {
	$recharge_main_hed = trim($_REQUEST['recharge_main_hed']);
}
else {
	$recharge_main_hed = "";
}

if(isset($_REQUEST['recharge_main_url']) && $_REQUEST['recharge_main_url'] !== "") {
	$recharge_main_url = trim($_REQUEST['recharge_main_url']);
}
else {
	$recharge_main_url = "";
}

if(isset($_REQUEST['recharge_main_img']) && $_REQUEST['recharge_main_img'] !== "") {
	$recharge_main_img = trim($_REQUEST['recharge_main_img']);
}
else {
	$recharge_main_img = "";
}

if(isset($_REQUEST['recharge_main_dek']) && $_REQUEST['recharge_main_dek'] !== "") {
	$recharge_main_dek = trim($_REQUEST['recharge_main_dek']);
}
else {
	$recharge_main_dek = "";
}

if(isset($_REQUEST['recharge_main_source']) && $_REQUEST['recharge_main_source'] !== "") {
	$recharge_main_source = trim($_REQUEST['recharge_main_source']);
}
else {
	$recharge_main_source = "";
}

if(isset($_REQUEST['recharge_main_ital']) && $_REQUEST['recharge_main_ital'] !== "") {
	$recharge_main_ital = trim($_REQUEST['recharge_main_ital']);
}
else {
	$recharge_main_ital = "";
}

if(isset($_REQUEST['recharge1_dek']) && $_REQUEST['recharge1_dek'] !== "") {
	$recharge1_dek = trim($_REQUEST['recharge1_dek']);
}
else {
	$recharge1_dek = "";
}

if(isset($_REQUEST['recharge1_source']) && $_REQUEST['recharge1_source'] !== "") {
	$recharge1_source = trim($_REQUEST['recharge1_source']);
}
else {
	$recharge1_source = "";
}

if(isset($_REQUEST['recharge1_ital']) && $_REQUEST['recharge1_ital'] !== "") {
	$recharge1_ital = trim($_REQUEST['recharge1_ital']);
}
else {
	$recharge1_ital = "";
}

if(isset($_REQUEST['recharge1_url']) && $_REQUEST['recharge1_url'] !== "") {
	$recharge1_url = trim($_REQUEST['recharge1_url']);
}
else {
	$recharge1_url = "";
}

if(isset($_REQUEST['recharge2_dek']) && $_REQUEST['recharge2_dek'] !== "") {
	$recharge2_dek = trim($_REQUEST['recharge2_dek']);
}
else {
	$recharge2_dek = "";
}

if(isset($_REQUEST['recharge2_source']) && $_REQUEST['recharge2_source'] !== "") {
	$recharge2_source = trim($_REQUEST['recharge2_source']);
}
else {
	$recharge2_source = "";
}

if(isset($_REQUEST['recharge2_ital']) && $_REQUEST['recharge2_ital'] !== "") {
	$recharge2_ital = trim($_REQUEST['recharge2_ital']);
}
else {
	$recharge2_ital = "";
}

if(isset($_REQUEST['recharge2_url']) && $_REQUEST['recharge2_url'] !== "") {
	$recharge2_url = trim($_REQUEST['recharge2_url']);
}
else {
	$recharge2_url = "";
}

if(isset($_REQUEST['recharge3_dek']) && $_REQUEST['recharge3_dek'] !== "") {
	$recharge3_dek = trim($_REQUEST['recharge3_dek']);
}
else {
	$recharge3_dek = "";
}

if(isset($_REQUEST['recharge3_source']) && $_REQUEST['recharge3_source'] !== "") {
	$recharge3_source = trim($_REQUEST['recharge3_source']);
}
else {
	$recharge3_source = "";
}

if(isset($_REQUEST['recharge3_ital']) && $_REQUEST['recharge3_ital'] !== "") {
	$recharge3_ital = trim($_REQUEST['recharge3_ital']);
}
else {
	$recharge3_ital = "";
}

if(isset($_REQUEST['recharge3_url']) && $_REQUEST['recharge3_url'] !== "") {
	$recharge3_url = trim($_REQUEST['recharge3_url']);
}
else {
	$recharge3_url = "";
}

if(isset($_REQUEST['recharge4_dek']) && $_REQUEST['recharge4_dek'] !== "") {
	$recharge4_dek = trim($_REQUEST['recharge4_dek']);
}
else {
	$recharge4_dek = "";
}

if(isset($_REQUEST['recharge4_source']) && $_REQUEST['recharge4_source'] !== "") {
	$recharge4_source = trim($_REQUEST['recharge4_source']);
}
else {
	$recharge4_source = "";
}

if(isset($_REQUEST['recharge4_ital']) && $_REQUEST['recharge4_ital'] !== "") {
	$recharge4_ital = trim($_REQUEST['recharge4_ital']);
}
else {
	$recharge4_ital = "";
}

if(isset($_REQUEST['recharge4_url']) && $_REQUEST['recharge4_url'] !== "") {
	$recharge4_url = trim($_REQUEST['recharge4_url']);
}
else {
	$recharge4_url = "";
}

if(isset($_REQUEST['recharge5_dek']) && $_REQUEST['recharge5_dek'] !== "") {
	$recharge5_dek = trim($_REQUEST['recharge5_dek']);
}
else {
	$recharge5_dek = "";
}

if(isset($_REQUEST['recharge5_source']) && $_REQUEST['recharge5_source'] !== "") {
	$recharge5_source = trim($_REQUEST['recharge5_source']);
}
else {
	$recharge5_source = "";
}

if(isset($_REQUEST['recharge5_ital']) && $_REQUEST['recharge5_ital'] !== "") {
	$recharge5_ital = trim($_REQUEST['recharge5_ital']);
}
else {
	$recharge5_ital = "";
}

if(isset($_REQUEST['recharge5_url']) && $_REQUEST['recharge5_url'] !== "") {
	$recharge5_url = trim($_REQUEST['recharge5_url']);
}
else {
	$recharge5_url = "";
}

=======
>>>>>>> 4cb4df824266b933257557a3f408e917b0feb611
if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] != "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}
//newsletter sections

//ads

//HTML template

<<<<<<< HEAD
/* db operations */
$recharge_main_hed = addslashes($recharge_main_hed);
$recharge_main_url = addslashes($recharge_main_url);
$recharge_main_img = addslashes($recharge_main_img);
$recharge_main_dek = addslashes($recharge_main_dek);
$recharge_main_source = addslashes($recharge_main_source);
$recharge_main_ital = addslashes($recharge_main_ital);
$recharge1_dek = addslashes($recharge1_dek);
$recharge1_source = addslashes($recharge1_source);
$recharge1_ital = addslashes($recharge1_ital);
$recharge1_url = addslashes($recharge1_url);
$recharge2_dek = addslashes($recharge2_dek);
$recharge2_source = addslashes($recharge2_source);
$recharge2_ital = addslashes($recharge2_ital);
$recharge2_url = addslashes($recharge2_url);
$recharge3_dek = addslashes($recharge3_dek);
$recharge3_source = addslashes($recharge3_source);
$recharge3_ital = addslashes($recharge3_ital);
$recharge3_url = addslashes($recharge3_url);
$recharge4_dek = addslashes($recharge4_dek);
$recharge4_source = addslashes($recharge4_source);
$recharge4_ital = addslashes($recharge4_ital);
$recharge4_url = addslashes($recharge4_url);
$recharge5_dek = addslashes($recharge5_dek);
$recharge5_source = addslashes($recharge5_source);
$recharge5_ital = addslashes($recharge5_ital);
$recharge5_url = addslashes($recharge5_url);
=======
//db operations

>>>>>>> 4cb4df824266b933257557a3f408e917b0feb611
$subject_line = addslashes(str_replace("â€”","–", $subject_line));
$sub_code = addslashes($sub_code);
$lift_note = addslashes($lift_note);
$pixel_tracker = addslashes($pixel_tracker);
$pixel_tracker2 = addslashes($pixel_tracker2);
$billboard_url = addslashes($billboard_url);
$billboard_image = addslashes($billboard_image);
$advertiser_name = addslashes($advertiser_name);
$billboard_url2 = addslashes($billboard_url2);
$billboard_image2 = addslashes($billboard_image2);
$advertiser_name2 = addslashes($advertiser_name2);
$advertiser_name = addslashes($advertiser_name);

<<<<<<< HEAD
//check to see if data exists in db
$check_existing = "SELECT id, hed_date FROM recharge WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
	$run_qry = "UPDATE recharge
	SET hed_date = '$headlines_date',
	subject_line='$subject_line',
	recharge_main_hed = '$recharge_main_hed',
	recharge_main_url = '$recharge_main_url',
	recharge_main_img = '$recharge_main_img',
	recharge_main_dek = '$recharge_main_dek',
	recharge_main_source = '$recharge_main_source',
	recharge_main_ital = '$recharge_main_ital',
	recharge1_dek = '$recharge1_dek',
	recharge1_source = '$recharge1_source',
	recharge1_ital = '$recharge1_ital',
	recharge1_url = '$recharge1_url',
	recharge2_dek = '$recharge2_dek',
	recharge2_source = '$recharge2_source',
	recharge2_ital = '$recharge2_ital',
	recharge2_url = '$recharge2_url',
	recharge3_dek = '$recharge3_dek',
	recharge3_source = '$recharge3_source',
	recharge3_ital = '$recharge3_ital',
	recharge3_url = '$recharge3_url',
	recharge4_dek = '$recharge4_dek',
	recharge4_source = '$recharge4_source',
	recharge4_ital = '$recharge4_ital',
	recharge4_url = '$recharge4_url',
	recharge5_dek = '$recharge5_dek',
	recharge5_source = '$recharge5_source',
	recharge5_ital = '$recharge5_ital',
	recharge5_url = '$recharge5_url',
	ad_link_bill = '$billboard_url',
	ad_billboard = '$billboard_image',
	ad_name = '$advertiser_name',
	sub_url = '$sub_url',
	sub_image = '$sub_image',
	sub_text = '$sub_text',
	sub_code = '$sub_code',
	lift_note = '$lift_note',
	pixel_tracker = '$pixel_tracker',
	pixel_tracker2 = '$pixel_tracker2'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO recharge(hed_date,subject_line,recharge_main_hed,recharge_main_url,recharge_main_img,recharge_main_dek,recharge_main_source,recharge_main_ital,recharge1_dek,recharge1_source,recharge1_ital.recharge1_url,recharge2_dek,recharge2_source,recharge2_ital,recharge2_url,recharge3_dek,recharge3_source,recharge3_ital,recharge3_url,recharge4_dek,recharge4_source,recharge4_ital,recharge4_url,recharge5_dek,recharge5_source,recharge5_ital,recharge5_url,ad_name,ad_link_bill,ad_billboard,sub_url,sub_image,sub_text,sub_code,lift_note,pixel_tracker,pixel_tracker2)
	VALUES('$headlines_date',
	'$subject_line',
	'$recharge_main_hed',
	'$recharge_main_url',
	'$recharge_main_img',
	'$recharge_main_dek',
	'$recharge_main_source',
	'$recharge_main_ital',
	'$recharge1_dek',
	'$recharge1_source',
	'$recharge1_ital',
	'$recharge1_url',
	'$recharge2_dek',
	'$recharge2_source',
	'$recharge2_ital',
	'$recharge2_url',
	'$recharge3_dek',
	'$recharge3_source',
	'$recharge3_ital',
	'$recharge3_url',
	'$recharge4_dek',
	'$recharge4_source',
	'$recharge4_ital',
	'$recharge4_url',
	'$recharge5_dek',
	'$recharge5_source',
	'$recharge5_ital',
	'$recharge5_url',
	'$advertiser_name',
	'$billboard_url',
	'$billboard_image',
	'$sub_url',
	'$sub_image',
	'$sub_text',
	'$sub_code',
	'$lift_note',
	'$pixel_tracker',
	'$pixel_tracker2');
}
/* end db operations
=======


>>>>>>> 4cb4df824266b933257557a3f408e917b0feb611

//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>