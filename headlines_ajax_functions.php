<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
//ajax functions for headlines app

//get requests from either add section button or the form to submit
if($_REQUEST['section']) {
  $section = $_REQUEST['section'];
  createDivs($section);
}

if($_REQUEST['existing']) {
  $get_section = trim($_REQUEST['existing']);
  $new_news = "no";
  $news_date = "";
  
  if($_REQUEST['check_new']) {
  	$new_news = trim($_REQUEST['check_new']);
  }
  if($_REQUEST['the_date']) {
  	$news_date = trim($_REQUEST['the_date']);
  }

  checkExisting($get_section, $new_news, $news_date);
}

if($_REQUEST['arch_type'] && $_REQUEST['date']) {
  $archive = $_REQUEST['arch_type'];
  $date_arch = $_REQUEST['date'];
  retrieveArchive($archive, $date_arch);
}

function retrieveArchive($arch_type, $arch_date) {
  include "incs/credentials.inc";
  $db_con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to DB");
  $qry_string = sprintf("SELECT * FROM %s WHERE hed_date='%s'", $arch_type, $arch_date);
  $arch_qry = mysqli_query($db_con, $qry_string) or die("Can't run query" . mysqli_error($db_con));
  $result = mysqli_fetch_assoc($arch_qry);
  $data_return = json_encode($result);

  print $data_return;
}

function checkExisting($section_type, $if_new, $news_date) {
  include "incs/credentials.inc";
  $db_con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb);

  if($if_new === "yes") {
  	$check_qry = sprintf("SELECT hed_date FROM %s WHERE hed_date='%s'", $section_type, $news_date);
  	$run_qry = mysqli_query($db_con, $check_qry) or die("can't run query");
  	if(mysqli_num_rows($run_qry) !== 0) {
  		exit("exists");
  	}
  }
  else {
  	$check_qry = sprintf("SELECT hed_date FROM %s ORDER By hed_date DESC", $section_type);
  	$run_qry = mysqli_query($db_con, $check_qry) or die("can't run query");
  	$date_array = "none";
  	
  	if(mysqli_num_rows($run_qry) > 0) {
  		$date_array = "";
  		while($get_dates = mysqli_fetch_assoc($run_qry)) {
  			if($get_dates['hed_date'] !== "" || $get_dates['hed_date'] !== null || $get_dates['hed_date'] !== "undefined") {
  				$date_array .= $get_dates['hed_date'] . "?";
  			}
  		}
  		$date_arr = explode("?", $date_array);
  		$date_arr = array_filter($date_arr);
  		$date_json = json_encode($date_arr);
  		print $date_json;
  	}
  	else {
  		$error->name = "unknown";
  		$send_error = json_encode($error);
  		print $send_error;
  	}
  }
  
  mysqli_free_result($run_qry);
  mysqli_close($db_con);
}

//add more divs to section (left or right side)
function createDivs($section) {
  $get_divs = ""; //var to hold html code for each section separated by divs

  switch($section) {
    case "econundrums_new":
      	$get_divs = econundrum();
      	break;
    case "food_for_thought_redesign":
    		$get_divs = fft_redesign();
    		break;
    case "in_the_mix_new":
  		$get_divs = inthemix();
  		break;
	case "political_mojo_new":
		$get_divs = politics();
		break;
	case "breaking_news":
		$get_divs = breaking_news();
		break;
	case "trumpocracy":
		$get_divs = trumpocracy();
		break;
	case "recharge":
		$get_divs = recharge();
		break;
    default:
  }

  print $get_divs;
}

