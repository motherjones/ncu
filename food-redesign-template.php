<?php
/* food for thought redesign template */
/* sections variables */
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['fft_main_hed']) && $_REQUEST['fft_main_hed'] != "") {
	$fft_main_hed = trim($_REQUEST['fft_main_hed']);
}
else {
	$fft_main_hed = "";
}

if(isset($_REQUEST['fft_main_hed_url']) && $_REQUEST['fft_main_hed_url'] != "") {
	$fft_main_hed_url = trim($_REQUEST['fft_main_hed_url']);
}
else {
	$fft_main_hed_url = "";
}

if(isset($_REQUEST['fft_main_img']) && $_REQUEST['fft_main_img'] != "") {
	$fft_main_img = trim($_REQUEST['fft_main_img']);
}
else {
	$fft_main_img = "";
}

if(isset($_REQUEST['fft_article_1']) && $_REQUEST['fft_article_1'] != "") {
	$fft_article_1 = strip_tags(trim($_REQUEST['fft_article_1']),$allowed_html);
}
else {
	$fft_article_1 = "";
}

if(isset($_REQUEST['fft_article_2']) && $_REQUEST['fft_article_2'] != "") {
	$fft_article_2 = strip_tags(trim($_REQUEST['fft_article_2']),$allowed_html);
}
else {
	$fft_article_2 = "";
}

if(isset($_REQUEST['fft_article_3']) && $_REQUEST['fft_article_3'] != "") {
	$fft_article_3 = trim($_REQUEST['fft_article_3']);
}
else {
	$fft_article_3 = "";
}

if(isset($_REQUEST['fft_article_4']) && $_REQUEST['fft_article_4'] != "") {
	$fft_article_4 = trim($_REQUEST['fft_article_4']);
}
else {
	$fft_article_4 = "";
}

if(isset($_REQUEST['fft_article_5']) && $_REQUEST['fft_article_5'] != "") {
	$fft_article_5 = trim($_REQUEST['fft_article_5']);
}
else {
	$fft_article_5 = "";
}

if(isset($_REQUEST['fft_article_6']) && $_REQUEST['fft_article_6'] != "") {
	$fft_article_6 = trim($_REQUEST['fft_article_6']);
}
else {
	$fft_article_6 = "";
}

if(isset($_REQUEST['snack_box']) && $_REQUEST['snack_box'] != "") {
	$snack_box = trim($_REQUEST['snack_box']);
}
else {
	$snack_box = "One Great Tidbit";
}

if(isset($_REQUEST['fft_snack_box']) && $_REQUEST['fft_snack_box'] != "") {
	$fft_snack_box = trim($_REQUEST['fft_snack_box']);
}
else {
	$fft_snack_box = "";
}

if(isset($_REQUEST['fft_sb_image']) && $_REQUEST['fft_sb_image'] != "") {
	$fft_sb_image = trim($_REQUEST['fft_sb_image']);
}
else {
	$fft_sb_image = "";
}

if(isset($_REQUEST['fft_sb_attr']) && $_REQUEST['fft_sb_attr'] != "") {
	$fft_sb_attr = trim($_REQUEST['fft_sb_attr']);
}
else {
	$fft_sb_attr = "";
}

if(isset($_REQUEST['in_our_ears']) && $_REQUEST['in_our_ears'] != "") {
	$in_our_ears = trim($_REQUEST['in_our_ears']);
}
else {
	$in_our_ears = "This Week in Podcasts";
}

if(isset($_REQUEST['fft_ioe_item1']) && $_REQUEST['fft_ioe_item1'] != "") {
	$fft_ioe_item1 = trim($_REQUEST['fft_ioe_item1']);
}
else {
	$fft_ioe_item1 = "";
}

if(isset($_REQUEST['fft_bite_add']) && $_REQUEST['fft_bite_add'] != "") {
	$fft_bite_add = trim($_REQUEST['fft_bite_add']);
}
else {
	$fft_bite_add = "";
}

if(isset($_REQUEST['fft_bite_link']) && $_REQUEST['fft_bite_link'] != "") {
	$fft_bite_link = trim($_REQUEST['fft_bite_link']);
}
else {
	$fft_bite_link = "";
}

if(isset($_REQUEST['fft_ioe_item2']) && $_REQUEST['fft_ioe_item2'] != "") {
	$fft_ioe_item2 = trim($_REQUEST['fft_ioe_item2']);
}
else {
	$fft_ioe_item2 = "";
}

if(isset($_REQUEST['fft_ioe_item3']) && $_REQUEST['fft_ioe_item3'] != "") {
	$fft_ioe_item3 = trim($_REQUEST['fft_ioe_item3']);
}
else {
	$fft_ioe_item3 = "";
}

if(isset($_REQUEST['hidden_kitchen']) && $_REQUEST['hidden_kitchen'] != "") {
	$hidden_kitchen = trim($_REQUEST['hidden_kitchen']);
}
else {
	$hidden_kitchen = "Exclusive for Newsletter Subscribers";
}

if(isset($_REQUEST['fft_hk_leadin']) && $_REQUEST['fft_hk_leadin'] != "") {
	$fft_hk_leadin = trim($_REQUEST['fft_hk_leadin']);
}
else {
	$fft_hk_leadin = "";
}

if(isset($_REQUEST['fft_hidden_kitchen']) && $_REQUEST['fft_hidden_kitchen'] != "") {
	$fft_hidden_kitchen = trim($_REQUEST['fft_hidden_kitchen']);
}
else {
	$fft_hidden_kitchen = "";
}

//sources section
if(isset($_REQUEST["fft_main_source"]) && $_REQUEST["fft_main_source"] != "") {
	$fft_main_source = trim($_REQUEST["fft_main_source"]);
}
else {
	$fft_main_source = "";
}

if(isset($_REQUEST["fft_main_ital"])) {
	$fft_main_ital = true;
}
else {
	$fft_main_ital = false;
}

if(isset($_REQUEST["fft_a1_source"]) && $_REQUEST["fft_a1_source"] != "") {
	$fft_a1_source = trim($_REQUEST["fft_a1_source"]);
}
else {
	$fft_a1_source = "";
}

if(isset($_REQUEST["fft_a1_ital"])) {
	$fft_a1_ital = true;
}
else {
	$fft_a1_ital = false;
}

if(isset($_REQUEST["fft_a1_url"]) && $_REQUEST["fft_a1_url"] != "") {
	$fft_a1_url = trim($_REQUEST["fft_a1_url"]);
}
else {
	$fft_a1_url = "";
}

