<?php
header("Content-Type: text/html;charset=UTF-8");
//for error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);
/* -------------------------- */

/* include files */
// for db
/* database credentials are located in the credentials.inc file */
include "incs/credentials.inc";
/*for the CSS to be injected into the HTML file (PHP)
 All inline CSS is in this file
 */
include "styles_includes.php";
/* end include section */

/* file path variable for writing out html file */
$long_path = getcwd() . "/";

/* check preview section */
$close_btn = "";
$db_run = false;
if(isset($_REQUEST['preview']) && $_REQUEST['preview'] === "true") {
	//preview mode, but save file as well
	$close_btn = "<div style=\"margin:0 auto;width:100px;padding:10px 20px;\"><input type=\"button\" value=\"close preview\" onclick=\"javascript:window.close();\" /></div>";
	$relocate_me = "";
}
else {
	//run db queries
	$close_btn = "";
	$db_run = true;
	$relocate_me = "<script type=\"text/javascript\">location.href='./'</script>";
}
/* end check preview section */

// get headlines type, the date, and subject line
$headlines_type = $_REQUEST['hed_type'];
$headlines_date = $_REQUEST['date_today'];
$subject_line = $_REQUEST['subject_line'];

/* -----------------ads section-------------------- */
$timestamp = time();

//pixel tracker section
if(isset($_REQUEST["pixel_tracker"]) && $_REQUEST["pixel_tracker"] != "") {
	$pixel_tracker = trim($_REQUEST["pixel_tracker"]);
}
else {
	$pixel_tracker = "";
}

if(isset($_REQUEST["pixel_tracker2"]) && $_REQUEST["pixel_tracker2"] != "") {
	$pixel_tracker2 = trim($_REQUEST["pixel_tracker2"]);
}
else {
	$pixel_tracker2 = "";
}
//end pixel tracker section
//advertiser name billboard
if(isset($_REQUEST['advertiser_name']) && $_REQUEST['advertiser_name'] != null) {
	$advertiser_name = $_REQUEST['advertiser_name'];
}
else {
	$advertiser_name = "Live Intent";
}
//advertiser name banner
if(isset($_REQUEST['advertiser_name2']) && $_REQUEST['advertiser_name2'] != null) {
	$advertiser_name2 = $_REQUEST['advertiser_name2'];
}
else {
	$advertiser_name2 = "Live Intent";
}

//lift-note section
$lift_note = "";
if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] !== null && $_REQUEST['lift_note'] !== "") {
	$lift_note_temp = trim($_REQUEST['lift_note']);
	$lift_note = trim($_REQUEST['lift_note']);
}

//include membership ad templates
include "incs/membership_ads.inc";

//default ads code
include "incs/default_ads.inc";