//Breaking News
function breaking_news() {
$breaking_news = <<<BREAKING
<div class="head_types">
  <div class="columns">
		<div id="items_left">
			<fieldset class="sections">
			<legend>Breaking News</legend>
			<fieldset class="sub_sections">
					<p>Breaking News Lead: <input type="text" id="breaking" name="breaking" value="" size="45" maxlength="255" spellcheck="true" /></p>
					<p>Breaking News Lead URL: <input type="text" id="breaking_url" name="breaking_url" value="" size="45" onblur="this.value=fixURL(this.value)" />
					<p>Breaking News Main Text:</p>
					<textarea rows="10" cols="45" id="main_text" name="main_text"></textarea>
					</fieldset>
			</fieldset>
		</div>
  </div>
  <div class="columns">
		<div id="items_right">
			<fieldset class="sections">
			<legend>More News Section</legend>
			<h4><input type="text" class="section_titles" id="more_news_title" name="more_news_title" value="More News" /></h4>
			<fieldset class="sub_sections">
					<p>More News 1 Hed: <input type="text" id="more_news_1" name="more_news_1" value="" size="45" maxlength="255" spellcheck="true" /></p>
					<p>More News 1 URL: <input type="text" id="more_news_1_url" name="more_news_1_url" value="" size="45" onblur="this.value=fixURL(this.value)" />
			</fieldset>
			<fieldset class="sub_sections">
					<p>More News 2 Hed: <input type="text" id="more_news_2" name="more_news_2" value="" size="45" maxlength="255" spellcheck="true" /></p>
					<p>More News 2 URL: <input type="text" id="more_news_2_url" name="more_news_2_url" value="" size="45" onblur="this.value=fixURL(this.value)" />
			</fieldset>
			<fieldset class="sub_sections">
					<p>More News 3 Hed: <input type="text" id="more_news_3" name="more_news_3" value="" size="45" maxlength="255" spellcheck="true" /></p>
					<p>More News 3 URL: <input type="text" id="more_news_3_url" name="more_news_3_url" value="" size="45" onblur="this.value=fixURL(this.value)" />
			</fieldset>
		</div>
  </div>
</div>
BREAKING;

return $breaking_news;
}

//Econundrums
function econundrum() {
$econundrum = <<<ECONUNDRUM
<div class="head_types">
  <div class="columns">
    <div id="items_left">
	  <fieldset class="sections">
		<legend>MAIN ARTICLE</legend>
			<fieldset class="sub_sections">
			  <legend><input id="this_week" name="this_week" type="text" value="This Week's Econundrum"" /></legend>
			  <p>Headline: <input type="text" id="conundrum_hed" name="conundrum_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
			  <p>Url: <input type='text' id='conundrum_url' name='conundrum_url' size='50' onblur="this.value=fixURL(this.value)"" /></p>
			  <p class='dek_sect'>Dek:</p>
			  <textarea rows='15' cols='45' id='conundrum_dek' name='conundrum_dek'"></textarea>
			</fieldset>
	  </fieldset>
    </div>
  </div>
  <div class="columns">
		<div id="items_right">
			<fieldset class="sections">
				<legend>SECTION 2</legend>
				<h4><input type="text" class="section_titles" id="envirohealth_title" name="envirohealth_title" value="More Environment &amp; Health Coverage"" /></h4>
				<fieldset class="sub_sections">
					<legend>Headline 1</legend>
					<p>Hed: <input type="text" id="envirohealth1_hed" name="envirohealth1_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
					<p>Url: <input type='text' id='envirohealth1_url' name='envirohealth1_url' size='50' onblur="this.value=fixURL(this.value)"" /></p>
				</fieldset>
				<fieldset class="sub_sections">
					<legend>Headline 2</legend>
					<p>Hed: <input type="text" id="envirohealth2_hed" name="envirohealth2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
					<p>Url: <input type='text' id='envirohealth2_url' name='envirohealth2_url' size='50' onblur="this.value=fixURL(this.value)"" /></p>
				</fieldset>
				<fieldset class="sub_sections">
					<legend>Headline 3</legend>
					<p>Hed: <input type="text" id="envirohealth3_hed" name="envirohealth3_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
					<p>Url: <input type='text' id='envirohealth3_url' name='envirohealth3_url' size='50' onblur="this.value=fixURL(this.value)"" /></p>
				</fieldset>
			</fieldset>

			<fieldset class="sections">
				<legend>BOTTOM SECTION</legend>
				<h4><input type="text" class="section_titles" id="moremojo_title" name="moremojo_title" value="More from MoJo"" /></h4>
				<fieldset class="sub_sections">
					<legend>Headline 1</legend>
					<p>Hed: <input type="text" id="moremojo_hed" name="moremojo_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
					<p>Url: <input type="text" id="moremojo_url" name="moremojo_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
				</fieldset>
				<fieldset class="sub_sections">
					<legend>Headline 2</legend>
					<p>Hed: <input type="text" id="moremojo2_hed" name="moremojo2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
					<p>Url: <input type="text" id="moremojo2_url" name="moremojo2_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
				</fieldset>
			</fieldset>
	</div>
</div>
ECONUNDRUM;

return $econundrum;
}

