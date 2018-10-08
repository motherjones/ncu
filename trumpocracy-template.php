<?php
/* Trumpocracy template */
/* sections variables */
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['trump_main_hed']) && $_REQUEST['trump_main_hed'] != "") {
	$trump_main_hed= trim($_REQUEST['trump_main_hed']);
}
else {
	$trump_main_hed = "";
}

if(isset($_REQUEST['trum_main_url']) && $_REQUEST['trum_main_url'] != "") {
	$trum_main_url = trim($_REQUEST['trum_main_url']);
}
else {
	$trum_main_url = "";
}

if(isset($_REQUEST['trum_main_dek']) && $_REQUEST['trum_main_dek'] != "") {
	$trum_main_dek = trim($_REQUEST['trum_main_dek']);
}
else {
	$trum_main_dek = "";
}

if(isset($_REQUEST['trump_main_img']) && $_REQUEST['trump_main_img'] != "") {
	$trump_main_img = trim($_REQUEST['trump_main_img']);
}
else {
	$trump_main_img = "";
}

if(isset($_REQUEST["trump_main_source"]) && $_REQUEST["trump_main_source"] != "") {
	$trump_main_source = trim($_REQUEST["trump_main_source"]);
}
else {
	$trump_main_source = "";
}

if(isset($_REQUEST["trump_main_ital"])) {
	$trump_main_ital = true;
}
else {
	$trump_main_ital = false;
}

if(isset($_REQUEST['trump_main2_hed']) && $_REQUEST['trump_main2_hed'] != "") {
	$trump_main2_hed = strip_tags(trim($_REQUEST['trump_main2_hed']),$allowed_html);
}
else {
	$trump_main2_hed = "";
}

if(isset($_REQUEST['trump_main2_url']) && $_REQUEST['trump_main2_url'] != "") {
	$trump_main2_url = strip_tags(trim($_REQUEST['trump_main2_url']),$allowed_html);
}
else {
	$trump_main2_url = "";
}

if(isset($_REQUEST['trump_main2_img']) && $_REQUEST['trump_main2_img'] != "") {
	$trump_main2_img = trim($_REQUEST['trump_main2_img']);
}
else {
	$trump_main2_img = "";
}

if(isset($_REQUEST['trump_main2_dek']) && $_REQUEST['trump_main2_dek'] != "") {
	$trump_main2_dek = trim($_REQUEST['trump_main2_dek']);
}
else {
	$trump_main2_dek = "";
}

if(isset($_REQUEST["trump_main2_source"]) && $_REQUEST["trump_main2_source"] != "") {
	$trump_main2_source = trim($_REQUEST["trump_main2_source"]);
}
else {
	$trump_main2_source = "";
}

if(isset($_REQUEST["trump_main2_ital"])) {
	$trump_main2_ital = true;
}
else {
	$trump_main2_ital = false;
}

if(isset($_REQUEST['topnews_title']) && $_REQUEST['topnews_title'] != "") {
	$topnews_title = trim($_REQUEST['topnews_title']);
}
else {
	$topnews_title = "TOP NEWS";
}

if(isset($_REQUEST['topnews1_dek']) && $_REQUEST['topnews1_dek'] != "") {
	$topnews1_dek = trim($_REQUEST['topnews1_dek']);
}
else {
	$topnews1_dek = "";
}

if(isset($_REQUEST["topnews1_source"]) && $_REQUEST["topnews1_source"] != "") {
	$topnews1_source = trim($_REQUEST["topnews1_source"]);
}
else {
	$topnews1_source = "";
}

if(isset($_REQUEST["topnews1_ital"])) {
	$topnews1_ital = true;
}
else {
	$topnews1_ital = false;
}

if(isset($_REQUEST["topnews1_url"]) && $_REQUEST["topnews1_url"] != "") {
	$topnews1_url = trim($_REQUEST["topnews1_url"]);
}
else {
	$topnews1_url = "";
}

if(isset($_REQUEST['topnews2_dek']) && $_REQUEST['topnews2_dek'] != "") {
	$topnews2_dek = trim($_REQUEST['topnews2_dek']);
}
else {
	$topnews2_dek = "";
}

if(isset($_REQUEST["topnews2_source"]) && $_REQUEST["topnews2_source"] != "") {
	$topnews2_source = trim($_REQUEST["topnews2_source"]);
}
else {
	$topnews2_source = "";
}

if(isset($_REQUEST["topnews2_ital"])) {
	$topnews2_ital = true;
}
else {
	$topnews2_ital = false;
}

if(isset($_REQUEST["topnews2_url"]) && $_REQUEST["topnews2_url"] != "") {
	$topnews2_url = trim($_REQUEST["topnews2_url"]);
}
else {
	$topnews2_url = "";
}