//billboard (meaning 300x250 ads for some newsletters, 540x180 or 600x200 for others)
if ((isset($_REQUEST['billboard_url']) && $_REQUEST['billboard_url'] != null) || (isset($_REQUEST['billboard_img']) && $_REQUEST['billboard_img'] != "")) {
	$billboard_url = $_REQUEST['billboard_url'];
	$billboard_image = $_REQUEST['billboard_img'];
	//insert proper size for specific newsletters
	if($headlines_type === "food_for_thought_redesign") {
		$billboard_ad = "<div style=\"margin-top:10px;margin-bottom:20px;width:100% !important;\"><a href=\"$billboard_url\" name=\"Top Ad - $advertiser_name\"><img id=\"bill_a\" src=\"$billboard_image\" style=\"width:540px;border: none;\" alt=\"$advertiser_name\" width=\"540\" border=\"0\" /></a>$pixel_tracker</div>\n";
	}
	elseif ($headlines_type === "trumpocracy" || $headlines_type === "recharge") {
		$billboard_ad = "<div style=\"margin-top:10px;margin-bottom:0;width:100% !important;text-align:center;\"><a href=\"$billboard_url\" name=\"Top Ad - $advertiser_name\"><img id=\"bill_a\" src=\"$billboard_image\" style=\"width:540px;border: none;\" alt=\"$advertiser_name\" width=\"540\" border=\"0\" /></a>$pixel_tracker</div>\n";
	}
	else {//default size ads
		$billboard_ad = "<div style=\"margin-top:7px;width:100% !important;\"><a href=\"$billboard_url\" name=\"Bottom Ad - $advertiser_name\"><img id=\"bill_a\" src=\"$billboard_image\" style=\"width:300px;height:auto;border: none;\" alt=\"$advertiser_name\" width=\"300\" height=\"250\" border=\"0\" /></a>$pixel_tracker</div>\n";
	}
}
else {
	//$billboard_url = $house_bill[$randbill_num][1];
	$liveintent_billboard = true;
	$billboard_url = null;
	$billboard_image = null;
	switch($headlines_type) {
		case "econundrums_new":
			$billboard_ad = "\n$econundrums_billboard\n";
			break;
		case "in_the_mix_new":
			$billboard_ad = "\n$inthemix_billboard\n";
			break;
		case "political_mojo_new":
			$billboard_ad = "\n$politicalmojo_billboard\n";
			break;
		case "food_for_thought_redesign":
			$billboard_ad = "\n$fft_redesign_billboard1\n";
			break;
		case "trumpocracy":
			$billboard_ad = "\n$trump_billboard1\n";
			break;
		case "breaking_news":
			$billboard_ad = "\n$breakingnews_billboard1\n";
			break;
		case "recharge":
			$billboard_ad = "\n$recharge_billboard1\n";
			break;
		default:
			break;
	}
}
//bottom ad slot if used by newsletter
if ((isset($_REQUEST['billboard_url2']) && $_REQUEST['billboard_url2'] != null) || (isset($_REQUEST['billboard_img2']) && $_REQUEST['billboard_img2'] != "")) {
	$billboard_url2 = $_REQUEST['billboard_url2'];
	$billboard_image2 = $_REQUEST['billboard_img2'];
	if($headlines_type == "food_for_thought_redesign") {
		$billboard_ad2 = "<div style=\"margin-top: 10px;margin-bottom:20px;width:100%;\"><a href=\"$billboard_url2\" name=\"Top Ad - $advertiser_name2\"><img id=\"bill_a\" src=\"$billboard_image2\" style=\"width:540px;border: none !important;\" alt=\"$advertiser_name2\" width=\"540\" border=\"0\" /></a>$pixel_tracker2</div>\n";
	}
	else {
		$billboard_ad2 = "<div style=\"margin-top:7px;width:100%;\"><a href=\"$billboard_url2\" name=\"Bottom Ad - $advertiser_name2\"><img id=\"bill_a\" src=\"$billboard_image2\" style=\"width:300px;border: none;\" alt=\"$advertiser_name2\" width=\"300\" height=\"250\" border=\"0\" /></a>$pixel_tracker2</div>\n";
	}
}
else {
	$liveintent_billboard2 = true;
	$billboard_url2 = null;
	$billboard_image2 = null;
	//list of newsletters that use the bottom ad slot
	switch($headlines_type) {
		case "econundrums_new":
			$billboard_ad2 = "\n$econundrums_billboard2\n";
			break;
		case "in_the_mix_new":
			$billboard_ad2 = "\n$inthemix_billboard2\n";
			break;
		case "political_mojo_new":
			$billboard_ad2 = "\n$politicalmojo_billboard2\n";
			break;
		case "food_for_thought_redesign":
			$billboard_ad2 = "\n$fft_redesign_billboard2\n";
			break;
	}
}
/* --------------------end ad section------------------- */

//get headline date and format human readable
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);
/* ---------------------------------- */

/* section for global items for all headlines */

//allowed html for conertP function -- not used right now
$allowed_html = "<a><br /><br><b><i><em><strong><blockquote><table><span>";
//for the archives, generate full HTML file
$html_title = ucwords($headlines_type);
//replace em dash for subject line display only
$subject_line_display = str_replace("–","&#8212;", $subject_line);
$subject_formatting = "<p style=\"text-align:center;\"><em>Subject line:</em> $subject_line_display</p>\n <!-- start headlines code -->";
//end global items for all headlines

/* headlines template section */
$html_file = "";

print $subject_formatting;

//if preview mode, print out the close button
if(isset($close_btn) && $close_btn != "") {
	print "<br style=\"clear:both;\" />";
	print $close_btn;
}
/*get the correct template for the headlines
get code for the HTML to add to the archives ($html_file)*/

$view_code = "<p style=\"margin:0 auto;width:220px;background-color:#765;border-style: 2px inset #33f;border-radius:4px;text-align:center;padding:10px;font-size:16px;\"><button class=\"arch-btn\" onclick='location.href=\"#get_code\"'>View Code</button> | <button class=\"arch-btn\" onclick='close_window()'>Close preview</button></p>";

//social media buttons and images (not used currently)
include "incs/social_media_images.inc";

//Newsletter identification language and footer section include
include "incs/newsletter_footer_identification.inc";