//Food for Thought Redesign
function fft_redesign() {
$fft_redesign = <<<FFTRED
<div class="head_types">
  <div class="columns">
    <div id="items_left">
        <fieldset class="sections">
            <legend>MAIN SECTION</legend>
            <p>Main hed: <input type="text" id="fft_main_hed" name="fft_main_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)"" /></p>
            <p>Main url: <input type="text" id="fft_main_hed_url" name="fft_main_hed_url" size="50" maxlength="512" onblur="this.value=fixURL(this.value)" /></p>
            <p>Main image (url to image): <input type="text" id="fft_main_img" name="fft_main_img" size="50"" /></p>
            
            <fieldset class="sub_sections">
                <legend>Article 1:</legend>
                <textarea id="fft_article_1" name="fft_article_1" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a1_source" name="fft_a1_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a1_ital" name="fft_a1_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a1_url" name="fft_a1_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
            
            <fieldset class="sub_sections">
                <legend>Article 2:</legend>
                <textarea id="fft_article_2" name="fft_article_2" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a2_source" name="fft_a2_source"" style="float:left;">
                </fieldset>
                
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a2_ital" name="fft_a2_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a2_url" name="fft_a2_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
					
            <fieldset class="sub_sections">
                <legend>Article 3:</legend>
                <textarea id="fft_article_3" name="fft_article_3" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a3_source" name="fft_a3_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a3_ital" name="fft_a3_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a3_url" name="fft_a3_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
					
            <fieldset class="sub_sections">
                <legend>Article 4:</legend>
                <textarea id="fft_article_4" name="fft_article_4" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a4_source" name="fft_a4_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a4_ital" name="fft_a4_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a4_url" name="fft_a4_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
            
            <fieldset class="sub_sections">
                <legend>Article 5:</legend>
                <textarea id="fft_article_5" name="fft_article_5" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a5_source" name="fft_a5_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a5_ital" name="fft_a5_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a5_url" name="fft_a5_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
					
            <fieldset class="sub_sections">
                <legend>Article 6:</legend>
                <textarea id="fft_article_6" name="fft_article_6" rows="4" cols="45""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_a6_source" name="fft_a6_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_a6_ital" name="fft_a6_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_a6_url" name="fft_a6_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
        </fieldset>
			
        <fieldset class="sections">
            <legend><input type="text" id="snack_box" name="snack_box" value="One Great Tidbit" onblur="this.value=cleanstring(this.value)"" /></legend>
            <p>Body text:</p>
            <textarea id="fft_snack_box" name="fft_snack_box"></textarea>
            <p>Image source: <input type="text" id="fft_sb_image" name="fft_sb_image" size="50" maxlength="512"" /></p>
            <p>Attribution/Caption:</p>
            <textarea id="fft_sb_attr" name="fft_sb_attr""></textarea>
        </fieldset>
    </div>
  </div>
  
  <div class="columns">
    <div id="items_right">
        <fieldset class="sections">
            <legend><input type="text" id="in_our_ears" name="in_our_ears" value="New From Bite Podcast" onblur="this.value=cleanstring(this.value)"" /></legend>
            <fieldset class="sub_sections">
                <legend>First Item: </legend>
                <textarea id="fft_ioe_item1" name="fft_ioe_item1""></textarea>
                <p>(<strong>Only use these fields if this is not a Bite plug and you need to include sources</strong>)</p>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_ioe1_source" name="fft_ioe1_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_ioe1_ital" name="fft_ioe1_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_ioe1_url" name="fft_ioe1_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
                
                <p><strong>(If this item is not a Bite plug, please leave blank)</strong>.</p>
                <p>Bite episode link: <input type="text" id="fft_bite_link" name="fft_bite_link" size="50" maxlength="512"" /></p>
                <p>Bite episode description:</p>
                <textarea id="fft_bite_add" name="fft_bite_add""></textarea>
            </fieldset>
				
			<fieldset class="sub_sections">
                <legend>Second Item:</legend>
                <textarea id="fft_ioe_item2" name="fft_ioe_item2""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_ioe2_source" name="fft_ioe2_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_ioe2_ital" name="fft_ioe2_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_ioe2_url" name="fft_ioe2_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
            
            <fieldset class="sub_sections">
                <legend>Third Item:</legend>
                <textarea id="fft_ioe_item3" name="fft_ioe_item3""></textarea>
                <fieldset class="sources" style="float:left;width:50%;clear:both;">
                    <legend>Source name</legend>
                    <input type="text" id="fft_ioe3_source" name="fft_ioe3_source"" style="float:left;">
                </fieldset>
                <fieldset class="sources" style="float:left;width:25%;">
                    <legend>Italicise source?</legend> <input type="checkbox" id="fft_ioe3_ital" name="fft_ioe3_ital" style="float:left;">
                </fieldset>
                <fieldset class="sources">
                    <legend>Url</legend>
                    <input type="text" id="fft_ioe3_url" name="fft_ioe3_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
                </fieldset>
            </fieldset>
        </fieldset>
			
		<fieldset class="sections">
            <legend><input type="text" id="hidden_kitchen" name="hidden_kitchen" value="What's Cooking" onblur="this.value=cleanstring(this.value)"" /></legend>
            <fieldset class="sub_sections">
                <p>Lead in:</p>
                <textarea id="fft_hk_leadin" name="fft_hk_leadin""></textarea>
                <p>Body text:</p>
                <textarea id="fft_hidden_kitchen" name="fft_hidden_kitchen""></textarea>
            </fieldset>
        </fieldset>

        <fieldset class="sections">
            <fieldset class="sub_sections">
                <p>Image credits:</p>
                <textarea id="image_creds" name="image_creds""></textarea>
            </fieldset>
        </fieldset>
    </div>
  </div>
</div>
FFTRED;

return $fft_redesign;
}

