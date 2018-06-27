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
	$in_our_ears = "New From Bite Podcast";
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
	$hidden_kitchen = "What's Cooking";
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

if(isset($_REQUEST["image_creds"]) && $_REQUEST["image_creds"] !== "") {
	$fft_image_creds = trim($_REQUEST["image_creds"]);
}
else {
	$fft_image_creds = "";
}
//end sources section

//Food for Thought redesign template section
//date formatting
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);

//Main section
$main_section = "";
$main_title = "";
$main_section_p["class"] = "mobile-format";
$main_section_p["style"] = "text-align:left;color: #222;font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$lead_in_bold = "font-family: Georgia, serif;font-weight: bold; color: #000 !important;";
$url_style = "color: #222;border-bottom: 1px solid #ff6900;text-decoration:none;";
$fft_inline_img["width"] = "540";
$fft_inline_img["style"] = "width:540px;max-width:540px;";

if(isset($fft_main_hed_url) && $fft_main_hed_url !== "") {
	$main_title = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\"><a href=\"$fft_main_hed_url\" style=\"text-decoration: none;color: #000;\">$fft_main_hed</a></h3>";
}
else {
	$main_title = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\">$fft_main_hed</h3>";
}

$fft_article_1_content = "";
$fft_article_2_content = "";
$fft_article_3_content = "";
$fft_article_4_content = "";
$fft_article_5_content = "";
$fft_article_6_content = "";