if(isset($_REQUEST["fft_a2_source"]) && $_REQUEST["fft_a2_source"] != "") {
	$fft_a2_source = trim($_REQUEST["fft_a2_source"]);
}
else {
	$fft_a2_source = "";
}

if(isset($_REQUEST["fft_a2_ital"])) {
	$fft_a2_ital = true;
}
else {
	$fft_a2_ital = false;
}

if(isset($_REQUEST["fft_a2_url"]) && $_REQUEST["fft_a2_url"] != "") {
	$fft_a2_url = trim($_REQUEST["fft_a2_url"]);
}
else {
	$fft_a2_url = "";
}

if(isset($_REQUEST["fft_a3_source"]) && $_REQUEST["fft_a3_source"] != "") {
	$fft_a3_source = trim($_REQUEST["fft_a3_source"]);
}
else {
	$fft_a3_source = "";
}

if(isset($_REQUEST["fft_a3_ital"])) {
	$fft_a3_ital = true;
}
else {
	$fft_a3_ital = false;
}

if(isset($_REQUEST["fft_a3_url"]) && $_REQUEST["fft_a3_url"] != "") {
	$fft_a3_url = trim($_REQUEST["fft_a3_url"]);
}
else {
	$fft_a3_url = "";
}

if(isset($_REQUEST["fft_a4_source"]) && $_REQUEST["fft_a4_source"] != "") {
	$fft_a4_source = trim($_REQUEST["fft_a4_source"]);
}
else {
	$fft_a4_source = "";
}

if(isset($_REQUEST["fft_a4_ital"])) {
	$fft_a4_ital = true;
}
else {
	$fft_a4_ital = false;
}

if(isset($_REQUEST["fft_a4_url"]) && $_REQUEST["fft_a4_url"] != "") {
	$fft_a4_url = trim($_REQUEST["fft_a4_url"]);
}
else {
	$fft_a4_url = "";
}

if(isset($_REQUEST["fft_a5_source"]) && $_REQUEST["fft_a5_source"] != "") {
	$fft_a5_source = trim($_REQUEST["fft_a5_source"]);
}
else {
	$fft_a5_source = "";
}

if(isset($_REQUEST["fft_a5_ital"])) {
	$fft_a5_ital = true;
}
else {
	$fft_a5_ital = false;
}

if(isset($_REQUEST["fft_a5_url"]) && $_REQUEST["fft_a5_url"] != "") {
	$fft_a5_url = trim($_REQUEST["fft_a5_url"]);
}
else {
	$fft_a5_url = "";
}

if(isset($_REQUEST["fft_a6_source"]) && $_REQUEST["fft_a6_source"] != "") {
	$fft_a6_source = trim($_REQUEST["fft_a6_source"]);
}
else {
	$fft_a6_source = "";
}

if(isset($_REQUEST["fft_a6_ital"])) {
	$fft_a6_ital = true;
}
else {
	$fft_a6_ital = false;
}

if(isset($_REQUEST["fft_a6_url"]) && $_REQUEST["fft_a6_url"] != "") {
	$fft_a6_url = trim($_REQUEST["fft_a6_url"]);
}
else {
	$fft_a6_url = "";
}

if(isset($_REQUEST["fft_ioe1_source"]) && $_REQUEST["fft_ioe1_source"] != "") {
	$fft_ioe1_source = trim($_REQUEST["fft_ioe1_source"]);
}
else {
	$fft_ioe1_source = "";
}

if(isset($_REQUEST["fft_ioe1_ital"])) {
	$fft_ioe1_ital = true;
}
else {
	$fft_ioe1_ital = false;
}

if(isset($_REQUEST["fft_ioe1_url"]) && $_REQUEST["fft_ioe1_url"] != "") {
	$fft_ioe1_url = trim($_REQUEST["fft_ioe1_url"]);
}
else {
	$fft_ioe1_url = "";
}

if(isset($_REQUEST["fft_ioe2_source"]) && $_REQUEST["fft_ioe2_source"] != "") {
	$fft_ioe2_source = trim($_REQUEST["fft_ioe2_source"]);
}
else {
	$fft_ioe2_source = "";
}

if(isset($_REQUEST["fft_ioe2_ital"])) {
	$fft_ioe2_ital = true;
}
else {
	$fft_ioe2_ital = false;
}

if(isset($_REQUEST["fft_ioe2_url"]) && $_REQUEST["fft_ioe2_url"] != "") {
	$fft_ioe2_url = trim($_REQUEST["fft_ioe2_url"]);
}
else {
	$fft_ioe2_url = "";
}

if(isset($_REQUEST["fft_ioe3_source"]) && $_REQUEST["fft_ioe3_source"] != "") {
	$fft_ioe3_source = trim($_REQUEST["fft_ioe3_source"]);
}
else {
	$fft_ioe3_source = "";
}

if(isset($_REQUEST["fft_ioe3_ital"])) {
	$fft_ioe3_ital = true;
}
else {
	$fft_ioe3_ital = false;
}

if(isset($_REQUEST["fft_ioe3_url"]) && $_REQUEST["fft_ioe3_url"] != "") {
	$fft_ioe3_url = trim($_REQUEST["fft_ioe3_url"]);
}
else {
	$fft_ioe3_url = "";
}
//end sources section

if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] != "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}

//Food for Thought redesign template section
//date formatting
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);

//Main section
$main_section_header = "<table align=\"left\" cellpadding=\"2\" style=\"margin:10px 0;\"><tr><td align=\"left\"><p class=\"headers_text\" style=\"font-family: 'Arial Black', sans-serif; color: #000;font-size:16px;font-weight: bold;text-transform: uppercase;background-color: #e5e5e5;padding: 3px 12px;text-align:left;\">Top Food News</p></td></tr></table>";
$main_section = "";
$main_title = "";
$main_section_p["class"] = "mobile-format";
$main_section_p["style"] = "margin: 0 0 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; color: #767676; font-size: 18px;";
$lead_in_bold = "font-family: Verdana, sans-serif;font-weight: bold; color: #000 !important;";
$url_style = "color: #ff6900;";

if(isset($fft_main_hed_url) && $fft_main_hed_url !== "") {
	$main_title = "<h3 style=\"margin: 0 0 10px 0; padding: 0; font-family: 'Arial Black', sans-serif; font-weight: bold; color: #000;font-size: 38px;line-height:42px;clear:both;\"><a href=\"$fft_main_hed_url\" style=\"text-decoration: none;color: #000;\">$fft_main_hed</a></h3>";
}
else {
	$main_title = "<h3 style=\"margin: 0 0 10px 0; padding: 0; font-family: 'Arial Black', sans-serif; font-weight: bold; color: #000;font-size: 38px;line-height:42px;clear:both;\">$fft_main_hed</h3>";
}

