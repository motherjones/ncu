<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
include "incs/header.inc";
?>

<div id="head_row">
	<div style="width:190px;margin:5px auto;text-align:center;">
		<header>
			<button onclick="location.href='./'" style="float:left;">Back to Main</button>
		</header>
	</div>
</div>
<fieldset class="sections">
	<form id="membership_default" action="" method="post" accept-charset="utf-8">
  		<legend>Default membership ads section</legend>
  		<fieldset class="sub_sections">
  			<label for="start_date">Start Date</label><input type="date" id="start_date" name="start_date">&nbsp;&nbsp;
  			<label for="end_date">End Date</label><input type="date" id="end_date" name="end_date">
  		</fieldset>
  		<fieldset class="sub_sections">
  			<legend>Image and URL only section</legend>
  			<p><label for="sub_url">Sub url:</label> <input id="sub_url" name="sub_url" type="text" value="" size="40" onblur="this.value=fixURL(this.value)" /></p>
  			<p><label for="sub_image">Sub image:</label> <input type="text" value="" id="sub_image" name="sub_image" size="40"></p>
  			<p><label for="sub_text">Sub alt text:</label> <input type="text" value="" id="sub_text" name="sub_text" size="40"></p>
  		</fieldset>
  		<fieldset class="sub_sections">
  			<legend>HTML (Image Map) section</legend>
  			<textarea rows="5" cols="45" id="sub_code" name="sub_code"></textarea>
  		</fieldset>
  	</form>
  	<fieldset class="sub_sections" style="text-align:center;">
  		<button>Add default membership ad</button>
  	</fieldset>
</fieldset>