if(isset($fft_article_1) && $fft_article_1 !== "") {
	//replace html entities
	$fft_article_1 = modifyHTML($fft_article_1, "p", $main_section_p);
	$fft_article_1 = modifyHTML($fft_article_1, "strong", "style", $lead_in_bold);
	$fft_article_1 = modifyHTML($fft_article_1, "a", "style", $url_style);
	//add sources and formatting
	$get_last_p = strripos($fft_article_1, "</p>");
	$get_substr = substr($fft_article_1, 0, $get_last_p);
	
	if(isset($fft_a1_source) && $fft_a1_source !== "") {
		if($fft_a1_ital) {
			$fft_article_1_content = $get_substr . " (<em><a href=\"$fft_main_hed_url\" style=\"$url_style\">" . $fft_a1_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_1_content = $get_substr . " (<a href=\"$fft_main_hed_url\" style=\"$url_style\">" . $fft_a1_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_1_content = $fft_article_1;
	}
}

if(isset($fft_article_2) && $fft_article_2 !== "") {
	//replace html entities
	$fft_article_2 = modifyHTML($fft_article_2, "p", $main_section_p);
	$fft_article_2 = modifyHTML($fft_article_2, "strong", "style", $lead_in_bold);
	$fft_article_2 = modifyHTML($fft_article_2, "a", "style", $url_style);
	$fft_article_2 = modifyHTML($fft_article_2, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_article_2, "</p>");
	$get_substr = substr($fft_article_2, 0, $get_last_p);
	
	if(isset($fft_a2_source) && $fft_a2_source !== "") {
		if($fft_a2_ital) {
			$fft_article_2_content = $get_substr . " (<em><a href=\"$fft_a2_url\" style=\"$url_style\">" . $fft_a2_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_2_content = $get_substr . " (<a href=\"$fft_a2_url\" style=\"$url_style\">" . $fft_a2_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_2_content = $fft_article_2;
	}
}

if(isset($fft_article_3) && $fft_article_3 !== "") {
	//replace html entities
	$fft_article_3 = modifyHTML($fft_article_3, "p", $main_section_p);
	$fft_article_3 = modifyHTML($fft_article_3, "strong", "style", $lead_in_bold);
	$fft_article_3 = modifyHTML($fft_article_3, "a", "style", $url_style);
	$fft_article_3 = modifyHTML($fft_article_3, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_article_3, "</p>");
	$get_substr = substr($fft_article_3, 0, $get_last_p);
	
	if(isset($fft_a3_source) && $fft_a3_source !== "") {
		if($fft_a3_ital) {
			$fft_article_3_content = $get_substr . " (<em><a href=\"$fft_a3_url\" style=\"$url_style\">" . $fft_a3_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_3_content = $get_substr . " (<a href=\"$fft_a3_url\" style=\"$url_style\">" . $fft_a3_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_3_content = $fft_article_3;
	}
}

if(isset($fft_article_4) && $fft_article_4 !== "") {
	//replace html entities
	$fft_article_4 = modifyHTML($fft_article_4, "p", $main_section_p);
	$fft_article_4 = modifyHTML($fft_article_4, "strong", "style", $lead_in_bold);
	$fft_article_4 = modifyHTML($fft_article_4, "a", "style", $url_style);
	$fft_article_4 = modifyHTML($fft_article_4, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_article_4, "</p>");
	$get_substr = substr($fft_article_4, 0, $get_last_p);
	
	if(isset($fft_a4_source) && $fft_a4_source !== "") {
		if($fft_a4_ital) {
			$fft_article_4_content = $get_substr . " (<em><a href=\"$fft_a4_url\" style=\"$url_style\">" . $fft_a4_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_4_content = $get_substr . " (<a href=\"$fft_a4_url\" style=\"$url_style\">" . $fft_a4_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_4_content = $fft_article_4;
	}
	
}

if(isset($fft_article_5) && $fft_article_5 !== "") {
	//replace html entities
	$fft_article_5 = modifyHTML($fft_article_5, "p", $main_section_p);
	$fft_article_5 = modifyHTML($fft_article_5, "strong", "style", $lead_in_bold);
	$fft_article_5 = modifyHTML($fft_article_5, "a", "style", $url_style);
	$fft_article_5 = modifyHTML($fft_article_5, "img", $fft_inline_img);
	//add sorces and formatting
	$get_last_p = strripos($fft_article_5, "</p>");
	$get_substr = substr($fft_article_5, 0, $get_last_p);
	
	if(isset($fft_a5_source) && $fft_a5_source!== "") {
		if($fft_a5_ital) {
			$fft_article_5_content = $get_substr . " (<em><a href=\"$fft_a5_url\" style=\"$url_style\">" . $fft_a5_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_5_content = $get_substr . " (<a href=\"$fft_a5_url\" style=\"$url_style\">" . $fft_a5_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_5_content = $fft_article_5;
	}
}

if(isset($fft_article_6) && $fft_article_6 !== "") {
	//replace html entities
	$fft_article_6 = modifyHTML($fft_article_6, "p", $main_section_p);
	$fft_article_6 = modifyHTML($fft_article_6, "strong", "style", $lead_in_bold);
	$fft_article_6 = modifyHTML($fft_article_6, "a", "style", $url_style);
	$fft_article_6 = modifyHTML($fft_article_6, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_article_6, "</p>");
	$get_substr = substr($fft_article_6, 0, $get_last_p);
	
	if(isset($fft_a6_source) && $fft_a6_source !== "") {
		if($fft_a6_ital) {
			$fft_article_6_content = $get_substr . " (<em><a href=\"$fft_a6_url\" style=\"$url_style\">" . $fft_a6_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_article_6_content = $get_substr . " (<a href=\"$fft_a6_url\" style=\"$url_style\">" . $fft_a6_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_article_6_content = $fft_article_6;
	}
}

$main_section = $main_title . $fft_article_1_content . $fft_article_2_content . $fft_article_3_content . $fft_article_4_content . $fft_article_5_content . $fft_article_6_content;

$ogt_section = "";

if(isset($snack_box) && $snack_box !== "") {
	$sb_p = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">" . $snack_box . "</p>";
	$ogt_section .= $sb_p;
}
else {
	$sb_p = "";
}

$ogt_section .= "<table width=\"500\" align=\"center\" style=\"max-width: 500px !important;margin:0 auto !important;\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n<td>";

if(isset($fft_snack_box) && $fft_snack_box !== "") {
	$snack_box_p["class"] = "mobile-format";
	$snack_box_p["style"] = "margin: 0 0 20px 0; padding: 0; font-family: Georgia, serif; color: #222;font-size: 18px;";
	$fft_snack_box = modifyHTML($fft_snack_box, "p", $snack_box_p);
	$fft_snack_box = modifyHTML($fft_snack_box, "strong", "style", $lead_in_bold);
	$fft_snack_box = modifyHTML($fft_snack_box, "img", $fft_inline_img);
	$fft_snack_box = modifyHTML($fft_snack_box, "a", "style", $url_style);
	$ogt_section .= $fft_snack_box;
}
else {
	$fft_snack_box = "";
}

if(isset($fft_sb_image) && $fft_sb_image !== "") {
	$image_code = "<img src=\"$fft_sb_image\" alt=\"\" style=\"max-width: 540px; width:540px; height: auto;margin-bottom: 20px;\" width=\"540\" /><!--[if (gte mso 9)|(IE)]><br><br><![endif]-->";
	$ogt_section .= $image_code;
}
else {
	$image_code = "";
}

if(isset($fft_sb_attr) && $fft_sb_attr !== "") {
	$fft_sb_attr = modifyHTML($fft_sb_attr, "p", $main_section_p);
	$fft_sb_attr = modifyHTML($fft_sb_attr, "a", "style", $url_style);
	$fft_sb_attr = modifyHTML($fft_sb_attr, "img", $fft_inline_img);
	$ogt_section .= $fft_sb_attr . "\n<!--[if (gte mso 9)|(IE)]><br><br><![endif]-->";
}
else {
	$fft_sb_attr = "";
}

if($fft_snack_box === "" && $image_code === "" && $fft_sb_attr === "") {
	$ogt_section = "";
}
else {
	$ogt_section = "<tr>\n<td style=\"border-bottom: 1px solid #767676;\">\n<!--[if (gte mso 9)|(IE)]><br /><![endif]-->" . $ogt_section . "\n</td>\n</tr>\n</table>\n" . "<!--[if (gte mso 9)|(IE)]><br><br><![endif]--></td>\n</tr>\n";
}

//in our ears/podcast section (New From Bite Podcast)
$ioe_section = "";
$ioe_sec_p["class"] = "mobile-format";
$ioe_sec_p["style"] = "margin: 0 0 20px 0 !important; padding: 0; font-family:Georgia, serif; color: #222; font-size: 16px;line-height: 21px;";
$ioe_lead_bold = "font-family: Georgia, serif;font-weight: bold; color: #000;";

if(isset($in_our_ears) && $in_our_ears !== "") {
	$ioe_p = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">" . $in_our_ears . "</p>";
	$ioe_podcast_head = $ioe_p;
	//$ioe_section = $ioe_podcast_head;
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
	//replace html entities
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "p", $ioe_sec_p);
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "a", "style", $url_style);
	$fft_ioe_item1 = modifyHTML($fft_ioe_item1, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_ioe_item1, "</p>");
	$get_substr = substr($fft_ioe_item1, 0, $get_last_p);
	
	if(isset($fft_ioe1_source) && $fft_ioe1_source !== "") {
		if($fft_ioe1_ital) {
			$fft_ioe_item1_content = $get_substr . " (<em><a href=\"$fft_ioe1_url\" style=\"$url_style\">" . $fft_ioe1_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_ioe_item1_content = $get_substr . " (<a href=\"$fft_ioe1_url\" style=\"$url_style\">" . $fft_ioe1_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_ioe_item1_content = $fft_ioe_item1;
	}
	
	if(isset($fft_bite_add) && $fft_bite_add !== "") {
		//replace html entities
		$fft_bite_add = modifyHTML($fft_bite_add, "a", "style", $url_style);
		$fft_sb_attr = modifyHTML($fft_sb_attr, "img", $fft_inline_img);
		$fft_bite_add = str_replace("<p>", "", $fft_bite_add);
		$fft_bite_add = str_replace("</p>", "", $fft_bite_add);
		
		if(isset($fft_bite_link) && $fft_bite_link != "") {
			$bite_anchor_code = "<a href=\"$fft_bite_link\">";
			$close_bite_anchor = "</a>";
		}
		
		$fft_ioe_item1_content = "<table width=\"540\" align=\"center\" style=\"max-width: 540px !important;margin: 20px 0;\">\n<tr>\n<td width=\"125\" valign=\"top\" align=\"left\">\n$bite_anchor_code<img id=\"bite_logo\" src=\"http://assets.motherjones.com/newsletters/newsletter_test/bite_logo_name.png\" width=\"110\" style=\"max-width: 110px;height: auto;\" />$close_bite_anchor\n</td>\n<td align=\"right\" style=\"text-align:left;\">\n$fft_ioe_item1_content<p class=\"bite-episode-text\" style=\"margin: 0; padding: 0; font-family:Georgia, serif; color: #222;font-size: 16px;line-height: 21px;\">$fft_bite_add</p>\n</td>\n</tr>\n</table>";
	}
}
else {
	$fft_ioe_item1 = "";
}

if(isset($fft_ioe_item2) && $fft_ioe_item2 !== "") {
	//replace html entities
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "p", $ioe_sec_p);
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "a", "style", $url_style);
	$fft_ioe_item2 = modifyHTML($fft_ioe_item2, "img", $fft_inline_img);
	//add source and formatting
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
	//replace html entities
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "p", $ioe_sec_p);
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "strong", "style", $ioe_lead_bold);
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "a", "style", $url_style);
	$fft_ioe_item3 = modifyHTML($fft_ioe_item3, "img", $fft_inline_img);
	//add sources and formatting
	$get_last_p = strripos($fft_ioe_item3, "</p>");
	$get_substr = substr($fft_ioe_item3, 0, $get_last_p);
	
	if(isset($fft_ioe3_source) && $fft_ioe3_source !== "") {
		if($fft_ioe3_ital) {
			$fft_ioe_item3_content = $get_substr . " (<em><a href=\"$fft_ioe3_url\" style=\"$url_style\">" . $fft_ioe3_source . "</a></em>)" . "</p>";
		}
		else {
			$fft_ioe_item3_content = $get_substr . " (<a href=\"$fft_ioe3_url\" style=\"$url_style\">" . $fft_ioe3_source . "</a>)" . "</p>";
		}
	}
	else {
		$fft_ioe_item3_content = $fft_ioe_item3;
	}
}