if(isset($_REQUEST['topnews3_dek']) && $_REQUEST['topnews3_dek'] != "") {
	$topnews3_dek = trim($_REQUEST['topnews3_dek']);
}
else {
	$topnews3_dek = "";
}

if(isset($_REQUEST["topnews3_source"]) && $_REQUEST["topnews3_source"] != "") {
	$topnews3_source = trim($_REQUEST["topnews3_source"]);
}
else {
	$topnews3_source = "";
}

if(isset($_REQUEST["topnews3_ital"])) {
	$topnews3_ital = true;
}
else {
	$topnews3_ital = false;
}

if(isset($_REQUEST["topnews3_url"]) && $_REQUEST["topnews3_url"] != "") {
	$topnews3_url = trim($_REQUEST["topnews3_url"]);
}
else {
	$topnews3_url = "";
}

if(isset($_REQUEST['topnews4_dek']) && $_REQUEST['topnews4_dek'] != "") {
	$topnews4_dek = trim($_REQUEST['topnews4_dek']);
}
else {
	$topnews4_dek = "";
}

if(isset($_REQUEST["topnews4_source"]) && $_REQUEST["topnews4_source"] != "") {
	$topnews4_source = trim($_REQUEST["topnews4_source"]);
}
else {
	$topnews4_source = "";
}

if(isset($_REQUEST["topnews4_ital"])) {
	$topnews4_ital = true;
}
else {
	$topnews4_ital = false;
}

if(isset($_REQUEST["topnews4_url"]) && $_REQUEST["topnews4_url"] != "") {
	$topnews4_url = trim($_REQUEST["topnews4_url"]);
}
else {
	$topnews4_url = "";
}

if(isset($_REQUEST['topnews5_dek']) && $_REQUEST['topnews5_dek'] != "") {
	$topnews5_dek = trim($_REQUEST['topnews5_dek']);
}
else {
	$topnews5_dek = "";
}

if(isset($_REQUEST["topnews5_source"]) && $_REQUEST["topnews5_source"] != "") {
	$topnews5_source = trim($_REQUEST["topnews5_source"]);
}
else {
	$topnews5_source = "";
}

if(isset($_REQUEST["topnews5_ital"])) {
	$topnews5_ital = true;
}
else {
	$topnews5_ital = false;
}

if(isset($_REQUEST["topnews5_url"]) && $_REQUEST["topnews5_url"] != "") {
	$topnews5_url = trim($_REQUEST["topnews5_url"]);
}
else {
	$topnews5_url = "";
}

if(isset($_REQUEST['wors_title']) && $_REQUEST['wors_title'] != "") {
	$wors_title = trim($_REQUEST['wors_title']);
}
else {
	$wors_title = "WHAT OTHERS ARE SAYING";
}

if(isset($_REQUEST['wors1_dek']) && $_REQUEST['wors1_dek'] != "") {
	$wors1_dek = trim($_REQUEST['wors1_dek']);
}
else {
	$wors1_dek = "";
}

if(isset($_REQUEST["wors1_source"]) && $_REQUEST["wors1_source"] != "") {
	$wors1_source = trim($_REQUEST["wors1_source"]);
}
else {
	$wors1_source = "";
}

if(isset($_REQUEST["wors1_ital"])) {
	$wors1_ital = true;
}
else {
	$wors1_ital = false;
}

if(isset($_REQUEST["wors1_url"]) && $_REQUEST["wors1_url"] != "") {
	$wors1_url = trim($_REQUEST["wors1_url"]);
}
else {
	$wors1_url = "";
}

if(isset($_REQUEST['wors2_dek']) && $_REQUEST['wors2_dek'] != "") {
	$wors2_dek = trim($_REQUEST['wors2_dek']);
}
else {
	$wors2_dek = "";
}

if(isset($_REQUEST["wors2_source"]) && $_REQUEST["wors2_source"] != "") {
	$wors2_source = trim($_REQUEST["wors2_source"]);
}
else {
	$wors2_source = "";
}

if(isset($_REQUEST["wors2_ital"])) {
	$wors2_ital = true;
}
else {
	$wors2_ital = false;
}

if(isset($_REQUEST["wors2_url"]) && $_REQUEST["wors2_url"] != "") {
	$wors2_url = trim($_REQUEST["wors2_url"]);
}
else {
	$wors2_url = "";
}

if(isset($_REQUEST['wors3_dek']) && $_REQUEST['wors3_dek'] != "") {
	$wors3_dek = trim($_REQUEST['wors3_dek']);
}
else {
	$wors3_dek = "";
}

if(isset($_REQUEST["wors3_source"]) && $_REQUEST["wors3_source"] != "") {
	$wors3_source = trim($_REQUEST["wors3_source"]);
}
else {
	$wors3_source = "";
}

