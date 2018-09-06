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

if($headlines_type === "trumpocracy") {
	$membership_slot = "<div id=\"membership-call-box\" style=\"margin:0 auto;\">\n\t<p style=\"font-weight:bold;font-family:Georgia, serif;color: #000;text-align:center;font-size: 16px; line-height: 21px;\">Support hard-hitting journalism</p>\n\t<p style=\"font-family:Georgia, serif;color:#000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> and all our reporting is made possible by readers like you. Support our investigations with a <a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043\" style=\"color: #ff6900;\">tax-deductible donation</a>.</p>\n\t</div>\n";
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
		$sub_url = "";
	}
	
	if(isset($_REQUEST['sub_image']) && $_REQUEST['sub_image'] !== "") {
		$sub_image = $_REQUEST['sub_image'];
	}
	else {
		$sub_image = "";
	}
	
	if(isset($_REQUEST['sub_text']) && $_REQUEST['sub_text'] !== "") {
		$sub_text = $_REQUEST['sub_text'];
	}
	else {
		$sub_text = "";
	}
	
	if($headlines_type === "trumpocracy") {
		$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"width:540px;max-width:540px;Margin:0 auto 20px auto;\" width=\"540\" alt=\"$sub_text\" border=\"0\" /></a>";
	}
	else if($headlines_type === "food_for_thought_redesign" || $headlines_type === "recharge") {
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
	
	if($sub_url === "" && $sub_image === "" && $sub_text === "") {
		if($headlines_type !== "trumpocracy" || $headlines_type !== "recharge" || $headlines_type !== "food_for_thought_redesign") {
			$ads_array = getDefaultAd($headlines_date);
			if(isset($ads_array['sub_code']) && $ads_array['sub_code'] !== "") {
				$small_sub_ad = $ads_array['sub_code'];
			}
			else {
				$sub_url = $ads_array['sub_url'];
				$sub_image = $ads_array['sub_image'];
				$sub_text = $ads_array['sub_text'];
				$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"max-width: 600px;width:600px;border: none !important;\" width=\"600\" alt=\"$sub_text\" border=\"0\" /></a>";
			}
		}
	}
}
?>