if($fft_ioe_item1_content != "" || $fft_ioe_item2_content != "" || $fft_ioe_item3_content != "") {
	$ioe_section .= "\n<tr>\n<td style=\"border-bottom: 1px solid #767676;\">" . $ioe_podcast_head .  $fft_ioe_item1_content . "<br>" .  $fft_ioe_item2_content . $fft_ioe_item3_content . "</td></tr>";
}
else {
	$ioe_section = "";
}
//end podcast section

//What's Cooking section (formerly Hidden Kitchen/For Newsletter Subscribers)
$hidden_kitchen_sec = "";

if(isset($hidden_kitchen) && $hidden_kitchen !== "") {
	$hidden_kitchen_title = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">$hidden_kitchen</p>";
}
else {
	$hidden_kitchen_title = "<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 10px; line-height: 14px;font-weight: bold;text-transform: uppercase;text-align:left;\">What's Cooking</p>";
}

if(isset($fft_hk_leadin) && $fft_hk_leadin !== "") {
	$fft_hk_p_format["class"] = "hk_leadin";
	$fft_hk_p_format["style"] = "margin: 0 0 20px 0; padding: 0; font-family:Georgia, serif; font-weight: bold; color: #000; font-size: 24px;line-height:28px;";
	$fft_hk_leadin = modifyHTML($fft_hk_leadin, "p", $fft_hk_p_format);
	$fft_hk_leadin = modifyHTML($fft_hk_leadin, "img", $fft_inline_img);
}
else {
	$fft_hk_leadin = "";
}