if(isset($_REQUEST["wors3_ital"])) {
	$wors3_ital = true;
}
else {
	$wors3_ital = false;
}

if(isset($_REQUEST["wors3_url"]) && $_REQUEST["wors3_url"] != "") {
	$wors3_url = trim($_REQUEST["wors3_url"]);
}
else {
	$wors3_url = "";
}

if(isset($_REQUEST['wors4_dek']) && $_REQUEST['wors4_dek'] != "") {
	$wors4_dek = trim($_REQUEST['wors4_dek']);
}
else {
	$wors4_dek = "";
}

if(isset($_REQUEST["wors4_source"]) && $_REQUEST["wors4_source"] != "") {
	$wors4_source = trim($_REQUEST["wors4_source"]);
}
else {
	$wors4_source = "";
}

if(isset($_REQUEST["wors4_ital"])) {
	$wors4_ital = true;
}
else {
	$wors4_ital = false;
}

if(isset($_REQUEST["wors4_url"]) && $_REQUEST["wors4_url"] != "") {
	$wors4_url = trim($_REQUEST["wors4_url"]);
}
else {
	$wors4_url = "";
}

//Trumpocracy template section
//date formatting
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);

//Main article section
$main_section = "";
$url_style = "color: #ff6900;";
$main_dek_p = "text-align:left;color: #767676;font-family:Georgia, serif;font-size: 16px; line-height: 21px;";

if($trum_main_url !== "" || $trum_main_url !== null) {
	$main_hed = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\"><a href=\"$trum_main_url\" style=\"text-decoration: none;color: #000;\">$trump_main_hed</a></h3>\n";
	$trump_main_source_format = "<a href=\"$trum_main_url\" style=\"color:#ff6900;text-decoration:none;\">$trump_main_source</a>";
}
else {
	$main_hed = "<h3 style=\"Margin: 10px 0;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\">$trump_main_hed</h3>\n";
	$trump_main_source_format = $trump_main_source;
}

if($trump_main_img !== "" || $trump_main_img !== null) {
	$main_img_sec = "<tr>\n\t<td style=\"border-bottom:1px solid #767676;line-height:0;\">\n\t<center><a href=\"$trum_main_url\"><img src=\"$trump_main_img\" style=\"Margin: 0 auto 5px auto;width:100%;max-width: 100%; height: auto;\" width=\"540\" border=\"0\" alt=\"Trumpocracy\" /></a></center>\n\t";
}
else {
	$main_img_sec = "";
}

$trum_main_dek = modifyHTML($trum_main_dek, "p", "style", $main_dek_p);
$trum_main_dek = modifyHTML($trum_main_dek, "a", "style", $url_style);
//add source name & url
$get_last_p = strripos($trum_main_dek, "</p>");
$get_substr = substr($trum_main_dek, 0, $get_last_p);

if(isset($trump_main_source) && $trump_main_source !== "") {	
	if($trump_main_ital) {
		$trum_main_dek_cat = $get_substr . " (<em>$trump_main_source_format</em>)</p>\n";
	}
	else {
		$trum_main_dek_cat = $get_substr . " ($trump_main_source_format)</p>\n";
	}
}
else {
	$trum_main_dek_cat = $trum_main_dek;
}

// "<tr>\n\t<td style=\"border-bottom: 1px solid #767676;\">\n\t"

$main_section = $main_img_sec . $main_hed . "\n\t" . $trum_main_dek_cat . "\n\t</td>\n\t</tr>\n";
//end main article section

//Secondary main article section
$main2_section = "";
$main2_opener = "<tr>\n\t<td style=\"border-bottom: 1px solid #767676;\">\n\t";
$main2_closer = "\n\t</td>\n\t</tr>\n";

$main2_img_sec = "";

if($trump_main2_img !== "") {
	$main2_img_sec = "<a href=\"$trump_main2_url\"><img src=\"$trump_main2_img\" width=\"540\" style=\"max-width:100%;width:100%;\" border=\"0\" /></a>\n";
}
else {
	$main2_img_sec = "";
}

$main2_text_sec = "";
$main2_hed = "";

if($trump_main2_url !== "" || $trump_main2_url !== null) {
	$main2_hed = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\"><a href=\"$trump_main2_url\" style=\"color:#000;text-decoration:none;\">" . $trump_main2_hed . "</a></h3>\n";
}
else {
	$main2_hed = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\">" . $trump_main2_hed . "</h3>\n";
}

$main2_p = "text-align:left;color: #767676;font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$trump_main2_dek = modifyHTML($trump_main2_dek, "p", "style", $main2_p);
$trump_main2_dek = modifyHTML($trump_main2_dek, "a", "style", $url_style);
//add source name & url
$get_last_p = strripos($trump_main2_dek, "</p>");
$get_substr = substr($trump_main2_dek, 0, $get_last_p);