$fft_article_1_content = "";
$fft_article_2_content = "";
$fft_article_3_content = "";
$fft_article_4_content = "";
$fft_article_5_content = "";
$fft_article_6_content = "";

if(isset($fft_article_1) && $fft_article_1 !== "") {
	$fft_article_1 = modifyHTML($fft_article_1, "p", $main_section_p);
	$fft_article_1 = modifyHTML($fft_article_1, "strong", "style", $lead_in_bold);
	$fft_article_1 = modifyHTML($fft_article_1, "a", "style", $url_style);
	
	//add sources
	$get_last_p = strripos($fft_article_1, "</p>");
	$get_substr = substr($fft_article_1, 0, $get_last_p);
	
	if(isset($fft_a1_source) && $fft_a1_source !== "") {
		if($fft_a1_ital) {
			$fft_article_1_content = $get_substr . " (<em><a href=\"$fft_main_hed_url\" style=\"color:#ff6900;\">" . $fft_a1_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_1_content = $get_substr . " (<a href=\"$fft_main_hed_url\" style=\"color:#ff6900;\">" . $fft_a1_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_1_content = $fft_article_1;
	}
}

if(isset($fft_article_2) && $fft_article_2 !== "") {
	$fft_article_2 = modifyHTML($fft_article_2, "p", $main_section_p);
	$fft_article_2 = modifyHTML($fft_article_2, "strong", "style", $lead_in_bold);
	$fft_article_2 = modifyHTML($fft_article_2, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_article_2, "</p>");
	$get_substr = substr($fft_article_2, 0, $get_last_p);
	
	if(isset($fft_a2_source) && $fft_a2_source !== "") {
		if($fft_a2_ital) {
			$fft_article_2_content = $get_substr . " (<em><a href=\"$fft_a2_url\" style=\"color:#ff6900;\">" . $fft_a2_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_2_content = $get_substr . " (<a href=\"$fft_a2_url\" style=\"color:#ff6900;\">" . $fft_a2_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_2_content = $fft_article_2;
	}
}

if(isset($fft_article_3) && $fft_article_3 !== "") {
	$fft_article_3 = modifyHTML($fft_article_3, "p", $main_section_p);
	$fft_article_3 = modifyHTML($fft_article_3, "strong", "style", $lead_in_bold);
	$fft_article_3 = modifyHTML($fft_article_3, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_article_3, "</p>");
	$get_substr = substr($fft_article_3, 0, $get_last_p);
	
	if(isset($fft_a3_source) && $fft_a3_source !== "") {
		if($fft_a3_ital) {
			$fft_article_3_content = $get_substr . " (<em><a href=\"$fft_a3_url\" style=\"color:#ff6900;\">" . $fft_a3_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_3_content = $get_substr . " (<a href=\"$fft_a3_url\" style=\"color:#ff6900;\">" . $fft_a3_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_3_content = $fft_article_3;
	}
}

if(isset($fft_article_4) && $fft_article_4 !== "") {
	$fft_article_4 = modifyHTML($fft_article_4, "p", $main_section_p);
	$fft_article_4 = modifyHTML($fft_article_4, "strong", "style", $lead_in_bold);
	$fft_article_4 = modifyHTML($fft_article_4, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_article_4, "</p>");
	$get_substr = substr($fft_article_4, 0, $get_last_p);
	
	if(isset($fft_a4_source) && $fft_a4_source !== "") {
		if($fft_a4_ital) {
			$fft_article_4_content = $get_substr . " (<em><a href=\"$fft_a4_url\" style=\"color:#ff6900;\">" . $fft_a4_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_4_content = $get_substr . " (<a href=\"$fft_a4_url\" style=\"color:#ff6900;\">" . $fft_a4_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_4_content = $fft_article_4;
	}
	
}

if(isset($fft_article_5) && $fft_article_5 !== "") {
	$fft_article_5 = modifyHTML($fft_article_5, "p", $main_section_p);
	$fft_article_5 = modifyHTML($fft_article_5, "strong", "style", $lead_in_bold);
	$fft_article_5 = modifyHTML($fft_article_5, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_article_5, "</p>");
	$get_substr = substr($fft_article_5, 0, $get_last_p);
	
	if(isset($fft_a5_source) && $fft_a5_source!== "") {
		if($fft_a5_ital) {
			$fft_article_5_content = $get_substr . " (<em><a href=\"$fft_a5_url\" style=\"color:#ff6900;\">" . $fft_a5_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_5_content = $get_substr . " (<a href=\"$fft_a5_url\" style=\"color:#ff6900;\">" . $fft_a5_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_5_content = $fft_article_5;
	}
}

if(isset($fft_article_6) && $fft_article_6 !== "") {
	$fft_article_6 = modifyHTML($fft_article_6, "p", $main_section_p);
	$fft_article_6 = modifyHTML($fft_article_6, "strong", "style", $lead_in_bold);
	$fft_article_6 = modifyHTML($fft_article_6, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_article_6, "</p>");
	$get_substr = substr($fft_article_6, 0, $get_last_p);
	
	if(isset($fft_a6_source) && $fft_a6_source !== "") {
		if($fft_a6_ital) {
			$fft_article_6_content = $get_substr . " (<em><a href=\"$fft_a6_url\" style=\"color:#ff6900;\">" . $fft_a6_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_6_content = $get_substr . " (<a href=\"$fft_a6_url\" style=\"color:#ff6900;\">" . $fft_a6_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_6_content = $fft_article_6;
	}
}

$main_section = $fft_article_1_content . $fft_article_2_content . $fft_article_3_content . $fft_article_4_content . $fft_article_5_content . $fft_article_6_content;

$ogt_section = "";

if(isset($snack_box) && $snack_box !== "") {
	$sb_p = "<table align=\"left\" cellpadding=\"2\" style=\"margin:10px 0;\"><tr><td><p class=\"headers_text\" style=\"font-family: 'Arial Black', sans-serif; color: #000;font-size:16px;font-weight: bold;text-transform: uppercase;background-color: #e5e5e5;padding: 2px 12px;\">";
	$ogt_section .= $sb_p . $snack_box . "</p></td></tr></table>";
}
else {
	$sb_p = "";
}

$ogt_section .= "<table width=\"500\" align=\"center\" style=\"max-width: 500px !important;margin:0 auto !important;\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n<td>";

if(isset($fft_snack_box) && $fft_snack_box !== "") {
	$snack_box_p["class"] = "mobile-format";
	$snack_box_p["style"] = "margin: 0 0 20px 0; padding: 0; font-family: Verdana, sans-serif; color: #767676;font-size: 18px;";
	$fft_snack_box = modifyHTML($fft_snack_box, "p", $snack_box_p);
	$fft_snack_box = modifyHTML($fft_snack_box, "strong", "style", $lead_in_bold);
	$ogt_section .= $fft_snack_box;
}
else {
	$fft_snack_box = "";
}

if(isset($fft_sb_image) && $fft_sb_image !== "") {
	$image_code = "<img src=\"$fft_sb_image\" alt=\"\" style=\"max-width: 500px; height: auto;margin-bottom: 20px;\" width=\"500\" /><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
	$ogt_section .= $image_code;
}
else {
	$image_code = "";
}

if(isset($fft_sb_attr) && $fft_sb_attr !== "") {
	$fft_sb_attr = modifyHTML($fft_sb_attr, "p", $main_section_p);
	$fft_sb_attr = modifyHTML($fft_sb_attr, "a", "style", $url_style);
	$ogt_section .= $fft_sb_attr . "\n<!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
}
else {
	$fft_sb_attr = "";
}

if($fft_snack_box == "" && $image_code == "" && $fft_sb_attr == "") {
	$ogt_section = "";
}
else {
	$ogt_section = "<tr>\n<td style=\"border-bottom: 1px solid #c8c8c8;\">\n<!--[if (gte mso 9)|(IE)]><br /><![endif]-->" . $ogt_section . "\n</td>\n</tr>\n</table>\n" . "<!--[if (gte mso 9)|(IE)]><br /><![endif]--></td>\n</tr>\n";
}

//in our ears/podcast section
$ioe_section = "";
$ioe_sec_p["class"] = "mobile-format";
$ioe_sec_p["style"] = "margin: 0 0 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; color: #767676; font-size: 18px;";
$ioe_lead_bold = "font-family: Verdana, sans-serif;font-weight: bold; color: #000;";

if(isset($in_our_ears) && $in_our_ears !== "") {
	$ioe_p = "<!--[if (gte mso 9)|(IE)]>\n<br />\n<table width=\"540\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"width: 540px;max-width: 540px;background-color: #fff;margin: 5px auto;padding: 0;\">\n<tr>\n<td align=\"left\">\n<![endif]--><table align=\"left\" cellpadding=\"2\" style=\"margin:10px 0;\"><tr><td><p class=\"headers_text\" style=\"font-family: 'Arial Black', sans-serif; color: #000;font-size:18px;font-weight: bold;text-transform: uppercase;background-color: #e5e5e5;padding: 2px 12px;\">";
	$ioe_podcast_head = $ioe_p . $in_our_ears . "</p>\n</td>\n</tr>\n</table>\n<!--[if (gte mso 9)|(IE)]>\n<br />\n</td>\n</tr></table><![endif]-->";
	$ioe_section = $ioe_podcast_head;
}
else {
	$ioe_podcast_head = "";
}

$fft_ioe_item1_content = "";
$fft_ioe_item2_content = "";
$fft_ioe_item3_content = "";
$bite_special = "";
$bite_anchor_code = "";
$close_bite_anchor = "";

if(isset($fft_ioe_item1) && $fft_ioe_item1 !== "") {
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "p", $ioe_sec_p);
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_ioe_item1, "</p>");
	$get_substr = substr($fft_ioe_item1, 0, $get_last_p);
	
	if(isset($fft_ioe1_source) && $fft_ioe1_source !== "") {
		if($fft_ioe1_ital) {
			$fft_ioe_item1_content = $get_substr . " (<em><a href=\"$fft_ioe1_url\" style=\"color:#ff6900;\">" . $fft_ioe1_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_ioe_item1_content = $get_substr . " (<a href=\"$fft_ioe1_url\" style=\"color:#ff6900;\">" . $fft_ioe1_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_ioe_item1_content = $fft_ioe_item1;
	}
	
	if(isset($fft_bite_add) && $fft_bite_add !== "") {
		$fft_bite_add = modifyHTML($fft_bite_add, "a", "style", "color: #ff6900;text-decoration: none;");
		$fft_bite_add = str_replace("<p>", "", $fft_bite_add);
		$fft_bite_add = str_replace("</p>", "", $fft_bite_add);
		
		if(isset($fft_bite_link) && $fft_bite_link != "") {
			$bite_anchor_code = "<a href=\"$fft_bite_link\">";
			$close_bite_anchor = "</a>";
		}
		
		$bite_special = "<table width=\"500\" align=\"center\" style=\"max-width: 500px !important;margin: 20px 0;\">\n<tr>\n<td width=\"125\" align=\"left\">\n$bite_anchor_code<img id=\"bite_logo\" src=\"http://assets.motherjones.com/newsletters/newsletter_test/bite_logo_name.png\" width=\"110\" style=\"max-width: 110px;height: auto;\" />$close_bite_anchor\n</td>\n<td align=\"right\" style=\"text-align:left;\">\n<p class=\"bite-episode-text\" style=\"margin: 0 0 20px 0; padding: 0; font-family: Verdana, sans-serif; color: #767676;font-size: 16px;\">$fft_bite_add</p>\n</td>\n</tr>\n</table>";
	}
}
else {
	$fft_ioe_item1 = "";
}

if(isset($fft_ioe_item2) && $fft_ioe_item2 !== "") {
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "p", $ioe_sec_p);
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_ioe_item2, "</p>");
	$get_substr = substr($fft_ioe_item2, 0, $get_last_p);
	
	if(isset($fft_ioe2_source) && $fft_ioe2_source !== "") {
		if($fft_ioe2_ital) {
			$fft_ioe_item2_content = $get_substr . " (<em><a href=\"$fft_ioe2_url\" style=\"color:#ff6900;\">" . $fft_ioe2_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_ioe_item2_content = $get_substr . " (<a href=\"$fft_ioe2_url\" style=\"color:#ff6900;\">" . $fft_ioe2_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_ioe_item2_content = $fft_ioe_item2;
	}
}

if(isset($fft_ioe_item3) && $fft_ioe_item3 !== "") {
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "p", $ioe_sec_p);
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "a", "style", $url_style);
	
	$get_last_p = strripos($fft_ioe_item3, "</p>");
	$get_substr = substr($fft_ioe_item3, 0, $get_last_p);
	
	if(isset($fft_ioe3_source) && $fft_ioe3_source !== "") {
		if($fft_ioe3_ital) {
			$fft_ioe_item3_content = $get_substr . " (<em><a href=\"$fft_ioe3_url\" style=\"color:#ff6900;\">" . $fft_ioe3_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_ioe_item3_content = $get_substr . " (<a href=\"$fft_ioe3_url\" style=\"color:#ff6900;\">" . $fft_ioe3_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_ioe_item3_content = $fft_ioe_item3;
	}
}

if($fft_ioe_item1_content != "" || $fft_ioe_item2_content != "" || $fft_ioe_item3_content != "") {
	$ioe_section .= "<table width=\"500\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"max-width: 500px !important;margin: 0 auto !important;padding: 0 !important;\">\n<tr>\n<td>" . $fft_ioe_item1_content . $bite_special . $fft_ioe_item2_content . $fft_ioe_item3_content . "</td>\n</tr>\n</table>";
	$ioe_section = "<tr>\n<td>\n" . $ioe_section . "</td>\n</tr>\n";
}
else {
	$ioe_section = "";
}
//end podcast section

$hidden_kitchen_sec = "";

if(isset($hidden_kitchen) && $hidden_kitchen !== "") {
	$hidden_kitchen_sec = "<!--[if (gte mso 9)|(IE)]><br /><table width=\"540\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"width: 540px;max-width: 540px;background-color: #fff;margin: 5px auto;padding: 0;\"><tr><td align=\"left\"><![endif]--><table align=\"left\" cellpadding=\"2\" style=\"margin:10px 0;\"><tr><td><p class=\"headers_text\" style=\"font-family: 'Arial Black', sans-serif; color: #000;font-size:18px;font-weight: bold;text-transform: uppercase;background-color: #e5e5e5;padding: 2px 12px;\">$hidden_kitchen</p></td></tr></table>\n<!--[if (gte mso 9)|(IE)]><br /></td></tr></table><![endif]-->";
}
else {
	$hidden_kitchen_sec = "<!--[if (gte mso 9)|(IE)]><br /><table width=\"540\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"width: 540px;max-width: 540px;background-color: #fff;margin: 5px auto;padding: 0;\"><tr><td align=\"left\"><![endif]--><table align=\"left\" cellpadding=\"2\" style=\"background-color: #e5e5e5;margin:10px 0;\"><tr><td><p class=\"headers_text\" style=\"font-family: 'Arial Black', sans-serif; color: #000;font-size:18px;font-weight: bold;text-transform: uppercase;\">Exclusive for Newsletter Subscribers</p></td></tr></table>\n<!--[if (gte mso 9)|(IE)]><br /></td></tr></table><![endif]-->";
}

if(isset($fft_hk_leadin) && $fft_hk_leadin !== "") {
	$fft_hk_leadin = str_replace("<p>", "<p class=\"hk_leadin\" style=\"margin: 10px 0 20px 0; padding: 0; font-family: 'Arial Black', sans-serif; font-weight: bold; color: #000; font-size: 30px;line-height:34px;\">", $fft_hk_leadin);
	$hidden_kitchen_sec .= "<table width=\"500\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin:0 auto !important; padding: 0 !important;\">\n<tr>\n<td>\n" . $fft_hk_leadin . "\n<!--[if (gte mso 9)|(IE)]><br /><![endif]--></td>\n</tr>\n";
}
else {
	$fft_hk_leadin = "";
}

if(isset($fft_hidden_kitchen) && $fft_hidden_kitchen !== "") {
	$fft_hidden_kitchen = str_replace("<p>", "<p class=\"mobile-format\" style=\"margin: 0 0 10px 0 !important; padding: 0; font-family: Verdana, sans-serif; color: #767676; font-size: 18px;\">", $fft_hidden_kitchen);
	$fft_hidden_kitchen = str_replace("<a", "<a style=\"color: #ff6900;text-decoration: none;\"", $fft_hidden_kitchen);
	$hidden_kitchen_sec .= "<tr>\n<td>$fft_hidden_kitchen</td>\n</tr>\n</table>\n";
}
else {
	$fft_hidden_kitchen = "";
}

if($fft_hk_leadin == "" && $fft_hidden_kitchen == "") {
	$hidden_kitchen_sec = "";
}

//lift note section
$lift_note_section = "";
if(isset($lift_note) && $lift_note !== "") {
	$search_this = "<p>";
	$replace_code = '<p style="font-family: Verdana, Helvetica, Arial, sans-serif;font-size: 16px;color: #767676;margin: 10px 20px;">';
	$lift_note = str_ireplace($search_this, $replace_code, $lift_note);
	$lift_note = str_ireplace("<strong>", "<strong style=\"color: #000;\">", $lift_note);
	$lift_note = str_ireplace("<a", "<a style=\"color: #ff6900;\"", $lift_note);
	$lift_note_section = "<tr><td>" . $lift_note . "<hr style=\"border:1px solid #e8e8e8;background-color: #fff;width:100%;\" /></td></tr>";
}

//live intent section
$liveintent_toptags = "";
$liveintent_bottomtags = "";
$liveintnet_rba = "";
$safe_rbt = "";

//safe RBT
if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
	$safe_rbt = <<<SAFERBT
<table cellpadding="0" cellspacing="0" border="0" width="40" height="6"><tbody><tr><td><img src="http://li.motherjones.com/imp?s=68954&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68955&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68956&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68957&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68958&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68959&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68960&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68961&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68962&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68963&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68964&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=68965&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399312&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399313&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399314&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399315&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399316&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399317&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399318&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=123399319&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td></tr></tbody></table>
SAFERBT;
	
	$liveintent_toptags = <<<LIVETOP
<table align="center" cellpadding="0" cellspacing="0" border="0" width="768">
	<tbody>
		<tr>
			<td colspan="3" align="center" height="1" valign="bottom">
				<a href="http://li.motherjones.com/click?s=68911&t=newsletter&sz=728x91&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68911&t=newsletter&sz=728x91&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="1">
				<a href="http://li.motherjones.com/click?s=68909&t=newsletter&sz=160x601&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68909&t=newsletter&sz=160x601&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
			<td valign="top" width="100%">
LIVETOP;
	
	$liveintent_bottomtags = <<<LIVEBOTTOM
			</td>
			<td align="left" valign="top" width="1">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">
							<a href="http://li.motherjones.com/click?s=68910&t=newsletter&sz=300x601&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68910&t=newsletter&sz=300x601&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
					</tr>
					<tr style="display:block; height:1px; line-height:1px;">
						<td>
							<img src="http://li.motherjones.com/imp?s=68912&t=newsletter&sz=1x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
						<td>
							<img src="http://li.motherjones.com/imp?s=68913&t=newsletter&sz=1x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
					</tr>
					<tr>
						<td align="left">
							<a href="http://li.motherjones.com/click?s=68915&t=newsletter&sz=116x15&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68915&t=newsletter&sz=116x15&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
						<td align="right">
							<a href="http://li.motherjones.com/click?s=68914&t=newsletter&sz=69x15&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68914&t=newsletter&sz=69x15&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
LIVEBOTTOM;
	
	$liveintnet_rba = <<<LIVERBA
<table cellpadding="0" cellspacing="0" border="0" width="24" height="6">
	<tbody>
		<tr>
			<td>
				<img src="http://li.motherjones.com/imp?s=68954&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68955&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68956&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68957&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68958&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68959&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68960&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68961&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68962&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68963&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68964&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68965&t=newsletter&sz=2x1&li=foodforthought&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
		</tr>
	</tbody>
</table>
LIVERBA;
}
//live intent
//$liveintent_toptags
//$liveintnet_rba
//$liveintent_bottomtags
//heredoc for the template containing the main HTML code in a table
//$maindish_anchor_name = "1 - " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");
//$maindish_anchor_name_fb = "Facebook: " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");
//$maindish_anchor_name_tt = "Twitter: " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");

$anchor_subject_line = "Food for Thought";

$fft_redesign = <<<FOODREDESIGN
<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--[if !mso]><!-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!--<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title></title>
	</head>
	<body style="min-width: 100%;background-color: #e5e5e5;margin: 0 auto;">
		<style>
			#main_newsletter h3 {font-size: 46px;}
			#main_newsletter h3 a {color: #000 !important;}
			p.fft-info-section {font-style: italic;}
			.fft-info {color: #000;
				font-style: italic;
				font-weight: bold;}
			p.mobile-format {font-size: 32px;}
			p.ad_text {font-size: 24px;}
			p.headers_text {font-size: 16px;
				line-height: 20px;
				letter-spacing: 3px;}
			p.hk_leadin {font-size: 38px;}
			@media screen and (min-device-width: 521px) {
				#main_newsletter h3 {font-size: 30px !important;
					line-height: 34px !important;
					color: #000 !important;}
				#main_newsletter h3 a {color: #000 !important;}
				p.mobile-format {font-size: 16px !important;}
				p.fft-last-section {font-size: 16px !important;}
				p.ad_text {font-size: 14px !important;}
				p.headers_text {font-size: 10px !important;
					line-height: 14px !important;
					letter-spacing: 3px;}
				p.hk_leadin {font-size: 24px !important;
					line-height: 28px !important;}
				p.foot_id {font-size: 14px !important;}
				p.bite-episode-text {font-size: 14px !important;}
    		}
    		@media screen and (max-device-width: 520px) {
    			p.mobile-format {font-size: 32px !important;}
    			#main_newsletter h3 {font-size: 46px !important;
    				line-height: 50px !important;
    				color: #000 !important;}
    			#main_newsletter h3 a {color: #000 !important;}
    			p span {font-size: 30px !important;}
    			p.headers_text {font-size: 16px !important;
    				line-height: 20px !important;
    				letter-spacing: 3px;}
    			p.hk_leadin {font-size: 38px !important;
    				line-height: 42px !important;}
    			p.black-text {color: #000;
    				margin-bottom: 0 !important;
    				padding: 0 !important;}
    			p.fft-last-section {font-size: 18px !important;}
    			#date_line {text-align: left !important;}
    			#bite_logo {max-width: 150% !important;}
    			p.ad_text {font-size: 18px !important;}
    			p.foot_id {font-size: 18px !important;}
    			p.bite-episode-text {font-size: 20px !important;}
    		}
    	</style>
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto;border-spacing:0;font-family:Verdana, sans-serif;background-color: #e5e5e5;margin: 0;padding: 0;" id="main_newsletter">
    		<tr>
    			<td>
    				<!--[if (gte mso 9)|(IE)]>
    				<table width="620" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #fff;border-spacing:0;" >
    					<tr>
    						<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
    				<![endif]-->
    				<table align-"center" width="620" style="max-width: 620px; margin:0 auto;background-color: #fff;">
    					$lift_note_section
                		<tr>
                			<td>
                				<div style="max-width: 620px; margin: 0 auto; margin-bottom: 15px;background-color: #fff;">
                					<img src="http://assets.motherjones.com/newsletters/newsletter_test/fft-header.png" width="620" style="width: 100%;background-color: #000;color: #000;" />
                				</div>
                				<table width="580" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 580px;background-color: #fff;margin: 0 auto;padding: 0;text-align: left;">
                					<tr>
                						<td>
                							<table width="540" border="0" cellspacing="0" cellpadding="0" align="center" style="width: 540px;max-width: 540px;background-color: #fff;margin: 5px auto;padding: 0;">
                								<tr>
                									<td>
                										<p style="color: #c8c8c8;text-decoration: none;margin: 0 0 10px 0;font-size: 16px;text-align:right;" id="date_line">$get_date</p>
                          							</td>
                          						</tr>
                          						<tr>
                          							<td style="border-bottom: 1px solid #c8c8c8;color: #000;" id="main-section">
                          								<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                          								<img src="$fft_main_img" style="max-width: 540px; height: auto;margin-bottom: 10px !important;" width="540" alt="" />
                                						<!--[if (gte mso 9)|(IE)]><br />
                                						<table width="540" border="0" cellspacing="0" cellpadding="0" align="center" style="width: 540px;max-width: 540px;background-color: #fff;margin: 5px auto;padding: 0;">
                                							<tr>
                                							<td align="left">
                                						<![endif]-->
                                						$main_section_header
                                						<!--[if (gte mso 9)|(IE)]><br />
                                					</td>
                                				</tr>
                                			</table>
                                			<![endif]-->
                                			<table width="100%" border="0" cellspacing="0">
                                				<tr>
                                					<td>
                                						$main_title
                                						$main_section
														<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td style="border-bottom: 1px solid #c8c8c8;" align="center">
											<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
											<p class="ad_text" style="color: #767676; text-align: center;margin-top:20px;font-size: 14px;">&#8212;ADVERTISEMENT&#8212;</p>
											$billboard_ad
                                			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                                		</td>
                                	</tr>
                                	$ogt_section
                            		<tr>
                            			<td style="border-bottom: 1px solid #c8c8c8;" align="center">
                            				<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                            				$membership_slot
                                			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                                		</td>
                                	</tr>
                                	$ioe_section
                            		<tr>
                            			<td>
                            				<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                            				$hidden_kitchen_sec
                                			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                                		</td>
                                	</tr>
                                	<tr>
                                		<td>
                                			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                                			<p class="mobile-format" style="margin: 15px 0 10px 0 !important;text-align: center; font-family: Verdana, sans-serif; font-style: italic; color: #a6a6a6;font-size: 26px;">That's all, folks! We'll be back next Wednesday with more.<br />&#8212;<a href="http://www.motherjones.com/authors/maddie-oatman" style="text-decoration: none; color: #ff6900;">Maddie</a> and <a href="http://www.motherjones.com/authors/kiera-butler" style="text-decoration: none; color: #ff6900;">Kiera</a></p>
                                			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                                		</td>
                                	</tr>
                                </table>
                            </td>
                         </tr>
                      </table>
                  </td>
                </tr>
              </table>
              <table width="620" border="0" cellspacing="0" cellpadding="0" align="center" style="border-spacing:0;font-family:Verdana, sans-serif;background-color: #fff;padding: 0;max-width:620px;">
                <tr>
                  <td align="center" style="border-bottom: 1px solid #c8c8c8;">
                    <p class="fft-last-section" style="margin: 0 0 10px 0; padding: 0; font-family: Verdana, sans-serif; color: #767676;font-style: italic;font-size: 16px;"><span style="font-family: Verdana, sans-serif;font-weight: bold; color: #000;">Questions/concerns/feedback?</span><br />Email <a style="color: #ff6900; margin: 15px 0;" href="mailto:newsletters@motherjones.com?subject=$anchor_subject_line">newsletters@motherjones.com</a>.</p>
					<p class="fft-last-section" style="margin: 0 0 10px 0; padding: 0; font-family: Verdana, sans-serif; color: #767676;font-size: 16px;"><span style="font-family: Verdana, sans-serif;font-weight: bold; color: #000;font-style:italic;">Hungry for more food news?</span><br /><em>Follow</em> Mother Jones Food <em>on <a style="color: #ff6900; margin: 15px 0;" href="https://twitter.com/motherjonesfood">Twitter</a> and <a style="color: #ff6900; margin: 15px 0;" href="https://www.facebook.com/motherjonesfood/">Facebook</a>.</em></p>
                    <p class="fft-last-section" style="margin: 0 0 20px 0; padding: 0; font-family: Verdana, sans-serif; color: #767676;font-size: 16px;"><span style="font-family: Verdana, sans-serif;font-weight: bold; color: #000;"><em>Did someone forward this to you?</em></span><br /><em><a style="color: #ff6900; margin: 15px 0;" href="http://www.motherjones.com/about/interact-engage/free-email-newsletter">Click here</a> to sign up to get more</em> Food for Thought <em>in your inbox</em>!</p>
                    <!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom: 1px solid #c8c8c8;margin-bottom: 20px;" align="center">
                    <!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                    <p class="ad_text" style="color: #767676; text-align: center; margin-top:20px;">&#8212;ADVERTISEMENT&#8212;</p>
                    $billboard_ad2
                    <!--[if (gte mso 9)|(IE)]><br /><![endif]-->
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    $global_footer
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
</body>
</html>
FOODREDESIGN;

//print out HTML template
print $fft_redesign;

/* db section */
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
//add slashes for the db and strip out disallowed html tags
$fft_main_hed = strip_tags(addslashes($fft_main_hed), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_main_hed_url = addslashes($fft_main_hed_url);
$fft_main_img = addslashes($fft_main_img);
$fft_article_1 = strip_tags(addslashes($fft_article_1), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_article_2 = strip_tags(addslashes($fft_article_2), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_article_3 = strip_tags(addslashes($fft_article_3), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_article_4 = strip_tags(addslashes($fft_article_4), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_article_5 = strip_tags(addslashes($fft_article_5), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_article_6 = strip_tags(addslashes($fft_article_6), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$snack_box = strip_tags(addslashes($snack_box), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_snack_box = strip_tags(addslashes($fft_snack_box), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_sb_image = addslashes($fft_sb_image);
$fft_sb_attr = strip_tags(addslashes($fft_sb_attr), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$in_our_ears = strip_tags(addslashes($in_our_ears), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_ioe_item1 = strip_tags(addslashes($fft_ioe_item1), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_bite_add = strip_tags(addslashes($fft_bite_add), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_bite_link = addslashes($fft_bite_link);
$fft_ioe_item2 = strip_tags(addslashes($fft_ioe_item2), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_ioe_item3 = strip_tags(addslashes($fft_ioe_item3), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$hidden_kitchen = strip_tags(addslashes($hidden_kitchen), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_hk_leadin = strip_tags(addslashes($fft_hk_leadin), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_hidden_kitchen = strip_tags(addslashes($fft_hidden_kitchen), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$lift_note = strip_tags(addslashes($lift_note), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$subject_line = strip_tags(addslashes(str_replace("â€”","–", $subject_line)), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$sub_url = addslashes($sub_url);
$sub_image = addslashes($sub_image);
$sub_text = strip_tags(addslashes($sub_text), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$sub_code = strip_tags(addslashes($sub_code), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$membership_slot = strip_tags(addslashes($membership_slot), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$billboard_url = addslashes($billboard_url);
$billboard_image = addslashes($billboard_image);
$advertiser_name = strip_tags(addslashes($advertiser_name), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$billboard_url2 = addslashes($billboard_url2);
$billboard_image2 = addslashes($billboard_image2);
$advertiser_name2 = strip_tags(addslashes($advertiser_name2), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$ad_name = strip_tags(addslashes($advertiser_name), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$pixel_tracker = addslashes($pixel_tracker);
$pixel_tracker2 = addslashes($pixel_tracker2);
$fft_a1_source = strip_tags(addslashes($fft_a1_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a1_url = addslashes($fft_a1_url);
$fft_a2_source = strip_tags(addslashes($fft_a2_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a2_url = addslashes($fft_a2_url);
$fft_a3_source = strip_tags(addslashes($fft_a3_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a3_url = addslashes($fft_a3_url);
$fft_a4_source = strip_tags(addslashes($fft_a4_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a4_url = addslashes($fft_a4_url);
$fft_a5_source = strip_tags(addslashes($fft_a5_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a5_url = addslashes($fft_a5_url);
$fft_a6_source = strip_tags(addslashes($fft_a6_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_a6_url = addslashes($fft_a6_url);
$fft_ioe1_source = strip_tags(addslashes($fft_ioe1_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_ioe1_url = addslashes($fft_ioe1_url);
$fft_ioe2_source = strip_tags(addslashes($fft_ioe2_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_ioe2_url = addslashes($fft_ioe2_url);
$fft_ioe3_source = strip_tags(addslashes($fft_ioe3_source), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td>");
$fft_ioe3_url = addslashes($fft_ioe3_url);

//check to see if data exists in db
$check_existing = "SELECT id, hed_date FROM food_for_thought_redesign WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
	$run_qry = "UPDATE food_for_thought_redesign
	SET hed_date = '$headlines_date',
	fft_main_hed = '$fft_main_hed',
	fft_main_hed_url = '$fft_main_hed_url',
	fft_main_img = '$fft_main_img',
	fft_article_1 = '$fft_article_1',
	fft_article_2 = '$fft_article_2',
	fft_article_3 = '$fft_article_3',
	fft_article_4 = '$fft_article_4',
	fft_article_5 = '$fft_article_5',
	fft_article_6 = '$fft_article_6',
	snack_box = '$snack_box',
	fft_snack_box = '$fft_snack_box',
	fft_sb_image = '$fft_sb_image',
	fft_sb_attr = '$fft_sb_attr',
	in_our_ears = '$in_our_ears',
	fft_ioe_item1 = '$fft_ioe_item1',
	fft_bite_add = '$fft_bite_add',
	fft_bite_link = '$fft_bite_link',
	fft_ioe_item2 = '$fft_ioe_item2',
	fft_ioe_item3 = '$fft_ioe_item3',
	hidden_kitchen = '$hidden_kitchen',
	fft_hk_leadin = '$fft_hk_leadin',
	fft_hidden_kitchen = '$fft_hidden_kitchen',
	subject_line = '$subject_line',
	ad_name = '$advertiser_name',
	ad_billboard = '$billboard_image',
	ad_link_bill = '$billboard_url',
	ad_name2 = '$advertiser_name2',
	ad_link_banner = '$billboard_url2',
	ad_banner = '$billboard_image2',
	sub_url = '$sub_url',
	sub_image = '$sub_image',
	sub_text = '$sub_text',
	sub_code = '$sub_code',
	membership_slot = '$membership_slot',
	lift_note = '$lift_note',
	pixel_tracker = '$pixel_tracker',
	pixel_tracker2 = '$pixel_tracker2',
	fft_a1_source = '$fft_a1_source',
	fft_a1_ital = '$fft_a1_ital',
	fft_a1_url = '$fft_a1_url',
	fft_a2_source = '$fft_a2_source',
	fft_a2_ital = '$fft_a2_ital',
	fft_a2_url = '$fft_a2_url',
	fft_a3_source = '$fft_a3_source',
	fft_a3_ital = '$fft_a3_ital',
	fft_a3_url = '$fft_a3_url',
	fft_a4_source = '$fft_a4_source',
	fft_a4_ital = '$fft_a4_ital',
	fft_a4_url = '$fft_a4_url',
	fft_a5_source = '$fft_a5_source',
	fft_a5_ital = '$fft_a5_ital',
	fft_a5_url = '$fft_a5_url',
	fft_a6_source = '$fft_a6_source',
	fft_a6_ital = '$fft_a6_ital',
	fft_a6_url = '$fft_a6_url',
	fft_ioe1_source = '$fft_ioe1_source',
	fft_ioe1_ital = '$fft_ioe1_ital',
	fft_ioe1_url = '$fft_ioe1_url',
	fft_ioe2_source = '$fft_ioe2_source',
	fft_ioe2_ital = '$fft_ioe2_ital',
	fft_ioe2_url = '$fft_ioe2_url',
	fft_ioe3_source = '$fft_ioe3_source',
	fft_ioe3_ital = '$fft_ioe3_ital',
	fft_ioe3_url = '$fft_ioe3_url'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO food_for_thought_redesign(hed_date,fft_main_hed,fft_main_hed_url,fft_main_img,fft_article_1,fft_article_2,fft_article_3,fft_article_4,fft_article_5,fft_article_6,snack_box,fft_snack_box,fft_sb_image,fft_sb_attr,in_our_ears,fft_ioe_item1,fft_bite_add,fft_bite_link,fft_ioe_item2,fft_ioe_item3,hidden_kitchen,fft_hk_leadin,fft_hidden_kitchen,subject_line,ad_name,ad_billboard,ad_link_bill,ad_name2,ad_link_banner,ad_banner,sub_url,sub_image,sub_text,sub_code,membership_slot,lift_note,pixel_tracker,pixel_tracker2,fft_a1_source,fft_a1_ital,fft_a1_url,fft_a2_source,fft_a2_ital,fft_a2_url,fft_a3_source,fft_a3_ital,fft_a3_url,fft_a4_source,fft_a4_ital,fft_a4_url,fft_a5_source,fft_a5_ital,fft_a5_url,fft_a6_source,fft_a6_ital,fft_a6_url,fft_ioe1_source,fft_ioe1_ital,fft_ioe1_url,fft_ioe2_source,fft_ioe2_ital,fft_ioe2_url,fft_ioe3_source,fft_ioe3_ital,fft_ioe3_url)
	VALUES('$headlines_date',
	'$fft_main_hed',
	'$fft_main_hed_url',
	'$fft_main_img',
	'$fft_article_1',
	'$fft_article_2',
	'$fft_article_3',
	'$fft_article_4',
	'$fft_article_5',
	'$fft_article_6',
	'$snack_box',
	'$fft_snack_box',
	'$fft_sb_image',
	'$fft_sb_attr',
	'$in_our_ears',
	'$fft_ioe_item1',
	'$fft_bite_add',
	'$fft_bite_link',
	'$fft_ioe_item2',
	'$fft_ioe_item3',
	'$hidden_kitchen',
	'$fft_hk_leadin',
	'$fft_hidden_kitchen',
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
	'$pixel_tracker2',
	'$fft_a1_source',
	'$fft_a1_ital',
	'$fft_a1_url',
	'$fft_a2_source',
	'$fft_a2_ital',
	'$fft_a2_url',
	'$fft_a3_source',
	'$fft_a3_ital',
	'$fft_a3_url',
	'$fft_a4_source',
	'$fft_a4_ital',
	'$fft_a4_url',
	'$fft_a5_source',
	'$fft_a5_ital',
	'$fft_a5_url',
	'$fft_a6_source',
	'$fft_a6_ital',
	'$fft_a6_url',
	'$fft_ioe1_source',
	'$fft_ioe1_ital',
	'$fft_ioe1_url',
	'$fft_ioe2_source',
	'$fft_ioe2_ital',
	'$fft_ioe2_url',
	'$fft_ioe3_source',
	'$fft_ioe3_ital',
	'$fft_ioe3_url')";
}
//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>