if(isset($fft_hidden_kitchen) && $fft_hidden_kitchen !== "") {
	$fft_hk_p_format_2["class"] = "mobile-format";
	$fft_hk_p_format_2["style"] = "color: #222; font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
	$fft_hidden_kitchen = modifyHTML($fft_hidden_kitchen, "p", $fft_hk_p_format_2);
	$fft_hidden_kitchen = modifyHTML($fft_hidden_kitchen, "img", $fft_inline_img);
	$fft_hidden_kitchen = modifyHTML($fft_hidden_kitchen, "a", "style", $url_style);
	
	$hidden_kitchen_sec .= "<tr><td style=\"border-bottom: 1px solid #767676;\">" . $hidden_kitchen_title . $fft_hk_leadin . $fft_hidden_kitchen ."<br></td></tr>";
}
else {
	$fft_hidden_kitchen = "";
}

if($fft_hk_leadin === "" && $fft_hidden_kitchen === "") {
	$hidden_kitchen_sec = "";
}
//end What's Cooking section

//image credits section
$image_creds_sec = "";

if(isset($fft_image_creds) && $fft_image_creds !== "") {
	$image_creds_p["class"] = "mobile-format";
	$image_creds_p["style"] = "margin: 0 0 20px 0; padding: 0;text-align:center; font-family:Georgia, serif; color: #222;font-size: 16px;line-height:21px;";
	$fft_image_creds = modifyHTML($fft_image_creds, "p", $image_creds_p);
	$fft_image_creds = modifyHTML($fft_image_creds, "a", "style", $url_style);
	$image_creds_sec = $fft_image_creds;
}