//In the Mix
function inthemix() {
$inthemix = <<<INTHEMIX
<div class="head_types">
  <div class="columns">
    <div id="items_left">
		<fieldset class="sections">
			<legend>MAIN ARTICLE</legend>
			<fieldset class="sub_sections">
				<legend><input type="text" id="twmustread_title" name="twmustread_title" value="Must-Read"" /></legend>
				<p>Headline: <input type="text" id="twmustread_hed" name="twmustread_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="twmustread_url" name="twmustread_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
				<p class="dek_sect">Body Text:</p>
				<textarea rows="8" cols="45" id="twmustread_dek" name="twmustread_dek""></textarea>
			</fieldset>
		</fieldset>
    </div>
  </div>
  <div class="columns">
	<div id="items_right">
		<fieldset class="sections">
			<legend>SECTION 2</legend>
			<h4><input type="text" class="section_titles" id="morefrommix_title" name="morefrommix_title" value="More News"" /></h4>
			<fieldset class="sub_sections">
				<legend>Headline 1</legend>
				<p>Hed: <input type="text" id="morefrommix1_hed" name="morefrommix1_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="morefrommix1_url" name="morefrommix1_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 2</legend>
				<p>Hed: <input type="text" id="morefrommix2_hed" name="morefrommix2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="morefrommix2_url" name="morefrommix2_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 3</legend>
				<p>Hed: <input type="text" id="morefrommix3_hed" name="morefrommix3_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="morefrommix3_url" name="morefrommix3_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
		</fieldset>
			
		<fieldset class="sections">
			<legend>BOTTOM SECTION</legend>
			<h4><input type="text" class="section_titles" id="fromarchive_title" name="fromarchive_title" value="Don't Miss"" /></h4>
			<fieldset class="sub_sections">
				<legend>Headline 1</legend>
				<p>Hed: <input type="text" id="fromarchive1_hed" name="fromarchive1_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="fromarchive1_url" name="fromarchive1_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 2</legend>
				<p>Hed: <input type="text" id="fromarchive2_hed" name="fromarchive2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="fromarchive2_url" name="fromarchive2_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</legend>
		</fieldset>
	</div>
</div>
INTHEMIX;

return $inthemix;
}

