<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
include "incs/header.inc";
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_REQUEST["start_date"]) && $_REQUEST["start_date"] !== "") {
	$start_date = trim($_REQUEST["start_date"]);
}
else {
	$start_date = "";
}

if(isset($_REQUEST["id"]) && $_REQUEST["id"] !== "") {
	$sub_url = trim($_REQUEST["id"]);
}
else {
	$sub_url = "";
}

if(isset($_REQUEST["sub_url"]) && $_REQUEST["sub_url"] !== "") {
	$sub_url = trim($_REQUEST["sub_url"]);
}
else {
	$sub_url = "";
}

if(isset($_REQUEST["sub_image"]) && $_REQUEST["sub_image"] !== "") {
	$sub_image = trim($_REQUEST["sub_image"]);
}
else {
	$sub_image = "";
}

if(isset($_REQUEST["sub_text"]) && $_REQUEST["sub_text"] !== "") {
	$sub_text = trim($_REQUEST["sub_text"]);
}
else {
	$sub_text = "";
}

if(isset($_REQUEST["sub_code"]) && $_REQUEST["sub_code"] !== "") {
	$sub_code = trim($_REQUEST["sub_code"]);
}
else {
	$sub_code = "";
}
?>

<div id="head_row">
	<div style="width:250px;margin:5px auto;text-align:center;">
		<header>
			<button onclick="location.href='./'" style="float:left;">Back to Main</button>
			<button onclick="location.href='ads_index.php'" style="float:left;">Back to Ads Index</button>
		</header>
	</div>
</div>
<div id="memb_mssg" style="margin-left:10px;min-width:20%;max-width:33%;float:left;height:50px;text-align:center;vertical-align:middle;padding-top:20px;padding-right:5px;padding-left:5px;font-weight:bold;">&nbsp;</div>
<fieldset class="sections">
	<form id="membership_default" action="" method="post" accept-charset="utf-8">
  		<legend>Default membership ads section</legend>
  		<fieldset class="sub_sections">
  			<label for="start_date">Start Date</label><input type="date" id="start_date" name="start_date" value="<?php print $start_date; ?>">
  		</fieldset>
  		<fieldset class="sub_sections">
  			<legend>Image and URL only section</legend>
  			<p><label for="sub_url">Sub url:</label> <input id="sub_url" name="sub_url" type="text" value="<?php print $sub_url; ?>" size="40" onblur="this.value=fixURL(this.value)" /></p>
  			<p><label for="sub_image">Sub image:</label> <input type="text" value="<?php print $sub_image; ?>" id="sub_image" name="sub_image" size="40"></p>
  			<p><label for="sub_text">Sub alt text:</label> <input type="text" value="<?php print $sub_text; ?>" id="sub_text" name="sub_text" size="40"></p>
  		</fieldset>
  		<fieldset class="sub_sections">
  			<legend>HTML (Image Map) section</legend>
  			<textarea rows="5" cols="45" id="sub_code" name="sub_code"><?php print $sub_code; ?></textarea>
  		</fieldset>
  		<input type="hidden" value="membership_d" name="ad_type" id="ad_type">
  		<input type="hidden" value="<?php print $sub_id; ?>" name="id" id="id">
  		<input type="hidden" value="<?php print $override; ?>" name="override" id="override">
  	</form>
  	<fieldset class="sub_sections" style="text-align:center;">
  		<button onclick="callMom('membership_d')">Add default membership ad</button>
  	</fieldset>
</fieldset>