<?php
header("Content-Type: text/html;charset=UTF-8");
include "credentials.inc";
$today = date("Y-m-d", time());
?>
<!DOCTYPE html>
<html>
<head>
  <title>MoJo Newsletter Curation Utility</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="head_main.css" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" language="javascript" src="headlines_script.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
  CKEDITOR.config.customConfig = 'custom-config.js';
    function makeEditor(numId) {
      var editor_height = 0;
      if(numId == "conundrum_dek" || numId == "maindish_dek" || numId == "twmustread_dek" || numId == "topstory_dek" || numId == "fft_hidden_kitchen" || numId == "fft_ioe_item1" || numId == "fft_ioe_item2" || numId == "fft_ioe_item3" || numId == "lift_note" || numId == "main_text" || numId == "trum_main_dek" || numId == "trump_main2_dek") {
          CKEDITOR.replace(numId, {
              width: 410,
              height: 200
            });
          CKEDITOR.config.scayt_autoStartup = true;
        	CKEDITOR.config.scayt_sLang = 'en_US';
          CKEDITOR.config.extraPlugins = 'autogrow,justify';
          CKEDITOR.config.autoGrow_minHeight = 200;
          CKEDITOR.config.autoGrow_maxHeight = 400;
          CKEDITOR.config.resize_enabled = true;
          CKEDITOR.instances[numId].on('blur', function(e) {
             var temp_text = CKEDITOR.instances[numId].getData();
             var clean_text = cleanstring(temp_text);
             CKEDITOR.instances[numId].setData(clean_text);
          });
      }
      else if(numId == "fft_article_1" || numId == "fft_article_2" || numId == "fft_article_3" || numId == "fft_article_4" || numId == "fft_article_5" || numId == "fft_article_6" || numId == "fft_snack_box" || numId == "fft_sb_attr" || numId == "fft_hk_leadin" || numId == "fft_bite_add" || numId == "membership_slot" || numId == "topnews1_dek" || numId == "topnews2_dek" || numId == "topnews3_dek" || numId == "topnews4_dek" || numId == "topnews5_dek" || numId == "wors1_dek" || numId == "wors2_dek" || numId == "wors3_dek" || numId == "wors4_dek") {
          CKEDITOR.replace(numId, {
              width: 410,
              height: 100
            });
          CKEDITOR.config.scayt_autoStartup = true;
        	CKEDITOR.config.scayt_sLang = 'en_US';
          CKEDITOR.config.extraPlugins = 'autogrow,justify';
          CKEDITOR.config.autoGrow_minHeight = 100;
          CKEDITOR.config.autoGrow_maxHeight = 200;
          CKEDITOR.config.resize_enabled = true;
          CKEDITOR.instances[numId].on('blur', function(e) {
             var temp_text = CKEDITOR.instances[numId].getData();
             var clean_text = cleanstring(temp_text);
             CKEDITOR.instances[numId].setData(clean_text);
          });
      }
      else {
        editor_height = "200";
      }
    }
    </script>
</head>
<body>
  <div id="header">
    <h2 id="head_text"><em>MoJo</em> Newsletter Curation Utility [<strong>MNCU</strong>]</h2>
    <a href="" id="section_image" target="_blank"><img src="logo_inside.gif" border="0" id="type_img" width="450" style="display:block;text-align:center;width:100%;margin: 0 auto;" /></a>
  </div>
  <form id="headlinesForm" action="" method="post" accept-charset="utf-8">
    <div id="head_row">
    	<div id="top_section">
    		<p style="float:left;width:300px;padding:5px;">To get started, choose a newsletter under Headline Category.<br /><br /><span style="color:#c33;font-weight:bold;font-size: 14px;">IMPORTANT: Before working on a newsletter, click on View Headlines Archives to see if there is already a newsletter created for the date that you want. If so, use that one. If not, please contact a member of ad-ops to create a shell for the date you want.</span></p>
    		<div style="width:300px;float:left;border-left: 1px dotted #00f;padding: 5px 0 5px 15px;">
    			<p>Headlines's date (format:2012-02-29): <input type="text" id="hed_date" name="date_today" size="10" value="" /></p>
        		<p>Headlines category:
      			<select id="hed_type" name="hed_type" onchange="javascript:getTypeImg(this.value);">
        			<option value="not">Make a choice...</option>
        			<option value="breaking_news">Breaking News</option>
        			<option value="econundrums_new">Econundrum</option>
        			<option value="food_for_thought_redesign">Food for Thought</option>
        			<option value="in_the_mix_new">In The Mix</option>
        			<option value="political_mojo_new">Political Mojo</option>
        			<option value="trumpocracy">The Russian Connection</option>
      			</select>
      			</p>
        		<p>Headlines archives:
        			<select id="archives" onchange="javascript:getArchive();">
        			</select>
        			<span class="message_check" style="background-color:#c34;color:#fff;font-size:18px;display:none;">Please choose an archive before continuing</span>
        		</p>
        		<br />
        </div>
        <div style="width:430px;margin:5px auto;border-top:1px dotted #00f;display:table;">
        	<input type="button" value="View Headlines Archives" onclick="location.href='archives/'" style="margin:5px 20px 5px 10px;padding:5px 5px;float:left;color:#ffffff;background-color:#000000;" />
        	<input type="button" value="Newsletter Stats" onclick="window.open('news-stats.html', 'Newsletter Stats', 'toolbar=no,width=1200,scrollbars=yes');" style="float:left;margin: 5px 20px 5px 10px;padding: 5px;color:#fff;background-color:#000;" />
        	<input type="button" value="Refresh data" onclick="javascript:getArchive();" style="margin:5px 0 5px 10px;padding:5px 5px;float:left;background-color:#c21;color:#fff;font-weight:bold;" id="refresh_data" />
        </div>
      </div>
    </div>
    <p id="wysiwig_msg" class="block_hidden">Please wait until the WYSIWIG loads completely.  Thank you.</p>
    <p style="text-align:center;width:100%;"><span class="message_check" style="background-color:#c34;color:#fff;font-size:18px;display:none;">Please choose an archive before continuing</span></p>
	<div style="text-align:center;clear:both;width:600px;margin:0 auto;">
     	<p style="font-size:14px;">Subject line: <input type="text" id="subject_line" name="subject_line" value="" size="75" spellcheck="true" onfocus="checkHedDate()" /></p>
    </div>
  <div id="main_container">
  </div>
    <hr style="100%;clear:both;" />
    <div id="footer_row" class="block_hidden">
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
</body>
</html>