//Political Mojo
function politics() {
$political = <<<POLITICAL
<div class="head_types">
  <div class="columns">
    <div id="items_left">
	  <fieldset class="sections">
		<legend>MAIN ARTICLE</legend>
		<fieldset class="sub_sections">
			<legend><input id="topstory_title" name="topstory_title" type="text" value="This Week's Top Story"" /></legend>
			<p>Headline: <input type="text" id="topstory_hed" name="topstory_hed" size="50" value="" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
			<p>Url: <input type="text" id="topstory_url" name="topstory_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			<p class="dek_sect">Body Text</p>
			<textarea rows="5" cols="45" id="topstory_dek" name="topstory_dek""></textarea>
		</fieldset>
	  </fieldset>
    </div>
  </div>
  <div class="columns">
	<div id="items_right">
		<fieldset class="sections">
			<legend>SECTION 2</legend>
			<h4><input class="section_titles" id="inothernews_title" name="inothernews_title" type="text" value="In Other News"" /></h4>
			<fieldset class="sub_sections">
				<legend>Headline 1</legend>
				<p>Hed: <input type="text" id="inothernews_hed" name="inothernews_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="inothernews_url" name="inothernews_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 2</legend>
				<p>Hed: <input type="text" id="inothernews2_hed" name="inothernews2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="inothernews2_url" name="inothernews2_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 3</legend>
				<p>Hed: <input type="text" id="inothernews3_hed" name="inothernews3_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="inothernews3_url" name="inothernews3_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
		</fieldset>

		<fieldset class="sections">
			<legend>BOTTOM SECTION</legend>
			<h4><input class="section_titles" id="mostread_title" name="mostread_title" type="text" value="Most Read"" /></h4>
			<fieldset class="sub_sections">
				<legend>Headline 1</legend>
				<p>Hed: <input type="text" id="mostread1_hed" name="mostread1_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="mostread1_url" name="mostread1_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
			<fieldset class="sub_sections">
				<legend>Headline 2</legend>
				<p>Hed: <input type="text" id="mostread2_hed" name="mostread2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true"" /></p>
				<p>Url: <input type="text" id="mostread2_url" name="mostread2_url" size="50" onblur="this.value=fixURL(this.value)"" /></p>
			</fieldset>
		</fieldset>
	</div>
  </div>
</div>
POLITICAL;

return $political;
}

