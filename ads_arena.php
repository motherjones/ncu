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
<form id="ads_form" action="process_ads.php" method="post" accept-charset="utf-8">
	<input type="hidden" name="table_name" id="table_ad" value="newsletter_ads">
	<div id="recent_newsletters"></div>
  <div id="ad_section" style="clear:both;">
  	<fieldset id="ad_slots" class="sections">
  		<legend>PAID ADS</legend>
  		<fieldset class="sub_sections">
  			<legend>Ad Top (1)</legend>
    		<p><label for="ad_name">Advertiser:</label> <input id="ad_name" name="ad_name" type="text" value="" size="40"></p>
    		<p><label for="ad_link_bill">Billboard Url:</label> <input id="ad_link_bill" name="ad_link_bill" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    		<p><label for="ad_billboard">Billboard Image:</label> <input id="ad_billboard" name="ad_billboard" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
		</fieldset>
		<fieldset class="sub_sections">
  			<legend>Ad Bottom (2)</legend>
    		<p><label for="ad_name2">Advertiser 2:</label> <input id="ad_name2" name="ad_name2" type="text" value="" size="40"></p>
    		<p><label for="ad_link_banner">Billboard Url 2:</label> <input id="ad_link_banner" name="ad_link_banner" type="text" value="" size="40" onblur="this.value=fixURL(this.value)" /></p>
    		<p><label for="ad_banner">Billboard Image 2:</label> <input id="ad_banner" name="ad_banner" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding: 2px 2px;">PIXEL TRACKING CODE (TOP AD):</legend>
    		<textarea id="pixel_tracker" name="pixel_tracker" type="text" value="" cols="49" rows="4""></textarea>
    	</fieldset>
    	<fieldset class="sub_sections">
    		<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding 2px 2px;">PIXEL TRACKING CODE (BOTTOM AD):</legend>
    		<textarea id="pixel_tracker2" name="pixel_tracker2" type="text" value="" cols="49" rows="4"></textarea>
    	</fieldset>
    	<fieldset class="sub_sections"><input type="submit" value="Enter ad"></fieldset>
    </fieldset>
  </form>
  <form id="memb_form" action="process_ads.php" method="post" accept-charset="utf-8">
  <input type="hidden" name="table_name" id="table_memb" value="membership_ads">
    <fieldset id="membership_slots" class="sections">
    		<fieldset class="sub_sections">
    			<legend>Schedule and default membership ads</legend>
    			<p><label for="start_date">Start date:</label> <input type="date" value="" id="start_date" name="start_date"> &nbsp;
    			<label for="end_date">End date:</label> <input type="date" value="" id="end_date" name="end_date"></p>
    			<p><input type="checkbox" id="is_default" name="is_default" value=""> <lable for="is_default">Is this the default membership ad?</lable></p>
    		</fieldset>
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
    		<fieldset class="sub_sections">
    			<p><label for="membership_slot">Membership text section for redesigned newsletter:</label></p>
    			<textarea id="membership_slot" name="membership_slot" rows="5" cols="45"></textarea>
    		</fieldset>
    		<fieldset class="sub_sections"><input type="submit" value="Enter Membership Ad(s)"></fieldset>
  	</fieldset>
  </div>
  </form>
  <script>
  getStuff();
  function getStuff() {
	  var httpxml = new getHTTP();
	  httpxml.onreadystatechange = function() {
			if(httpxml.readyState == 4) {
				data_text = JSON.parse(httpxml.responseText);
				for(index_name in data_text) {
					var table_layout = "<table border=\"0\" width=\"250\" align=\"left\"><tr><th>" + index_name + "</th></tr>"; 
					for(elem in data_text[index_name]) {
						table_layout += "<tr><td><input type=\"checkbox\" value=\"" + elem  + "\">" + data_text[index_name][elem] + "</td></tr>";
					}
					table_layout += "</table>";
					document.getElementById("recent_newsletters").innerHTML += table_layout;
				}
				document.getElementById("recent_newsletters").innerHTML = "<p style=\"text-align:center\">Recent newsletter shells</p>" + document.getElementById("recent_newsletters").innerHTML;
			}
	  }

	  httpxml.open("POST", "ad_ajax_calls.php");
	  httpxml.send("null");
  }
  </script>
  </body>
  </html>