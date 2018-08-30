<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());

$arch_type = $_REQUEST["newsletter_type"];
$news_date = $_REQUEST["date"];
$new = $_REQUEST["new"];
$ad_message = "<strong>Note</strong>: ";
if($new === "yes") {
	$display_date = "<p>Headlines's date for new shell (format:2012-02-29): <input type=\"text\" id=\"hed_date\" name=\"date_today\" size=\"10\" value=\"\" /></p>";
}
else {
	$display_date = "<p>Headlines's date: $news_date <input type=\"hidden\" id=\"hed_date\" name=\"date_today\" size=\"10\" value=\"$news_date\" /></p>";
}

if($arch_type === "food_for_thought_redesign" || $arch_type === "recharge") {
	$ad_message .= "For <em>Food for Thought</em> and <em>Recharge</em>, the <strong>HTML (Image Map) Section</strong> will override the <strong>Image and URL only section</strong>, and either of these sections will override the Ad Bottom(2) section if there is no paid ad..";
}
else {
	$ad_message .= "The <strong>HTML (Image Map) Section</strong> will override the <strong>Image and Url only section</strong>.";
}

include "incs/header.inc";
?>
    <div id="footer_row">
      <button style="background-color:#369;color:#fff;font-size:14px;" onclick="checkForm('preview', '<?php print $new; ?>', '<?php print $arch_type; ?>');">Save and Preview</button>
      <button style="background-color:#393;color:#fff;font-size:14px;" onclick="checkForm('not', '<?php print $new; ?>', '<?php print $arch_type; ?>')">Submit</button>
    </div>
	<div id="head_row">
    	  <header>
        <div style="width:190px;margin:5px auto;text-align:center;">
        <button onclick="location.href='./'" style="float:left;">Back to Main</button>
        	<!-- refresh data button in case data is lost during the json call -->
        	<button id="refresh_data" onclick="javascript:getArchive('<?php print $arch_type; ?>', '<?php print $news_date; ?>');" style="float:left;background-color:#c21;color:#fff;">Refresh data</button>
        </div>
      </header>
    </div>
  <form id="headlinesForm" action="" method="post" accept-charset="utf-8">
	<div style="text-align:center;clear:both;max-width:100%;">
		<?php print $display_date; ?>
      <p id="hidden_at_start">You are creating a new shell. If this is not what you intended, please click on "Back to Main" and choose an existing shell.</p>
     	<p style="font-size:14px;">Subject line: <input type="text" id="subject_line" name="subject_line" value="" size="75" spellcheck="true" /></p>
     	<input type="hidden" value="<?php print $arch_type; ?>" id="hed_type" name="hed_type">
     	<input type="hidden" value="<?php print $new; ?>" id="new_it_is" name="new_it_is">
    </div>
  <div id="main_container">
  </div>
    <hr style="100%;clear:both;" />
  <div id="ad_section" style="clear:both;">
  	<fieldset id="ad_slots" class="sections">
  		<legend>PAID ADS</legend>
  		<fieldset class="sub_sections">
  			<legend>Ad Top (1)</legend>
    		<p><label for="ad_name">Advertiser:</label> <input id="ad_name" name="advertiser_name" type="text" value="" size="40"></p>
    		<p><label for="ad_link_bill">Billboard Url:</label> <input id="ad_link_bill" name="billboard_url" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    		<p><label for="ad_billboard">Billboard Image:</label> <input id="ad_billboard" name="billboard_img" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
		</fieldset>
		<fieldset class="sub_sections bottom_ad">
  			<legend>Ad Bottom (2)</legend>
  			<div id="switch_ad"><div class="ui-button ui-corner-all" onclick="changeType('go_memb')">Switch to membership ad</div></div>
    			<p><label for="ad_name2">Advertiser 2:</label> <input id="ad_name2" name="advertiser_name2" type="text" value="" size="40"></p>
    			<p><label for="ad_link_banner">Billboard Url 2:</label> <input id="ad_link_banner" name="billboard_url2" type="text" value="" size="40" onblur="this.value=fixURL(this.value)" /></p>
    			<p><label for="ad_banner">Billboard Image 2:</label> <input id="ad_banner" name="billboard_img2" type="text" value="" size="40" onblur="this.value=fixURL(this.value)"></p>
    		</fieldset>
    		<fieldset class="sub_sections">
    			<legend style="background:#000;color:#fff;text-align:center;font-size: 12px;padding: 2px 2px;">PIXEL TRACKING CODE (TOP AD):</legend>
    			<textarea id="pixel_tracker" name="pixel_tracker" type="text" value="" cols="49" rows="4""></textarea>
    		</fieldset>
    		<fieldset class="sub_sections bottom_ad">
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
    		<div id="switch_memb"><div class="ui-button ui-corner-all" onclick="changeType('go_ad')">Switch to paid ad</div></div>
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
  	</fieldset>
  </div>
  <input type="hidden" value="" id="holdmenow" />
  </form>
  
  <script>
	$(document).ready(function() {
		var new_news = "<?php print $new; ?>";
		var day_int;
		var type_of = "<?php print $arch_type; ?>";

		if(type_of !== "trumpocracy") {
			$("#membership_slot").hide();
			$("#membership_slot").siblings().hide();
			$("#membership_slot").parent(".sub_sections").hide();
		}
		
		switch(type_of) {
		  case "econundrums_new":
			$("#switch_ad").hide();
			$("#switch_memb").hide();
		    day_int = 1;
		    break;
		  case "food_for_thought_redesign":
			changeType("go_ad");
		    day_int = 0;
		    break;
		  case "in_the_mix_new":
			$("#switch_ad").hide();
			$("#switch_memb").hide();
		    day_int = 6;
		    break;
		  case "political_mojo_new":
			$("#switch_ad").hide();
			$("#switch_memb").hide();
			day_int = 5;
		    break;
		  case "breaking_news":
		    day_int = 1;
		    break;
		  case "trumpocracy":
			$("#switch_ad").hide();
			$("#switch_memb").hide();
		    day_int = 4;
		    break;
		  case "recharge":
			changeType("go_ad");
			day_int = 3;
			break;
		  default:
		    break;
		}
		createDivs("<?php print $arch_type; ?>");
		
		if(new_news !== "yes") {
			CKEDITOR.on('instanceReady', getArchive("<?php print $arch_type; ?>", "<?php print $news_date; ?>"));
			$("#hidden_at_start").hide();
		}
		else {
			document.getElementById("hed_date").value = getNextSchedule(day_int);
			$("#hidden_at_start").show();
			checkIfNew();
			$("#hed_date").on("focusout", checkIfNew);
			$("#hed_date").on("mouseout", checkIfNew);
		}
	});

	function changeType(which_type) {
		//$("#headlinesForm").preventDefault();
		//go_ad, go_memb
		if(which_type === "go_ad") {
			$("#membership_slots").hide();
			$("#sub_image").prop('disabled', true);
			$("#sub_url").prop('disabled', true);
			$("#sub_text").prop('disabled', true);
			$("#sub_code").prop('disabled', true);
			$(".bottom_ad").show();
			$("#ad_name2").prop('disabled', false);
			$("#ad_link_banner").prop('disabled', false);
			$("#ad_banner").prop('disabled', false);
		}
		else {
			$(".bottom_ad").hide();
			$("#ad_name2").prop('disabled', true);
			$("#ad_link_banner").prop('disabled', true);
			$("#ad_banner").prop('disabled', true);
			$("#membership_slots").show();
			$("#sub_image").prop('disabled', false);
			$("#sub_url").prop('disabled', false);
			$("#sub_text").prop('disabled', false);
			$("#sub_code").prop('disabled', false);
		}
	}
  </script>
</body>
</html>