function trumpocracy() {
	$trumpocracy = <<<TRUMP
<div class="head_types">
	<div class="columns">
		<div id="items_left">
			<fieldset class="sections">
				<legend>MAIN ARTICLE</legend>
				<p>Headline: <input type="text" id="trump_main_hed" name="trump_main_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true" /></p>
				<p>Url: <input type="text" id="trum_main_url" name="trum_main_url" size="50" onblur="this.value=fixURL(this.value)" /></p>
				<p>Image url: <input type="text" id="trump_main_img" name="trump_main_img" size="50" onblur="this.value=fixURL(this.value)" /></p>
				<p class="dek_sect">Dek:</p>
				<textarea rows="15" cols="45" id="trum_main_dek" name="trum_main_dek"></textarea>
				<fieldset class="sources" style="float:left;width:50%;clear:both;">
					<legend>Source name</legend>
					<input type="text" id="trump_main_source" name="trump_main_source" style="width:95%;" onblur="checkHedDate()">
				</fieldset>
				<fieldset class="sources" style="float:left;width:25%;">
					<legend>Italicize source?</legend>
					<input type="checkbox" id="trump_main_ital" name="trump_main_ital" style="float:left;">
				</fieldset>
			</fieldset>
			
			<fieldset class="sections">
				<legend><input type="text" id="topnews_title" name="topnews_title" value="TOP NEWS" /></legend>
				<fieldset class="sub_sections">
					<legend>Headline 1:</legend>
					<textarea id="topnews1_dek" name="topnews1_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="topnews1_source" name="topnews1_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="topnews1_ital" name="topnews1_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="topnews1_url" name="topnews1_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 2:</legend>
					<textarea id="topnews2_dek" name="topnews2_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="topnews2_source" name="topnews2_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="topnews2_ital" name="topnews2_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="topnews2_url" name="topnews2_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 3:</legend>
					<textarea id="topnews3_dek" name="topnews3_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="topnews3_source" name="topnews3_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="topnews3_ital" name="topnews3_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="topnews3_url" name="topnews3_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 4:</legend>
					<textarea id="topnews4_dek" name="topnews4_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="topnews4_source" name="topnews4_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="topnews4_ital" name="topnews4_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="topnews4_url" name="topnews4_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 5:</legend>
					<textarea id="topnews5_dek" name="topnews5_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="topnews5_source" name="topnews5_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="topnews5_ital" name="topnews5_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="topnews5_url" name="topnews5_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
			</fieldset>
		</div>
	</div>
	<div class="columns">
		<div id="items_right">
			<fieldset class="sections">
				<legend>SECOND MAIN ARTICLE</legend>
				<p>Headline: <input type="text" id="trump_main2_hed" name="trump_main2_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value)" spellcheck="true" /></p>
				<p>Url: <input type="text" id="trump_main2_url" name="trump_main2_url" size="50" onblur="this.value=fixURL(this.value)" /></p>
				<p>Image: <input type="text" id="trump_main2_img" name="trump_main2_img" size="50" onblur="this.value=fixURL(this.value)" /></p>
				<p class="dek_sect">Dek:</p>
				<textarea rows="15" cols="45" id="trump_main2_dek" name="trump_main2_dek"></textarea>
				<fieldset class="sources" style="float:left;width:50%;clear:both;">
					<legend>Source name</legend>
					<input type="text" id="trump_main2_source" name="trump_main2_source" style="width:95%;" onblur="checkHedDate()">
				</fieldset>
				<fieldset class="sources" style="float:left;width:25%;">
					<legend>Italicize source?</legend>
					<input type="checkbox" id="trump_main2_ital" name="trump_main2_ital" style="float:left;">
				</fieldset>
			</fieldset>
			
			<fieldset class="sections">
				<legend><input type="text" id="wors_title" name="wors_title" value="What Others are Saying" /></legend>
				<fieldset class="sub_sections">
					<legend>Headline 1:</legend>
					<textarea id="wors1_dek" name="wors1_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="wors1_source" name="wors1_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="wors1_ital" name="wors1_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="wors1_url" name="wors1_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 2:</legend>
					<textarea id="wors2_dek" name="wors2_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="wors2_source" name="wors2_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="wors2_ital" name="wors2_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="wors2_url" name="wors2_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 3:</legend>
					<textarea id="wors3_dek" name="wors3_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="wors3_source" name="wors3_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="wors3_ital" name="wors3_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="wors3_url" name="wors3_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 4:</legend>
					<textarea id="wors4_dek" name="wors4_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="wors4_source" name="wors4_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="wors4_ital" name="wors4_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="wors4_url" name="wors4_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
			</fieldset>
		</div>
	</div>
</div>
TRUMP;
	
return $trumpocracy;
}