/*--- Prepare preview and get code page ---*/
$page_name = $headlines_date . " | " . $headlines_type;
$html_headers = sprintf("<!DOCTYPE html>\n<html>\n<head><title>%s</title><meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"><style>.arch-btn {background-color: #331; color: #cff;}</style><script src='../headlines_script.js'></script></head><body>", $page_name);
$html_footers = "</body>\n</html>";

//Call newsletter template, format for view & code retrieval & get correct newsletter information language
switch($headlines_type) {
	case "econundrums_new":
		include "econundrum-template.php";
		$econundrum = trim(cleanChars($econundrum));
		$econundrum_code = htmlspecialchars($econundrum);
		$subj_line_esc = htmlspecialchars(stripslashes(str_replace("â€“", "–", $subject_line)));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$econundrum_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $econundrum . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Econundrums</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "in_the_mix_new":
		include "inthemix-template.php";
		$inthemix = trim(cleanChars($inthemix));
		$inthemix_code = htmlspecialchars($inthemix);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$inthemix_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $inthemix . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>In the Mix</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "political_mojo_new":
		include "politics-template.php";
		$politics = trim(cleanChars($politics));
		$politics_code = htmlspecialchars($politics);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$politics_code</textarea>";
		$html_file = $html_headers . $view_code. $subject_formatting . $politics . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Political MoJo</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "food_for_thought_redesign":
		include "food-redesign-template.php";
		$fft_redesign = trim(cleanChars($fft_redesign));
		$fft_code = htmlspecialchars($fft_redesign);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$fft_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $fft_redesign . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Food for Thought</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "breaking_news":
		include "breaking-news-template.php";
		$breaking_news = trim(cleanChars($breaking_news));
		$bn_code = htmlspecialchars($breaking_news);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$bn_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $breaking_news . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\">This news alert comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "trumpocracy":
		include "trumpocracy-template.php";
		$trumpocracy = trim(cleanChars($trumpocracy));
		$trump_code = htmlspecialchars($trumpocracy);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$trump_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $trumpocracy . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Trumpocracy: The Russia Connection</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	case "recharge":
		include "recharge-template.php";
		$recharge = trim(cleanChars($recharge));
		$recharge_code = htmlspecialchars($recharge);
		$subj_line_esc = htmlspecialchars(stripslashes($subject_line));
		$get_code = "<div id=\"get_code\" style=\"clear:both;width:1024px;margin:10px auto;\"><p>Subject line: <input type=\"text\" size=\"120\" value=\"$subj_line_esc\" /></p><p>Newsletter code:</p><textarea cols=\"100\" rows=\"50\">$recharge_code</textarea>";
		$html_file = $html_headers . $view_code . $subject_formatting . $recharge . $get_code . $html_footers;
		$newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Recharge</em> comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>";
		break;
	default:
		break;
}

//for html file
/* write html archive file to server */
/* list of variables for each section for reference
 1. $econundrum
 2. $inthemix
 3. $politics
 4. $fft_redesign
 5. $breaking_news
 6. $trumpocracy
 7. $recharge
 format for the archive is yyyy-mm-dd-headlinestype.html
 */
//for temp files
$random_var = time();
//get path & format html file for archives and temp files
$complete_path = $long_path . "archives/$headlines_date" . "-$headlines_type" . ".html";
$temp_path = $long_path . "temp/$headlines_date" . "-$headlines_type" . "-" . $random_var . ".html";
/*make sure directory is writeable before you run this piece of code, or it'll generate an error */

$file_handle = fopen($complete_path, "w+") or die("Can't open file");
$file_handle2 = fopen($temp_path, "w+") or die("Can't open file");

fwrite($file_handle, stripslashes($html_file));
fwrite($file_handle2, stripslashes($html_file));
print $relocate_me;
/* end write html file to server section */

/* modify HTML attributes */
//if $html_attrs is array, make sure it's associative and each key holds the attribute value
function modifyHTML($html_code, $html_tag, $html_attrs, $html_value="") {
	if($html_code !== "") {
		$doc = new DOMDocument;
		$doc->loadHTML($html_code);
		$tags = $doc->getElementsByTagName($html_tag);
		foreach($tags as $tag) {
			if(is_array($html_attrs)) {
				foreach($html_attrs as $key => $value) {
					$tag->setAttribute($key, $value);
				}
			}
			else {
				$tag->setAttribute($html_attrs, $html_value);
			}
		}
		$html_code = $doc->saveHTML();
	}
	return $html_code;
}

/* function to clean html output */
function cleanChars($wip) {
	$del_array = Array("/(~‚Äö√†√∂¬¨¬¢)/", "/(‚àö√°¬¨¬Æ¬¨¬®¬¨√Ü~)/","/~(.)(&#160;)(\s)~/","/(‚àö√°¬¨¬Æ¬¨¬®¬¨√Ü‚Äö√†√∂¬¨¬¢)/", "/(~‚Äö√†√∂¬¨¬¢‚Äö√Ñ√∂‚àö√°¬¨¬Æ¬¨¬®¬¨¬©~is)/", "/(~‚Äö√†√∂¬¨¬¢)/", "/(‚àö√°¬¨¬Æ\'\)~)/", "/(~‚Äö√Ñ√∂‚àö√ë‚àö√Ü\?~)/", "/~(\s)(&#160;)(.)~/");
	$wip = preg_replace($del_array, "", $wip);
	//Replace quotes with proper html entities for kindle edition only
	$wip = str_replace("‘", "'", $wip);
	$wip = str_replace("’", "'", $wip);
	$wip = str_replace("”", "\"", $wip);
	$wip = str_replace("“", "\"", $wip);
	$wip = str_replace("—", "&#8212;", $wip);
	$wip = str_replace("ﬁ", "fi", $wip);
	$wip = str_replace("­", "", $wip);
	$wip = str_replace("â€”", "–", $wip);
	$wip = str_replace("…", "...", $wip);
	
	return $wip;
}