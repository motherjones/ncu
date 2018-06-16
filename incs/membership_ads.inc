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

if(isset($_REQUEST['membership_slot']) && $_REQUEST['membership_slot'] !== null) {
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

if(isset($_REQUEST['sub_code']) && $_REQUEST['sub_code'] !== "") {
	$sub_code = trim($_REQUEST['sub_code']);
	$small_sub_ad = $sub_code;
}
else {
	if(isset($_REQUEST['sub_url']) && $_REQUEST['sub_url'] !== "") {
		$sub_url = trim($_REQUEST['sub_url']);
	}
	else {
		if($headlines_type === "food_for_thought_redesign") {
			$sub_url = "";
		}
		else {
			$sub_url = "https://store.motherjones.com/collections/recently-added/products/motherjones-facts-mtee?utm_source=newsletter&utm_campaign=2017_facts&utm_medium=newsletter&utm_content=evergreen_facts";
		}
	}
	
	if(isset($_REQUEST['sub_image']) && $_REQUEST['sub_image'] != null) {
		$sub_image = $_REQUEST['sub_image'];
	}
	else {
		if($headlines_type === "food_for_thought_redesign") {
			$sub_image = "";
		}
		else {
			$sub_image = "https://cdn.maropost.com/pro/uploads/account_585/133987/storead_600x250_012417.jpg";
		}
	}
	
	if(isset($_REQUEST['sub_text']) && $_REQUEST['sub_text'] != null) {
		$sub_text = $_REQUEST['sub_text'];
	}
	else {
		$sub_text = "Mother Jones Store";
	}
	
	if($headlines_type === "trumpocracy" || $headlines_type === "recharge") {
		$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"width:540px;max-width:540px;Margin:0 auto 20px auto;\" width=\"540\" alt=\"$sub_text\" border=\"0\" /></a>";
	}
	elseif($headlines_type === "food_for_thought_redesign") {
		if($sub_url === "" || $sub_image === "") {
			$small_sub_ad = "";
		}
		else {
			$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"width:540px;max-width:540px;Margin:0 auto 20px auto;\" width=\"540\" alt=\"$sub_text\" border=\"0\" /></a>";
		}
	}
	else {
		$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"max-width: 600px;width:600px;border: none !important;\" width=\"600\" alt=\"$sub_text\" border=\"0\" /></a>";
	}
}
?>