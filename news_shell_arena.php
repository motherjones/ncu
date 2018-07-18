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
	$ad_message .= "For <em>Food for Thought</em> and <em>Recharge</em>, the <strong>HTML (Image Map) Section</strong> will override the <strong>Image and URL only section</strong>, and either of these sections will override the Ad Bottom(2) section.";
}
else {
	$ad_message .= "The <strong>HTML (Image Map) Section</strong> will override the <strong>Image and Url only section</strong>.";
}

include "incs/header.inc";
?>
    <div id="footer_row">
      <button style="background-color:#369;color:#fff;font-size:14px;" onclick="checkForm('preview', '<?php print $new; ?>', '<?php print $arch_type; ?>');">Save and Preview Newsletter</button>
      <button style="background-color:#393;color:#fff;font-size:14px;" onclick="checkForm('not', '<?php print $new; ?>', '<?php print $arch_type; ?>')">Submit Newsletters</button>
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
  <div id="ad_section" style="clear:both;">
  <fieldset class="sub_sections">
    		<legend>Lift-Note Section</legend>
    		<textarea rows="5" cols="50" id="lift_note" name="lift_note"></textarea>
    	</fieldset>
    	</div>
    <input type="hidden" value="" id="holdmenow" />
  </form>
  <script>
	$(document).ready(function() {
		var new_news = "<?php print $new; ?>";
		var day_int;
		var type_of = "<?php print $arch_type; ?>";
		
		switch(type_of) {
		  case "econundrums_new":
		    day_int = 1;
		    break;
		  case "food_for_thought_redesign":
		    day_int = 0;
		    break;
		  case "in_the_mix_new":
		    day_int = 6;
		    break;
		  case "political_mojo_new":
		    day_int = 5;
		    break;
		  case "breaking_news":
		    day_int = 1;
		    break;
		  case "trumpocracy":
		    day_int = 4;
		    break;
		  case "recharge":
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
  </script>
</body>
</html>