//end image credits section

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
	<body style="min-width: 100%;background-color: #e9e9e9;margin: 0 auto;">
<div>
  <style>
  .wrapper {
    background-color: #e9e9e9;
  }
  .layout {
    Margin: 0 auto;
    width:620px !important;
    max-width: 620px !important;
    background-color: #fff;
  }
  .spacing {
    Margin: 0 auto;
    width:85%;
    }
  .narrow {
    width: 33% !important;
    }
  .wide {
    Margin-left: 10px !important;
    width: 65% !important;
    }
  .headers_text {
    font-size: 10px;
    line-height: 14px;
  }
  #date_line {
    font-size: 12px;
    line-height: 16px;
  }
  p, h3 {
    Margin: 15px 0;
  }
  h3 {
    font-size: 33px;
    line-height: 38px;
  }
  p {
    font-size: 16px;
    line-height: 21px;
  }
  #membership-call-box {
    padding:10px 10px;
  }
  #logo {
    Margin: 10px auto;
    width: 100%;
    max-width: 300px;
  }
	p.hk_leadin {font-size: 24px !important;
		line-height: 28px !important;}

  @media screen and (max-width: 480px) {
    body, .wrapper {background-color: #fff !important;
    Margin: 0 auto !important;
    padding: 0;
    }
    .layout {
    background-color: #fff;
    Margin: 0 auto;
    width: 100% !important;
    }
    .spacing {
    Margin: 0 auto !important;
    width: 85% !important;
    }
    .wide, .narrow, .even_left, .even_right {
    width: 100% !important;
    max-width: 100% !important;
    }
    .even_left {
	margin-top: 0 !important;
    border-bottom: 1px solid #767676;
    border-right: none !important;
    }
	.even_right {
	margin-top: 20px !important;
	}
    p {
    font-size: 24px !important;
    line-height: 28px !important;
    }
    .headers_text {
    font-size: 12px !important;
    line-height: 16px !important;
    }
    #date_line {
    font-size: 14px !important;
    line-height: 18px !important;
    }
    }

  @media yahoo {
    p {margin: 10px 0;}
    .layout {margin: 0 auto;}
    }
  </style>
  <table width="100%" class="wrapper" align="center" style="Margin:0 auto;padding:0;background-color:#e9e9e9;" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <!--[if (gte mso 9)|(IE)]>
        <table width="620" align="center" border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;padding:0;background-color: #fff;border-spacing:0;">
          <tr>
            <td>
        <![endif]-->
        <table class="layout" align="center" cellpadding="0" cellspacing="0" width="620" style="Margin:0 auto;background-color: #fff;max-width:620px;">
        	  <tr>
			<td>
				<div style="width:145px;text-align:center;margin:10px auto;" align="center">
					<a href="https://www.motherjones.com"><img src="https://cdn.maropost.com/pro/uploads/account_585/215784/MoJoLoGo.png" style="max-width:145px;width:145px;" width="145"></a>
				</div>
			</td>
		  </tr>
          <tr>
            <td align="center" style="line-height:0;margin: 0;padding:0;">
              <img src="https://cdn.maropost.com/pro/uploads/account_585/222761/header_FFT_orange.png" width="620" style="Margin:0 auto;width:100%;max-width:100%;height:auto;line-height:0;" alt="Food for Thought" />
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
                <tr>
                		<td style="border-bottom:1px solid #767676;line-height:0;">
						<center><a href="$fft_main_hed_url"><img src="$fft_main_img" style="Margin: 0 auto 5px auto;width:100%;max-width: 100%; height: auto;" width="540" alt="Food for Thought" border="0" /></a></center>
						$main_section
						<!--[if (gte mso 9)|(IE)]><br><br><![endif]-->
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #767676;">
						<p class="ad_text" style="margin-top:0;color: #222; text-align: center;font-family:Georgia, serif; font-size: 12px;font-style:italic;">&#8212;Advertisement&#8212;</p>
						$billboard_ad
						<br>
						<!--[if (gte mso 9)|(IE)]><br><br><![endif]-->
                  </td>
                </tr>
				$ogt_section
				$ioe_section
				$hidden_kitchen_sec
				</tr>
				<tr>
					<td align="center" style="border-bottom: 1px solid #767676;">
						<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
						<p class="mobile-format" style="margin:10px 0 0 0 !important;text-align:center;font-family:Georgia, serif;font-weight:bold;color:#000;font-size:16px;line-height:21px">Hungry for more food news?</p>
						<p class="mobile-format" style="margin: 5px 0 20px 0 !important;text-align: center; font-family:Georgia, serif; color: #222;font-size: 16px;line-height:21px;">Follow Mother Jones Food on <a href="https://twitter.com/MotherJonesFood" style="color: #222;border-bottom: 1px solid #ff6900;text-decoration:none;">Twitter</a> and <a href="https://www.facebook.com/motherjonesfood/" style="color: #222;border-bottom: 1px solid #ff6900;text-decoration:none;">Facebook</a>, and find all of our food stories at <a href="https://www.motherjones.com/food" style="color: #222;border-bottom: 1px solid #ff6900;text-decoration:none;">www.motherjones.com</a></p>
						<p class="mobile-format" style="margin: 0 0 20px 0; padding: 0;text-align:center; font-family:Georgia, serif; color: #222;font-size: 16px;line-height:21px;"><span style="font-family:Georgia, serif;font-weight: bold; color: #000;">Did someone forward this to you?</span><br /><a style="color: #222;border-bottom: 1px solid #ff6900;text-decoration:none;margin:15px 0;" href="http://www.motherjones.com/about/interact-engage/free-email-newsletter">Click here</a> to sign up to get more <em>Food for Thought</em> in your inbox</em>!</p>
						$fft_image_creds
						<!--[if (gte mso 9)|(IE)]><br><br><![endif]-->
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #767676;" align="center">
						$billboard_ad2
						<br>
						<!--[if (gte mso 9)|(IE)]><br><br><![endif]-->
					</td>
                </tr>
                <tr>
                  <td align="center">
                    $global_footer
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
$fft_image_creds = addslashes($fft_image_creds);

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
	fft_ioe3_url = '$fft_ioe3_url',
	image_creds = '$fft_image_creds'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO food_for_thought_redesign(hed_date,fft_main_hed,fft_main_hed_url,fft_main_img,fft_article_1,fft_article_2,fft_article_3,fft_article_4,fft_article_5,fft_article_6,snack_box,fft_snack_box,fft_sb_image,fft_sb_attr,in_our_ears,fft_ioe_item1,fft_bite_add,fft_bite_link,fft_ioe_item2,fft_ioe_item3,hidden_kitchen,fft_hk_leadin,fft_hidden_kitchen,subject_line,ad_name,ad_billboard,ad_link_bill,ad_name2,ad_link_banner,ad_banner,sub_url,sub_image,sub_text,sub_code,membership_slot,lift_note,pixel_tracker,pixel_tracker2,fft_a1_source,fft_a1_ital,fft_a1_url,fft_a2_source,fft_a2_ital,fft_a2_url,fft_a3_source,fft_a3_ital,fft_a3_url,fft_a4_source,fft_a4_ital,fft_a4_url,fft_a5_source,fft_a5_ital,fft_a5_url,fft_a6_source,fft_a6_ital,fft_a6_url,fft_ioe1_source,fft_ioe1_ital,fft_ioe1_url,fft_ioe2_source,fft_ioe2_ital,fft_ioe2_url,fft_ioe3_source,fft_ioe3_ital,fft_ioe3_url,image_creds)
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
	'$fft_ioe3_url',
	'$fft_image_creds')";
}
//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>