<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
include "incs/header.inc";
?>

<div id="head_row">
    	  <header>
        <div style="width:190px;margin:5px auto;text-align:center;">
        <button onclick="location.href='./'" style="float:left;">Back to Main</button>
        </div>
      </header>
    </div>
<form id="ads_form" action="" method="post" accept-charset="utf-8">
  <div id="ad_section" style="clear:both;">
  	<fieldset id="ad_slots" class="sections">
  		<legend>PAID ADS</legend>
  		<fieldset class="sub_sections">
  			<legend>Ad Top (1)</legend>
    		<p><label for="ad_name">Advertiser:</label> <input id="ad_name" name="advertiser_name" type="text" value="" size="40"></p>
    		<p><label for="ad_link_bill">Billboard Url:</label> <input id="ad_link_bill" name="billboard_url" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    		<p><label for="ad_billboard">Billboard Image:</label> <input id="ad_billboard" name="billboard_img" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
		</fieldset>
		<fieldset class="sub_sections">
  			<legend>Ad Bottom (2)</legend>
    		<p><label for="ad_name2">Advertiser 2:</label> <input id="ad_name2" name="advertiser_name2" type="text" value="" size="40"></p>
    		<p><label for="ad_link_banner">Billboard Url 2:</label> <input id="ad_link_banner" name="billboard_url2" type="text" value="" size="40" onblur="this.value=fixURL(this.value)" /></p>
    		<p><label for="ad_banner">Billboard Image 2:</label> <input id="ad_banner" name="billboard_img2" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding: 2px 2px;">PIXEL TRACKING CODE (TOP AD):</legend>
    		<textarea id="pixel_tracker" name="pixel_tracker" type="text" value="" cols="49" rows="4""></textarea>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding 2px 2px;">PIXEL TRACKING CODE (BOTTOM AD):</legend>
    		<textarea id="pixel_tracker2" name="pixel_tracker2" type="text" value="" cols="49" rows="4"></textarea>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend>Lift-Note Section</legend>
    		<textarea rows="5" cols="50" id="lift_note" name="lift_note"></textarea>
    	</fieldset>
    </fieldset>
    <fieldset id="membership_slots" class="sections">
    	<legend>MEMBERSHIP SLOT OVERRIDES</legend>
    	<p><?php print $ad_message; ?></p>
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
    		<p><label for="membership_slot">Membership text section for redesigned newsletter:</label></p>
    		<textarea id="membership_slot" name="membership_slot" rows="5" cols="45"></textarea>
    	</fieldset>
  	</fieldset>
  </div>
  </form>