if(isset($trump_main2_source) && $trump_main2_source !== "") {
	if($trump_main2_ital) {
		$trump_main2_dek_cat = $get_substr . " (<em><a href=\"$trump_main2_url\" style=\"text-decoration:none;color:#ff6900;\">$trump_main2_source</a></em>)</p>\n";
	}
	else {
		$trump_main2_dek_cat = $get_substr . " (<a href=\"$trump_main2_url\" style=\"text-decoration:none;color:#ff6900;\">$trump_main2_source</a>)</p>\n";
	}
}
else {
	$trump_main2_dek_cat = $trump_main2_dek;
}

if($trump_main2_hed !== "" || $trump_main2_dek !== "") {
	$main2_text_sec = $main2_hed . $trump_main2_dek_cat;
}
else {
	$main2_text_sec = "";
}

if($main2_img_sec !== "" ||$main2_text_sec !== "") {
	$main2_section = $main2_opener . $main2_img_sec . $main2_text_sec . $main2_closer;
}
else {
	$main2_section = "";
}
//end secondary main article section

//Top News section
$topnews_sec = "";
$topnews_opener = "<tr>\n\t<td style=\"border-bottom: 1px solid #767676;\">\n\t";
$topnews_closer = "</td>\n\t</tr>\n";
$topnews_title_format = "";
$topnews_p_format_dek = "color: #767676; font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$topnews_bold_format_dek = "color: #000 !important;";
$topnews_dek_sec = "";

//format Top News Title
if($topnews_title !== "" || $topnews_title !== null) {
	$topnews_title_format = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">" . $topnews_title . "</p>\n";
}
else {
	$topnews_title_format = "";
}