function recharge() {
	$recharge = <<<RECHARGE
<div class="head_types">
	<div class="columns">
		<div id="items_left">
			<fieldset class="sections">
				<legend>MAIN ARTICLE</legend>
				<p>Headline: <input type="text" id="recharge_main_hed" name="recharge_main_hed" size="50" maxlength="255" onblur="this.value=cleanstring(this.value);" spellcheck="true" /></p>
				<p>Url: <input type="text" id="recharge_main_url" name="recharge_main_url" size="50" onblur="this.value=fixURL(this.value)" /></p>
				<p>Image url: <input type="text" id="recharge_main_img" name="recharge_main_img" size="50" /></p>
				<p class="dek_sect">Dek:</p>
				<textarea rows="15" cols="45" id="recharge_main_dek" name="recharge_main_dek"></textarea>
				<fieldset class="sources" style="float:left;width:50%;clear:both;">
					<legend>Source name</legend>
					<input type="text" id="recharge_main_source" name="recharge_main_source" style="width:95%;" onblur="checkHedDate()">
				</fieldset>
				<fieldset class="sources" style="float:left;width:25%;">
					<legend>Italicize source?</legend>
					<input type="checkbox" id="recharge_main_ital" name="recharge_main_ital" style="float:left;">
				</fieldset>
		</fieldset>

		<fieldset class="sections">
				<legend>RECHARGE ARTICLES (Above Membership slot)</legend>
				<!--<fieldset class="sub_sections">
					<legend>Recharge Intro Language</legend>
					<textarea id="recharge_intro_dek" name="recharge_intro_dek" rows="10" cols="45"></textarea>
				</fieldset>-->
				<fieldset class="sub_sections">
					<legend>Headline 1:</legend>
					<textarea id="recharge1_dek" name="recharge1_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="recharge1_source" name="recharge1_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="recharge1_ital" name="recharge1_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="recharge1_url" name="recharge1_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 2:</legend>
					<textarea id="recharge2_dek" name="recharge2_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="recharge2_source" name="recharge2_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="recharge2_ital" name="recharge2_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="recharge2_url" name="recharge2_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
			</fieldset>
		</div>
	</div>
	<div class="columns">
		<div id="items_right">
			<fieldset class="sections">
				<legend>RECHARGE ARTICLES (Below Membership slot)</legend>
				<fieldset class="sub_sections">
					<legend>Headline 3:</legend>
					<textarea id="recharge3_dek" name="recharge3_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="recharge3_source" name="recharge3_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="recharge3_ital" name="recharge3_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="recharge3_url" name="recharge3_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 4:</legend>
					<textarea id="recharge4_dek" name="recharge4_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="recharge4_source" name="recharge4_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="recharge4_ital" name="recharge4_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="recharge4_url" name="recharge4_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Headline 5:</legend>
					<textarea id="recharge5_dek" name="recharge5_dek" rows="15" cols="45"></textarea>
					<fieldset class="sources" style="float:left;width:50%;clear:both;">
						<legend>Source name</legend>
						<input type="text" id="recharge5_source" name="recharge5_source" style="float:left;">
					</fieldset>
					<fieldset class="sources" style="float:left;width:25%;">
						<legend>Italicise source?</legend> <input type="checkbox" id="recharge5_ital" name="recharge5_ital" style="float:left;">
					</fieldset>
					<fieldset class="sources">
						<legend>Url</legend>
						<input type="text" id="recharge5_url" name="recharge5_url" onblur="this.value=fixURL(this.value)" style="float:left;" size="50">
					</fieldset>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Recharge sign off:</legend>
					<textarea id="recharge_sign_off_dek" name="recharge_sign_off_dek" rows="15" cols="45"></textarea>
				</fieldset>

				<fieldset class="sub_sections">
					<legend>Bottom image:</legend>
					<textarea id="recharge_image_dek" name="recharge_image_dek" rows="15" cols="45"></textarea>
				</fieldset>
				
				<fieldset class="sub_sections">
					<legend>Image credits:</legend>
					<textarea id="recharge_image_credits" name="recharge_image_credits" rows="15" cols="45"></textarea>
				</fieldset>
			</fieldset>
		</div>
	</div>
</div>
RECHARGE;
	
return $recharge;
}
?>