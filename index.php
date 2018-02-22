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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 813.67 165.61"><path d="M53.72 97.86h-.39l-8.05-86.64H0v152.49h28.78v-85.9l-1.67-36.19 2.05 14.73 14.39 107.36h19.18L77.12 56.35l2.05-14.73-1.66 36.19v-.04 85.94h28.77V11.22H62.54l-8.82 86.64M391.4 87.12c0-33.06-1.23-58.67-34-58.67S321 61.67 321 91.17c0 37.54 5.56 74.1 39.71 74.1 19.34 0 30.18-17.68 30.18-17.68v-31.07s-8.4 21.23-24.62 21.23c-11.32 0-17.65-10.58-17.65-27.83h42c.01-3.49.78-13.92.78-22.8zm-42.79-3.22c0-13.9 1.92-24.9 9.6-24.9 8.25 0 10.17 12.31 10.17 24.94zM148.49 28.44c-38.75 0-38.75 27.18-38.75 65.11 0 43.53 3.93 71.72 38.75 71.72s38.75-26 38.75-75c.01-35.87.01-61.83-38.75-61.83zm0 104.47c-9.21 0-10-5-10-36.06 0-29.34.77-36.06 10-36.06s10 7.08 10 36.06c-.02 27.23-.79 36.07-10 36.07zM442.34 28.44c-9.37 0-13.73 8.49-16 17.24l-2.56 19.49V30h-29v133.7h31.08V92.19c0-26 7.86-30.34 15.94-30.34 11.79 0 14.55 14.16 14.55 14.16V35.77s-5.48-7.33-14.01-7.33zm-145.72 0c-10.55 0-17.44 7.48-19.7 18.65l-2.17 12.5V11.22h-31.08v152.49h31.08V74.29c0-5.13.44-13.88 6.33-13.88s5.37 7.57 5.37 14.67v88.63h31.08V50.92c0-11.48-4.8-22.48-20.91-22.48zm261.29.34c-38.75 0-38.75 27.18-38.75 65.11 0 43.53 3.93 71.72 38.75 71.72s38.75-26 38.75-75c0-35.87 0-61.83-38.75-61.83zm0 104.47c-9.21 0-10-5-10-36.06 0-29.34.77-36.06 10-36.06s10 7.08 10 36.06c-.03 27.22-.8 36.06-10 36.06zm95.16-104.81c-10.55 0-17.44 7.48-19.7 18.65l-2.18 12.5V30h-31.07v133.7h31.08V74.29c0-5.13.44-13.88 6.33-13.88s5.37 7.59 5.37 14.67v88.63H674V50.92c0-11.48-4.82-22.48-20.93-22.48zm-196.65 91.04v35.95s5.38 9.57 24.19 9.57c28.22 0 35.09-23.13 35.09-48.79v-105h-28.78v92.09c0 26-7.86 30.34-15.94 30.34-11.8-.01-14.56-14.16-14.56-14.16zm294.37-2.96c2.8 10.71 8.62 21.34 21.82 21.34 8.73 0 12.83-3 13.24-11.5.89-18.69-34.34-27.06-34.34-59.75 0-28.46 13.87-38.16 33.77-38.16 11.63 0 23.26 7.85 26.62 15.53V76c-3.36-9.36-10.27-20.08-19.8-20.08-7.55 0-11.17 3.6-11.51 10.72-.92 19.3 33.09 26.18 33.09 56.64 0 25.71-9 42-34.34 42-20.13 0-28.54-17.68-28.54-17.68zm-2.95-29.4c0-33.06-1.23-58.67-34-58.67s-36.45 33.23-36.45 62.73c0 37.54 5.56 74.1 39.71 74.1 19.34 0 30.18-17.68 30.18-17.68v-31.08s-8.4 21.23-24.62 21.23c-11.32 0-17.65-10.58-17.65-27.83h42c.07-3.49.83-13.92.83-22.8zm-42.78-3.22c0-13.9 1.94-24.9 9.6-24.9 8.25 0 10.17 12.31 10.17 24.94z"></path><path class="cls-1" d="M221.79 0l-37 33.52s5.88 14.91 5.88 40.66v65.18c0 18.45 10.74 25.93 25.9 25.93 10.43 0 17.28-2.83 23.6-8.49v-27.63c-2.51 4.56-5.31 7-9.72 7-4.67 0-8.69-3.38-8.69-10.79V58.2h18.44V30h-18.41z"></path></svg>
    <h2 id="head_text"><em>MoJo</em> Newsletter Curation Utility [<strong>MNCU</strong>]</h2>
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