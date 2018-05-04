<?php
//small subs section for membership ads
$small_sub_ad = "";
$sub_url = "";
$sub_image = "";
$sub_text = "";
$sub_code = "";
$membership_area = "";
$membership_slot = "";
$membership_area_p["class"] = "mobile-format";
$membership_area_p["style"] = "margin: 20px 0; color: #ff6900;font-size: 18px;text-transform: uppercase;";

if(isset($_REQUEST['membership_slot']) && $_REQUEST['membership_slot'] != null) {
	if($headlines_type !== "trumpocracy") {
		$membership_slot = trim($_REQUEST['membership_slot']);
		$membership_slot = modifyHTML($membership_slot, "p", $membership_area_p);
		$membership_slot = modifyHTML($membership_slot, "a", "style", "color:#000;");
	}
	else {
		$membership_slot = "<div id=\"membership-call-box\" style=\"margin:0 auto;\">\n\t<p style=\"font-weight:bold;font-family:Georgia, serif;color: #000;text-align:center;font-size: 16px; line-height: 21px;\">Support hard-hitting journalism</p>\n\t<p style=\"font-family:Georgia, serif;color:#000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> and all our reporting is made possible by readers like you. Support our investigations with a <a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043\" style=\"color: #ff6900;\">tax-deductible donation</a>.</p>\n\t</div>\n";
	}
}
else {
	if($headlines_type === "trumpocracy") {
		$membership_slot = "<div id=\"membership-call-box\" style=\"margin:0 auto;\">\n\t<p style=\"font-weight:bold;font-family:Georgia, serif;color: #000;text-align:center;font-size: 16px; line-height: 21px;\">Support hard-hitting journalism</p>\n\t<p style=\"font-family:Georgia, serif;color:#000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> and all our reporting is made possible by readers like you. Support our investigations with a <a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043\" style=\"color: #ff6900;\">tax-deductible donation</a>.</p>\n\t</div>\n";
	}
	else {
		$membership_slot = "<p class=\"mobile-format\" style=\"margin: 20px 0; color: #ff6900;font-size: 18px;text-transform: uppercase;\">Support hard-hitting journalism.<br />
If you value what you read from <em>Mother Jones</em> and want to see more of it, please make a tax-deductible <a href=\"https://secure.motherjones.com/fnx/?action=subscription&pub_code=don&term_pub=don&b_country=united+states&list_source=7H6CNLP2&term=xx.1.50.00.don.d.0.2870\" style=\"color: #000;\">one-time</a> or <a href=\"https://secure.motherjones.com/fnx/?action=subscription&pub_code=sdn&term_pub=sdn&b_country=united+states&list_source=7H6CNLP2&term=xx.1.20.00.sdn.d.0.2872\" style=\"color: #000;\">monthly donation</a> today and help fund our unrelenting, nonprofit journalism.</p>";
	}
}

if(isset($_REQUEST['sub_code']) && $_REQUEST['sub_code'] != null) {
	$sub_code = trim($_REQUEST['sub_code']);
	$small_sub_ad = $sub_code;
}
else {
	if(isset($_REQUEST['sub_url']) && $_REQUEST['sub_url'] != null) {
		$sub_url = trim($_REQUEST['sub_url']);
	}
	else {
		$sub_url = "https://store.motherjones.com/collections/recently-added/products/motherjones-facts-mtee?utm_source=newsletter&utm_campaign=2017_facts&utm_medium=newsletter&utm_content=evergreen_facts";
	}
	
	if(isset($_REQUEST['sub_image']) && $_REQUEST['sub_image'] != null) {
		$sub_image = $_REQUEST['sub_image'];
	}
	else {
		$sub_image = "https://cdn.maropost.com/pro/uploads/account_585/133987/storead_600x250_012417.jpg";
	}
	
	if(isset($_REQUEST['sub_text']) && $_REQUEST['sub_text'] != null) {
		$sub_text = $_REQUEST['sub_text'];
	}
	else {
		$sub_text = "Mother Jones Store";
	}
	
	if($headlines_type === "trumpocracy" || $headlines_type === "recharge") {
		//$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"width:540px;max-width:540px;Margin:0 auto 20px auto;\" width=\"540\" alt=\"$sub_text\" border=\"0\" /></a>";
		$small_sub_ad = "<table align=\"center\" width=\"540\" height=\"225\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"max-width: 540px;width:540px;\"><tr><td style=\"line-height:1px;\" colspan=\"4\"><img src=\"
		https://cdn.maropost.com/pro/uploads/account_585/209328/20180215_NLad-1_540_01.jpg\" width=\"540\" height=\"133\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\" rowspan=\"4\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209329/20180215_NLad-1_540_02.jpg\" width=\"99\" height=\"92\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN0\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209330/20180215_NLad-1_540_03.jpg\" width=\"96\" height=\"23\" alt=\"Subscribe\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209331/20180215_NLad-1_540_04.jpg\" width=\"48\" height=\"23\" alt=\"\"></td><td style=\"line-height:1px;\" rowspan=\"4\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209332/20180215_NLad-1_540_05.jpg\" width=\"297\" height=\"92\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\" colspan=\"2\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209333/20180215_NLad-1_540_06.jpg\" width=\"144\" height=\"20\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209334/20180215_NLad-1_540_07.jpg\" width=\"96\" height=\"22\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=YEGMN0\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209335/20180215_NLad-1_540_08.jpg\" width=\"48\" height=\"22\" alt=\"Give\"></a></td></tr><tr><td style=\"line-height:1px;\" colspan=\"2\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209336/20180215_NLad-1_540_09.jpg\" width=\"144\" height=\"27\" alt=\"\"></td></tr></table>";
	}
	else {
		//$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"max-width: 600px;width:600px;border: none !important;\" width=\"600\" alt=\"$sub_text\" border=\"0\" /></a>";
		$small_sub_ad = "<table align=\"center\" width=\"600\" height=\"250\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"max-width: 600px;width:600px;\"><tr><td style=\"line-height:1px;\" colspan=\"4\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209318/20180215_NLad-1_01.jpg\" width=\"600\" height=\"147\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\" rowspan=\"4\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209319/20180215_NLad-1_02.jpg\" width=\"110\" height=\"103\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN0\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209320/20180215_NLad-1_03.jpg\" width=\"106\" height=\"26\" alt=\"Subscribe\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209321/20180215_NLad-1_04.jpg\" width=\"54\" height=\"26\" alt=\"\"></td><td style=\"line-height:1px;\"  rowspan=\"4\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209322/20180215_NLad-1_05.jpg\" width=\"330\" height=\"103\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209323/20180215_NLad-1_06.jpg\" width=\"106\" height=\"23\" alt=\"\"></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209324/20180215_NLad-1_07.jpg\" width=\"54\" height=\"23\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209325/20180215_NLad-1_08.jpg\" width=\"106\" height=\"24\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=YEGMN0\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209326/20180215_NLad-1_09.jpg\" width=\"54\" height=\"24\" alt=\"Give\"></a></td></tr><tr><td style=\"line-height:1px;\" colspan=\"2\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/209327/20180215_NLad-1_10.jpg\" width=\"160\" height=\"30\" alt=\"\"></td></tr></table>";
	}
}
?>