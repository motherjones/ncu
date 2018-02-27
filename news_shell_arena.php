<?php
header("Content-Type: text/html;charset=UTF-8");
include "credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc";
$arch_type = $_REQUEST["newsletter_type"];
$news_date = $_REQUEST["date"];
$new = $_REQUEST["new"];
if($new === "yes") {
	$input_type = "text";
}
else {
	$input_type = "hidden";
}
?>

  <form id="headlinesForm" action="" method="post" accept-charset="utf-8">
    <div id="head_row">
    	<div id="top_section">
        <div style="width:430px;margin:5px auto;border-top:1px dotted #00f;display:table;">
        	<input type="button" value="View Headlines Archives" onclick="location.href='archives/'" style="margin:5px 20px 5px 10px;padding:5px 5px;float:left;color:#ffffff;background-color:#000000;" />
        	
        	<input type="button" value="Refresh data" onclick="javascript:getArchive();" style="margin:5px 0 5px 10px;padding:5px 5px;float:left;background-color:#c21;color:#fff;font-weight:bold;" id="refresh_data" />
        </div>
      </div>
    </div>
	<div style="text-align:center;clear:both;width:600px;margin:0 auto;">
     	<p style="font-size:14px;">Subject line: <input type="text" id="subject_line" name="subject_line" value="" size="75" spellcheck="true" onfocus="checkHedDate()" /></p>
    </div>
  <div id="main_container">
  </div>
    <hr style="100%;clear:both;" />
    <div id="footer_row">
      <button style="widdth:75px;background-color:#369;color:#fff;font-size:14px;" onclick="checkForm('preview');">Preview</button>
      <button style="width:75px;background-color:#393;color:#fff;font-size:14px;" onclick="checkForm('not');">Submit</button>
    </div>
  <div id="ad_section" class="block_hidden" style="clear:both;">
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
    		<textarea id="pixel_tracker" name="pixel_tracker" type="text" value="" cols="55" rows="4""></textarea>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding 2px 2px;">PIXEL TRACKING CODE (BOTTOM AD):</legend>
    		<textarea id="pixel_tracker2" name="pixel_tracker2" type="text" value="" cols="55" rows="4"></textarea>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend>Lift-Note Section</legend>
    		<textarea rows="5" cols="50" id="lift_note" name="lift_note"></textarea>
    	</fieldset>
    </fieldset>
    <fieldset id="membership_slots" class="sections">
    	<legend>MEMBERSHIP SLOT OVERRIDES</legend>
    	<fieldset class="sub_sections">
    		<p><label for="sub_url">Sub url:</label> <input id="sub_url" name="sub_url" type="text" value="" size="40" onblur="this.value=fixURL(this.value)" /></p>
    		<p><label for="sub_image">Sub image:</label> <input type="text" value="" id="sub_image" name="sub_image" size="40"></p>
    		<p><label for="sub_text">Sub alt text:</label> <input type="text" value="" id="sub_text" name="sub_text" size="40"></p>
    		<p><label for="membership_slot">Membership text section for redesigned newsletter:</label></p>
    		<textarea id="membership_slot" name="membership_slot" rows="5" cols="45"></textarea>
    		<p>Code field for old newsletter format (for complex HTML ad: This field overrides the Sub url & Sub image fields):</p>
    	<textarea rows="5" cols="45" id="sub_code" name="sub_code"></textarea>
    	</fieldset>
  	</fieldset>
  </div>
  </form>
  <script>
	$(document).ready(function() {
		createDivs("<?php print $arch_type; ?>");
		getArchive("<?php print $arch_type; ?>", "<?php print $news_date; ?>");
	});
  </script>
</body>
</html>