//Prepare the Top News section stories
if($topnews1_dek !== "" || $topnews2_dek !== "" || $topnews3_dek !== "" || $topnews4_dek !== "" || $topnews5_dek !== "") {
	
	if($topnews1_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$topnews1_dek = modifyHTML($topnews1_dek, "p", "style", $topnews_p_format_dek);
		$topnews1_dek = modifyHTML($topnews1_dek, "strong", "style", $topnews_bold_format_dek);
		$topnews1_dek = modifyHTML($topnews1_dek, "a", "style", $url_style);
		
		//insert source and formatting
		$get_last_p = strripos($topnews1_dek, "</p>");
		$get_substr = substr($topnews1_dek, 0, $get_last_p);
		
		if(isset($topnews1_source) && $topnews1_source !== "") {
			if($topnews1_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$topnews1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews1_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$topnews1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews1_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $topnews1_dek;
		}
		
		$topnews1 = $get_substr;
	}
	else {
		$topnews1 = "";
	}
	
	if($topnews2_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$topnews2_dek = modifyHTML($topnews2_dek, "p", "style", $topnews_p_format_dek);
		$topnews2_dek = modifyHTML($topnews2_dek, "strong", "style", $topnews_bold_format_dek);
		$topnews2_dek = modifyHTML($topnews2_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($topnews2_dek, "</p>");
		$get_substr = substr($topnews2_dek, 0, $get_last_p);
		
		if(isset($topnews2_source) && $topnews2_source !== "") {
			if($topnews2_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$topnews2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews2_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$topnews2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews2_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $topnews2_dek;
		}
		
		$topnews2 = $get_substr;
	}
	else {
		$topnews2 = "";
	}
	
	if($topnews3_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$topnews3_dek = modifyHTML($topnews3_dek, "p", "style", $topnews_p_format_dek);
		$topnews3_dek = modifyHTML($topnews3_dek, "strong", "style", $topnews_bold_format_dek);
		$topnews3_dek = modifyHTML($topnews3_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($topnews3_dek, "</p>");
		$get_substr = substr($topnews3_dek, 0, $get_last_p);
		
		if(isset($topnews3_source) && $topnews3_source !== "") {
			if($topnews3_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$topnews3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews3_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$topnews3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews3_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $topnews3_dek;
		}
		
		$topnews3 = $get_substr;
	}
	else {
		$topnews3 = "";
	}
	
	if($topnews4_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$topnews4_dek = modifyHTML($topnews4_dek, "p", "style", $topnews_p_format_dek);
		$topnews4_dek = modifyHTML($topnews4_dek, "strong", "style", $topnews_bold_format_dek);
		$topnews4_dek = modifyHTML($topnews4_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($topnews4_dek, "</p>");
		$get_substr = substr($topnews4_dek, 0, $get_last_p);
		
		if(isset($topnews4_source) && $topnews4_source !== "") {
			if($topnews4_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$topnews4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews4_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$topnews4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews4_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $topnews4_dek;
		}
		
		$topnews4 = $get_substr;
	}
	else {
		$topnews4 = "";
	}
	
	if($topnews5_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$topnews5_dek = modifyHTML($topnews5_dek, "p", "style", $topnews_p_format_dek);
		$topnews5_dek = modifyHTML($topnews5_dek, "strong", "style", $topnews_bold_format_dek);
		$topnews5_dek = modifyHTML($topnews5_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($topnews5_dek, "</p>");
		$get_substr = substr($topnews5_dek, 0, $get_last_p);
		
		if(isset($topnews5_source) && $topnews5_source !== "") {
			if($topnews5_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$topnews5_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews5_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$topnews5_url\" style=\"text-decoration:none;color: #ff6900;\">" . $topnews5_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $topnews5_dek;
		}
		
		$topnews5 = $get_substr;
	}
	else {
		$topnews5 = "";
	}
	
	$topnews_sec = $topnews_opener . $topnews_title_format . $topnews1 . $topnews2 . $topnews3 . $topnews4 . $topnews5 . $topnews_closer;
	
}
else {
	$topnews_sec = "";
}

//end Top News section

//What Others Are Saying section
$wors_sec = "";
$wors_opener = "<tr>\n\t<td style=\"border-bottom: 1px solid #767676;\">\n\t";
$wors_closer = "</td>\n\t</tr>\n";
$wors_title_format = "";
$wors_p_format_dek = "color: #767676; font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$wors_bold_format_dek = "color: #000 !important;";
$wors_dek_sec = "";

//format Top News Title
if($wors_title !== "" || $wors_title !== null) {
	$wors_title_format = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">" . $wors_title . "</p>\n";
}
else {
	$wors_title_format = "";
}

//Prepare the What Others Are Saying section stories
if($wors1_dek !== "" || $wors2_dek !== "" || $wors3_dek !== "" || $wors4_dek !== "") {
	
	if($wors1_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$wors1_dek = modifyHTML($wors1_dek, "p", "style", $wors_p_format_dek);
		$wors1_dek = modifyHTML($wors1_dek, "strong", "style", $wors_bold_format_dek);
		$wors1_dek = modifyHTML($wors1_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($wors1_dek, "</p>");
		$get_substr = substr($wors1_dek, 0, $get_last_p);
		
		if(isset($wors1_source) && $wors1_source !== "") {
			if($wors1_ital) {
				$get_substr = $get_substr . " &#8212; <em><a href=\"$wors1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors1_source . "</a></em></p>\n";
			}
			else {
				$get_substr = $get_substr . " &#8212; <a href=\"$wors1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors1_source . "</a></p>\n";
			}
		}
		else {
			$get_substr = $wors1_dek;
		}
		
		$wors1 = $get_substr;
	}
	else {
		$wors1 = "";
	}
	
	if($wors2_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$wors2_dek = modifyHTML($wors2_dek, "p", "style", $wors_p_format_dek);
		$wors2_dek = modifyHTML($wors2_dek, "strong", "style", $wors_bold_format_dek);
		$wors2_dek = modifyHTML($wors2_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($wors2_dek, "</p>");
		$get_substr = substr($wors2_dek, 0, $get_last_p);
		
		if(isset($wors2_source) && $wors2_source !== "") {
			if($wors2_ital) {
				$get_substr = $get_substr . " &#8212; <em><a href=\"$wors2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors2_source . "</a></em></p>\n";
			}
			else {
				$get_substr = $get_substr . " &#8212; <a href=\"$wors2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors2_source . "</a></p>\n";
			}
		}
		else {
			$get_substr = $wors2_dek;
		}
		
		$wors2 = $get_substr;
	}
	else {
		$wors2 = "";
	}
	
	if($wors3_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$wors3_dek = modifyHTML($wors3_dek, "p", "style", $wors_p_format_dek);
		$wors3_dek = modifyHTML($wors3_dek, "strong", "style", $wors_bold_format_dek);
		$wors3_dek = modifyHTML($wors3_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($wors3_dek, "</p>");
		$get_substr = substr($wors3_dek, 0, $get_last_p);
		
		if(isset($wors3_source) && $wors3_source !== "") {
			if($wors3_ital) {
				$get_substr = $get_substr . " &#8212; <em><a href=\"$wors3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors3_source . "</a></em></p>\n";
			}
			else {
				$get_substr = $get_substr . " &#8212; <a href=\"$wors3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors3_source . "</a></p>\n";
			}
		}
		else {
			$get_substr = $wors3_dek;
		}
		
		$wors3 = $get_substr;
	}
	else {
		$wors3 = "";
	}
	
	if($wors4_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		//replace html entities
		$wors4_dek = modifyHTML($wors4_dek, "p", "style", $wors_p_format_dek);
		$wors4_dek = modifyHTML($wors4_dek, "strong", "style", $wors_bold_format_dek);
		$wors4_dek = modifyHTML($wors4_dek, "a", "style", $url_style);
		//insert source and formatting
		$get_last_p = strripos($wors4_dek, "</p>");
		$get_substr = substr($wors4_dek, 0, $get_last_p);
		
		if(isset($wors4_source) && $wors4_source !== "") {
			if($wors4_ital) {
				$get_substr = $get_substr . " &#8212; <em><a href=\"$wors4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors4_source . "</a></em></p>\n";
			}
			else {
				$get_substr = $get_substr . " &#8212; <a href=\"$wors4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $wors4_source . "</a></p>\n";
			}
		}
		else {
			$get_substr = $wors4_dek;
		}
		
		$wors4 = $get_substr;
	}
	else {
		$wors4 = "";
	}
	
	$wors_sec = $wors_opener . $wors_title_format . $wors1 . $wors2 . $wors3 . $wors4 . $wors_closer;
	
}
else {
	$wors_sec = "";
}
//end What Others Are Saying section

//LiveIntent section
//safe RBT
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
	$safe_rbt = <<<SAFERBT
<table cellpadding="0" cellspacing="0" border="0" width="40" height="6"><tbody><tr><td><img src="http://li.motherjones.com/imp?s=124867900&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867901&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867902&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867903&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867904&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867905&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867906&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867907&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867908&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867909&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867910&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867911&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867912&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867913&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867914&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867915&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867916&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867917&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867918&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867919&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td></tr></tbody></table>
SAFERBT;
}
//end LiveIntent section

$anchor_subject_line = "Trumpocracy";

$trumpocracy = <<<TRUMPOCRACY
<div>
$trump_mobile
  <table width="100%" class="wrapper" align="center" style="Margin:0 auto;padding:0;background-color:#ccc;" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <!--[if (gte mso 9)|(IE)]>
        <table width="620" align="center" border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;padding:0;background-color: #fff;border-spacing:0;">
          <tr>
            <td>
        <![endif]-->
        <table class="layout" align="center" cellpadding="0" cellspacing="0" width="620" style="Margin:0 auto;background-color: #fff;max-width:620px;">
$lift_note_section
          <tr>
            <td align="center" style="line-height:0;margin: 0;padding:0;">
              <a href="https://www.motherjones.com"><img src="http://assets.motherjones.com/newsletters/images/russian_connection_banner-061217.png" width="620" style="Margin:0 auto;width:100%;max-width:100%;height:auto;line-height:0;" alt="Trumpocracy" /></a>
            </td>
          </tr>
          <tr>
            <td>
              <table class="spacing" align="center" width="580" cellpadding="0" cellspacing="20" style="max-width:580px;margin:0 auto;">
                <tr>
                  <td align="right">
                    <p style="Margin: 0;color: #c8c8c8 !important;text-decoration: none !important;text-align:right;font-size: 12px;line-height:16px;font-family:Georgia, serif;" id="date_line">$get_date</p>
                  </td>
                </tr>
                $main_section
                $main2_section
                <tr>
                  <td style="border-bottom: 1px solid #767676;">
                    $billboard_ad
                    <br />
                    <!--[if (gte mso 9)|(IE)]>
                    <br />
                    <![endif]-->
                  </td>
                </tr>
                $topnews_sec
				<tr>
					<td style="border-bottom: 1px solid #767676;" align="center">
						<p style="margin:0 0 15px 0;max-width: 90%;color: #000;font-family:Georgia, serif;font-weight:bold;text-align:center;font-size: 16px; line-height: 21px;">Take a deep dive</p>
						<p style="margin:0 0 20px 0;max-width: 90%;color: #767676;font-family:Georgia, serif;text-align:center;font-size: 16px; line-height: 21px;"><em>The Russian Connection</em> is compiled by Bill Buzenberg and Denise Clifton, who ran the election season blog <em>PutinTrump.org</em>. Visit their <a href="http://putintrump.org/" style="color: #ff6900;">archive here</a>.</p>
					</td>
                </tr>
                <tr>
                  <td style="border-bottom: 1px solid #767676;" valign="top">
                    <!--[if (gte mso 9)|(IE)]>
                    <br />
                    <![endif]-->
                    <table align="center" width="100%" style="width:100%;max-width:100%;" cellpadding="5" cellspacing="0" border="0">
                      <tr>
                        <td style="background-color: #e8e8e8;">
                          $membership_slot
                        </td>
                      </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
                    <br /><br />
                    <![endif]-->
                    <br />
                  </td>
                </tr>
                $wors_sec
                <tr>
                  <td style="border-bottom:1px solid #767676;" align="center">
                    $small_sub_ad
                    <br />
                    <!--[if (gte mso 9)|(IE)]>
                    <br />
                    <![endif]-->
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    $newsletter_info
                  </td>
                </tr>
                <tr>
                  <td>
                    <!--[if (gte mso 9)|(IE)]>
                    <br /><br />
                    <![endif]-->
                    $trumpocracy_footer
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
          	<td>
          		$safe_rbt
          	</td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
            </td>
          </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
  </table>
</div>
TRUMPOCRACY;

//print out HTML template
print $trumpocracy;

/* db section */
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
//add slashes for the db and strip out disallowed html tags
$trump_main_hed = strip_tags(addslashes($trump_main_hed), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$trum_main_url = addslashes($trum_main_url);
$trum_main_dek = strip_tags(addslashes($trum_main_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$trump_main_img = addslashes($trump_main_img);
$trump_main_source = strip_tags(addslashes($trump_main_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$trump_main2_hed = strip_tags(addslashes($trump_main2_hed), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$trump_main2_url = addslashes($trump_main2_url);
$trump_main2_img = addslashes($trump_main2_img);
$trump_main2_dek = strip_tags(addslashes($trump_main2_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$trump_main2_source = strip_tags(addslashes($trump_main2_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews_title = strip_tags(addslashes($topnews_title), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews1_dek = strip_tags(addslashes($topnews1_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews1_source = strip_tags(addslashes($topnews1_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews1_url = addslashes($topnews1_url);
$topnews2_source = strip_tags(addslashes($topnews2_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews2_dek = strip_tags(addslashes($topnews2_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews2_url = addslashes($topnews2_url);
$topnews3_dek = strip_tags(addslashes($topnews3_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews3_source = strip_tags(addslashes($topnews3_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews3_url = addslashes($topnews3_url);
$topnews4_dek = strip_tags(addslashes($topnews4_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews4_source = strip_tags(addslashes($topnews4_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews4_url = addslashes($topnews4_url);
$topnews5_dek = strip_tags(addslashes($topnews5_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews5_source = strip_tags(addslashes($topnews5_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$topnews5_url = addslashes($topnews5_url);
$wors_title = strip_tags(addslashes($wors_title), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors1_dek = strip_tags(addslashes($wors1_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors1_source = strip_tags(addslashes($wors1_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors1_url = addslashes($wors1_url);
$wors2_dek = strip_tags(addslashes($wors2_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors2_source = strip_tags(addslashes($wors2_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors2_url = addslashes($wors2_url);
$wors3_dek = strip_tags(addslashes($wors3_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors3_source = strip_tags(addslashes($wors3_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors3_url = addslashes($wors3_url);
$wors4_dek = strip_tags(addslashes($wors4_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors4_source = strip_tags(addslashes($wors4_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$wors4_url = addslashes($wors4_url);
$subject_line = strip_tags(addslashes(str_replace("â€”","–", $subject_line)), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$sub_url = addslashes($sub_url);
$sub_image = addslashes($sub_image);
$sub_text = strip_tags(addslashes($sub_text), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$sub_code = strip_tags(addslashes($sub_code), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$membership_slot = strip_tags(addslashes($membership_slot), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$billboard_url = addslashes($billboard_url);
$billboard_image = addslashes($billboard_image);
$advertiser_name = strip_tags(addslashes($advertiser_name), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$ad_name = strip_tags(addslashes($advertiser_name), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$pixel_tracker = addslashes($pixel_tracker);
$pixel_tracker2 = addslashes($pixel_tracker2);

//check to see if data exists in db
$check_existing = "SELECT id, hed_date FROM trumpocracy WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
	$run_qry = "UPDATE trumpocracy
	SET hed_date = '$headlines_date',
	trump_main_hed = '$trump_main_hed',
	trum_main_url = '$trum_main_url',
	trum_main_dek = '$trum_main_dek',
	trump_main_img = '$trump_main_img',
	trump_main_source = '$trump_main_source',
	trump_main_ital = '$trump_main_ital',
	trump_main2_hed = '$trump_main2_hed',
	trump_main2_url = '$trump_main2_url',
	trump_main2_img = '$trump_main2_img',
	trump_main2_dek = '$trump_main2_dek',
	trump_main2_source = '$trump_main2_source',
	trump_main2_ital = '$trump_main2_ital',
	topnews_title = '$topnews_title',
	topnews1_dek = '$topnews1_dek',
	topnews1_source = '$topnews1_source',
	topnews1_ital = '$topnews1_ital',
	topnews1_url = '$topnews1_url',
	topnews2_dek = '$topnews2_dek',
	topnews2_source = '$topnews2_source',
	topnews2_ital = '$topnews2_ital',
	topnews2_url = '$topnews2_url',
	topnews3_dek = '$topnews3_dek',
	topnews3_source = '$topnews3_source',
	topnews3_ital = '$topnews3_ital',
	topnews3_url = '$topnews3_url',
	topnews4_dek = '$topnews4_dek',
	topnews4_source = '$topnews4_source',
	topnews4_ital = '$topnews4_ital',
	topnews4_url = '$topnews4_url',
	topnews5_dek = '$topnews5_dek',
	topnews5_source = '$topnews5_source',
	topnews5_ital = '$topnews5_ital',
	topnews5_url = '$topnews5_url',
	wors_title = '$wors_title',
	wors1_dek = '$wors1_dek',
	wors1_source = '$wors1_source',
	wors1_ital = '$wors1_ital',
	wors1_url = '$wors1_url',
	wors2_dek = '$wors2_dek',
	wors2_source = '$wors2_source',
	wors2_ital = '$wors2_ital',
	wors2_url = '$wors2_url',
	wors3_dek = '$wors3_dek',
	wors3_source = '$wors3_source',
	wors3_ital = '$wors3_ital',
	wors3_url = '$wors3_url',
	wors4_dek = '$wors4_dek',
	wors4_source = '$wors4_source',
	wors4_ital = '$wors4_ital',
	wors4_url = '$wors4_url',
	subject_line = '$subject_line',
	ad_name = '$advertiser_name',
	ad_billboard = '$billboard_image',
	ad_link_bill = '$billboard_url',
	sub_url = '$sub_url',
	sub_image = '$sub_image',
	sub_text = '$sub_text',
	sub_code = '$sub_code',
	membership_slot = '$membership_slot',
	lift_note = '$lift_note',
	pixel_tracker = '$pixel_tracker',
	pixel_tracker2 = '$pixel_tracker2'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO trumpocracy(hed_date,trump_main_hed,trum_main_url,trum_main_dek,trump_main_img,trump_main_source,trump_main_ital,trump_main2_hed,trump_main2_url,trump_main2_img,trump_main2_dek,trump_main2_source,trump_main2_ital,topnews_title,topnews1_dek,topnews1_source,topnews1_ital,topnews1_url,topnews2_dek,topnews2_source,topnews2_ital,topnews2_url,topnews3_dek,topnews3_source,topnews3_ital,topnews3_url,topnews4_dek,topnews4_source,topnews4_ital,topnews4_url,topnews5_dek,topnews5_source,topnews5_ital,topnews5_url,wors_title,wors1_dek,wors1_source,wors1_ital,wors1_url,wors2_dek,wors2_source,wors2_ital,wors2_url,wors3_dek,wors3_source,wors3_ital,wors3_url,wors4_dek,wors4_source,wors4_ital,wors4_url,subject_line,ad_name,ad_billboard,ad_link_bill,ad_name2,ad_link_banner,ad_banner,sub_url,sub_image,sub_text,sub_code,membership_slot,lift_note,pixel_tracker,pixel_tracker2)
	VALUES('$headlines_date',
	'$trump_main_hed',
	'$trum_main_url',
	'$trum_main_dek',
	'$trump_main_img',
	'$trump_main_source',
	'$trump_main_ital',
	'$trump_main2_hed',
	'$trump_main2_url',
	'$trump_main2_img',
	'$trump_main2_dek',
	'$trump_main2_source',
	'$trump_main2_ital',
	'$topnews_title',
	'$topnews1_dek',
	'$topnews1_source',
	'$topnews1_ital',
	'$topnews1_url',
	'$topnews2_dek',
	'$topnews2_source',
	'$topnews2_ital',
	'$topnews2_url',
	'$topnews3_dek',
	'$topnews3_source',
	'$topnews3_ital',
	'$topnews3_url',
	'$topnews4_dek',
	'$topnews4_source',
	'$topnews4_ital',
	'$topnews4_url',
	'$topnews5_dek',
	'$topnews5_source',
	'$topnews5_ital',
	'$topnews5_url',
	'$wors_title',
	'$wors1_dek',
	'$wors1_source',
	'$wors1_ital',
	'$wors1_url',
	'$wors2_dek',
	'$wors2_source',
	'$wors2_ital',
	'$wors2_url',
	'$wors3_dek',
	'$wors3_source',
	'$wors3_ital',
	'$wors3_url',
	'$wors4_dek',
	'$wors4_source',
	'$wors4_ital',
	'$wors4_url',
	'$subject_line',
	'$advertiser_name',
	'$billboard_image',
	'$billboard_url',
	'$advertiser_name2',
	'$billboard_url2',
	'$billboard_image2',
	'$sub_url',
	'$sub_image',
	'$sub_text',
	'$sub_code',
	'$membership_slot',
	'$lift_note',
	'$pixel_tracker',
	'$pixel_tracker2')";
}
//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>