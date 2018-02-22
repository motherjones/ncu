<?php
header("Content-Type: text/html;charset=UTF-8");
//for error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);
/* -------------------------- */

/* include files */
// for db
/* database credentials are located in the credentials.inc file */
include "credentials.inc";
/*for the CSS to be injected into the HTML file (PHP)
 All non-inline CSS is in this file
 */
include "styles_includes.php";
/* end include section */

/* file path variable for writing out html file */
$long_path = getcwd() . "/";

/* check preview section */
$close_btn = "";
$db_run = false;
if(isset($_REQUEST['preview']) && $_REQUEST['preview'] == "true") {
	//preview mode, but save file as well
	$close_btn = "<div style=\"margin:0 auto;width:100px;padding:10px 20px;\"><input type=\"button\" value=\"close preview\" onclick=\"javascript:window.close();\" /></div>";
	$relocate_me = "";
}
else {
	//run db queries
	$close_btn = "";
	$db_run = true;
	$relocate_me = "<script type=\"text/javascript\">location.href='archives'</script>";
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

//small subs section
$small_sub_ad = "";
$sub_url = "";
$sub_image = "";
$sub_text = "";
$sub_code = "";
$membership_area = "";
$membership_slot = "";
$membership_area_p = "<p class=\"mobile-format\" style=\"margin: 20px 0; color: #ff6900;font-size: 18px;text-transform: uppercase;\">";

if(isset($_REQUEST['membership_slot']) && $_REQUEST['membership_slot'] != null) {
	if($headlines_type !== "trumpocracy") {
		$membership_slot = trim($_REQUEST['membership_slot']);
		$membership_slot = str_replace("<p>", $membership_area_p, $membership_slot);
		$membership_slot = str_replace("<a", "<a style=\"color: #000; \"", $membership_slot);
	}
	else {
		$membership_slot = "<div id=\"membership-call-box\" style=\"margin:0 auto;\">\n\t<p style=\"font-weight:bold;font-family:Georgia, serif;color: #000;text-align:center;font-size: 16px; line-height: 21px;\">Support hard-hitting journalism</p>\n\t<p style=\"font-family:Georgia, serif;color:#000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> and all our reporting is made possible by readers like you. Support our investigations with a <a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043\" style=\"color: #ff6900;\">tax-deductible donation</a>.</p>\n\t</div>\n";
	}
}
else {
	if($headlines_type == "trumpocracy") {
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
	
	if($headlines_type === "trumpocracy") {
		$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"width:540px;max-width:540px;Margin:0 auto 20px auto;\" width=\"540\" alt=\"$sub_text\" border=\"0\" /></a>";
		//$small_sub_ad = "<table width=\"540\" height=\"180\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" style=\"max-width:540px;width:540px;\"><tr><td colspan=\"3\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191482/storead_Newsletter_540x180_01.jpg\" width=\"540\" height=\"38\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><a href=\"https://store.motherjones.com/?utm_source=NewsletterAd&utm_medium=Holiday_2017\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191483/storead_Newsletter_540x180_02.jpg\" width=\"132\" height=\"142\" alt=\"\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191484/storead_Newsletter_540x180_03.jpg\" width=\"264\" height=\"142\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=Y7CENL1&sub_type=GIF\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191485/storead_Newsletter_540x180_04.jpg\" width=\"144\" height=\"142\" alt=\"\"></a></td></tr></table><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
		/*$small_sub_ad = "<table align=\"center\" width=\"540\" height=\"225\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:540px;max-width:540px;\"><tr><td colspan=\"4\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194705/NewsletterAd1_120117_540_01.jpg\" width=\"540\" height=\"171\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194706/NewsletterAd1_120117_540_02.jpg\" width=\"218\" height=\"29\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"http://www.motherjones.com/media/2017/12/a-perfect-storm-for-journalism/?list_source=7H7CNLP0&term=XX.1.50.00.DON.D.0.8865\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194707/NewsletterAd1_120117_540_03.jpg\" width=\"113\" height=\"29\" alt=\"Read More\"></a></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7H7CNLP0&term=XX.1.50.00.DON.D.0.8865\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194708/NewsletterAd1_120117_540_04.jpg\" width=\"86\" height=\"29\" alt=\"Donate\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194709/NewsletterAd1_120117_540_05.jpg\" width=\"123\" height=\"29\" alt=\"\"></td></tr><tr><td colspan=\"4\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194710/NewsletterAd1_120117_540_06.jpg\" width=\"540\" height=\"25\" alt=\"\"></td></tr></table><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";*/
	}
	else {
		$small_sub_ad = "<a href=\"$sub_url\"><img id=\"sub_ad\" src=\"$sub_image\" style=\"max-width: 600px;width:600px;border: none !important;\" width=\"600\" alt=\"$sub_text\" border=\"0\" /></a>";
		//$small_sub_ad = "<table width=\"600\" height=\"200\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" style=\"max-width:600px;width:600px;\"><tr><td colspan=\"3\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191486/storead_Newsletter_600x200_01.jpg\" width=\"600\" height=\"43\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><a href=\"https://store.motherjones.com/?utm_source=NewsletterAd&utm_medium=Holiday_2017\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191487/storead_Newsletter_600x200_02.jpg\" width=\"147\" height=\"157\" alt=\"Mother Jones Store\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191488/storead_Newsletter_600x200_03.jpg\" width=\"293\" height=\"157\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=Y7CENL1&sub_type=GIF\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/191489/storead_Newsletter_600x200_04.jpg\" width=\"160\" height=\"157\" alt=\"Subscribe to Mother Jones\"></a></td></tr></table><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
		/*$small_sub_ad = "<table align=\"center\" width=\"600\" height=\"250\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;max-width:600px;\"><tr><td colspan=\"4\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194699/NewsletterAd1_120117_01.jpg\" width=\"600\" height=\"191\" alt=\"\"></td></tr><tr><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194700/NewsletterAd1_120117_02.jpg\" width=\"243\" height=\"31\" alt=\"\"></td><td style=\"line-height:1px;\"><a href=\"http://www.motherjones.com/media/2017/12/a-perfect-storm-for-journalism/?list_source=7H7CNLP0&term=XX.1.50.00.DON.D.0.8865\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194701/NewsletterAd1_120117_03.jpg\" width=\"125\" height=\"31\" alt=\"Read More\"></a></td><td style=\"line-height:1px;\"><a href=\"https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7H7CNLP0&term=XX.1.50.00.DON.D.0.8865\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194702/NewsletterAd1_120117_04.jpg\" width=\"95\" height=\"31\" alt=\"Donate\"></a></td><td style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194703/NewsletterAd1_120117_05.jpg\" width=\"137\" height=\"31\" alt=\"\"></td></tr><tr><td colspan=\"4\" style=\"line-height:1px;\"><img src=\"https://cdn.maropost.com/pro/uploads/account_585/194704/NewsletterAd1_120117_06.jpg\" width=\"600\" height=\"28\" alt=\"\"></td></tr></table><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";*/
	}
}

//temporary code for subs slot

//end temporary code subs slot section

//lift-note section
$lift_note = "";
if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] !== null && $_REQUEST['lift_note'] !== "") {
	$lift_note_temp = trim($_REQUEST['lift_note']);
	$lift_note = trim($_REQUEST['lift_note']);
}

//live intent ads
$liveintent_billboard = false;
$liveintent_banner = false;
$liveintent_billboard2 = false;
//Econundrum tags
//billboard 1
$econundrums_billboard = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=153015&sz=300x250&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=153015&sz=300x250&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=153016&sz=1x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=153017&sz=1x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";
//billboard 2
$econundrums_billboard2 = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=68930&sz=300x250&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68930&sz=300x250&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=68931&sz=1x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68932&sz=1x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";

//in the mix
//billboard 1
$inthemix_billboard = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=68942&sz=300x250&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68942&sz=300x250&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=68943&sz=1x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68944&sz=1x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";
//billboard 2
$inthemix_billboard2 = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=153009&sz=300x250&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=153009&sz=300x250&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=153010&sz=1x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=153011&sz=1x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";

//political mojo
//billboard 1
$politicalmojo_billboard = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=68948&sz=300x250&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68948&sz=300x250&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=68949&sz=1x1&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68950&sz=1x1&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";
//billboard 2
$politicalmojo_billboard2 = "<table style=\"margin-top: 20px;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"300\" height=\"250\"><tr><td><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=153006&sz=300x250&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=153006&sz=300x250&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=153007&sz=1x1&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=153008&sz=1x1&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=politicalmojo&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";

//food for thought redesign
//billboard 1
$fft_redesign_billboard1 = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  align=\"center\" style=\"max-width: 540px;margin-left:auto; margin-right:auto;margin-bottom: 20px;\"><tr><td colspan=\"2\"><a href=\"http://li.motherjones.com/click?s=142114&layout=marquee&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142114&layout=marquee&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\" style=\"display: block; width:100%; height:auto;\" width=\"540\" /></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=142115&sz=1x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=142116&sz=1x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=142117&sz=116x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142117&sz=116x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=142118&sz=69x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142118&sz=69x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\"/></a></td></tr></table>";
//billboard 2
$fft_redesign_billboard2 = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  align=\"center\" style=\"max-width: 540px;margin-left:auto; margin-right:auto;margin-bottom: 20px;\"><tr><td colspan=\"2\"><a href=\"http://li.motherjones.com/click?s=142114&layout=marquee&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142114&layout=marquee&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\" style=\"display: block; width:100%; height:auto;\" width=\"540\" /></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=142115&sz=1x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=142116&sz=1x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=142117&sz=116x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142117&sz=116x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=142118&sz=69x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=142118&sz=69x15&li=foodforthought&e={{contact.email}}&p={{campaign.id}}1478636107\" border=\"0\"/></a></td></tr></table>";

//trumpocracy
//billboard 1
$trump_billboard1 = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  align=\"center\" style=\"margin-left:auto; margin-right:auto;\"><tr><td colspan=\"2\"><a href=\"http://li.motherjones.com/click?s=243153&layout=marquee&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=243153&layout=marquee&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" style=\"display: block; width:100%; height:auto;\" width=\"540\" /></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=243154&sz=1x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=243155&sz=1x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=243156&sz=116x15&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=243156&sz=116x15&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=243157&sz=69x15&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=243157&sz=69x15&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";

//Breaking News
//billboard 1
$breakingnews_billboard1 = "<table style=\"margin: 20px auto;width:300px;height:250px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td colspan=\"2\"><a style=\"display: block; width: 300px; height: 250px;\" href=\"http://li.motherjones.com/click?s=244437&sz=300x250&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=244437&sz=300x250&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\" width=\"300\" height=\"250\"/></a></td></tr><tr style=\"display:block; height:1px; line-height:1px;\"><td><img src=\"http://li.motherjones.com/imp?s=244438&sz=1x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td><td><img src=\"http://li.motherjones.com/imp?s=244439&sz=1x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" height=\"1\" width=\"10\" /></td></tr><tr><td align=\"left\"><a href=\"http://li.motherjones.com/click?s=68884&sz=116x15&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=68884&sz=116x15&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td><td align=\"right\"><a href=\"http://li.motherjones.com/click?s=96569&sz=69x15&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" rel=\"nofollow\"><img src=\"http://li.motherjones.com/imp?s=96569&sz=69x15&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp\" border=\"0\"/></a></td></tr></table>";

//billboard
if ((isset($_REQUEST['billboard_url']) && $_REQUEST['billboard_url'] != null) || (isset($_REQUEST['billboard_img']) && $_REQUEST['billboard_img'] != "")) {
	$billboard_url = $_REQUEST['billboard_url'];
	$billboard_image = $_REQUEST['billboard_img'];
	
	if($headlines_type == "food_for_thought_redesign") {
		$billboard_ad = "<div style=\"margin-top:10px;margin-bottom:20px;width:100% !important;\"><a href=\"$billboard_url\" name=\"Top Ad - $advertiser_name\"><img id=\"bill_a\" src=\"$billboard_image\" style=\"width:540px;border: none;\" alt=\"$advertiser_name\" width=\"540\" border=\"0\" /></a>$pixel_tracker</div>\n";
	}
	elseif ($headlines_type == "trumpocracy") {
		$billboard_ad = "<div style=\"margin-top:10px;margin-bottom:0;width:100% !important;text-align:center;\"><a href=\"$billboard_url\" name=\"Top Ad - $advertiser_name\"><img id=\"bill_a\" src=\"$billboard_image\" style=\"width:540px;border: none;\" alt=\"$advertiser_name\" width=\"540\" border=\"0\" /></a>$pixel_tracker</div>\n";
	}
	else {
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
	}
}
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
	//$billboard_url = $house_bill[$randbill_num][1];
	$liveintent_billboard2 = true;
	$billboard_url2 = null;
	$billboard_image2 = null;
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
//banner

/* --------------------end ad section------------------- */

//get headline date and format human readable
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);
/* ---------------------------------- */

//call to getEmail function
//getEmail();

/* section for global items for all headlines */
//subscription language

//allowed html for conertP function -- not used right now
$allowed_html = "<a><br /><br><b><i><em><strong><blockquote><table>";
//for the archives, generate full HTML file
$html_title = ucwords($headlines_type);
//$html_header = "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">\n<head>\n<title>$html_title</title>\n</head>\n<body>";
//$html_footer = "</body></html>";
$subject_line_display = str_replace("–","&#8212;", $subject_line);
$subject_formatting = "<p style=\"text-align:center;\"><em>Subject line:</em> $subject_line_display</p>\n <!-- start headlines code -->";
//end global items for all headlines

/* headlines template section */
$html_file = "";
//print $html_header;
print $subject_formatting;
//if preview mode, print out the close button
if(isset($close_btn) && $close_btn != "") {
	print "<br style=\"clear:both;\" />";
	print $close_btn;
}
//get the correct template for the headlines
//get code for the HTML to add to the archives ($html_file)

/*$separator_format = "<p style=\"margin:0 0 2px 0;border-bottom:1px dotted #000000;\">&nbsp;</p>";*/
/* <a href=""><img src="http://assets.motherjones.com/newsletters/images/subscribe.png" alt="Subscribe" style="width:200px;min-width:100px;" /></a>*/
$view_code = "<p style=\"margin:0 auto;width:640px;background-color:#003;border-style: 2px outset #099;border-radius:5px;text-align:center;padding:10px;font-size:16px;\"><a href=\"../\" style=\"color:#FFD700;\">Back to Main Page</a> | <a href=\"index.php\" style=\"color:#FFDF00;\">Back to Archives</a> <br /> <a href=\"#get_code\" style=\"color:#9ff;\">View Code</a></p>";

$facebook_icon = "<img id=\"fb_icon_main\" src=\"http://assets.motherjones.com/newsletters/images/facebook_icon_btm.png\" style=\"$fb_icon_style\" width=\"54\" />";
$twitter_icon = "<img id=\"tt_icon_main\" src=\"http://assets.motherjones.com/newsletters/images/twitter_icon_btm.png\" alt=\"tweet this\" style=\"$ttr_icon_style\" width=\"54\" />";

switch($headlines_type) {
	case "econundrums_new":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Econundrums</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "in_the_mix_new":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>In the Mix</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "political_mojo_new":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Political MoJo</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "food_for_thought_redesign":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Food for Thought</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "breaking_news":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\">This news alert comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "trumpocracy":
		$newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
}

$trumpocracy_footer = <<<TRUMPFOOT
<table align="center" style="margin:0 auto;width:450px;max-width:450px;">
	<tr>
		<td class="no_top_pad" style="padding: 0;text-align:center;" align="center">
			<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043&a_first_name={{contact.first_name}}&a_last_name={{contact.last_name}}&a_address_1={{contact.street_1}}&a_city={{contact.city}}&a_state={{contact.state_province}}&a_zip={{contact.zip_code}}&a_email={{contact.email}}&account_no={{contact.icn_account_number}}&rel_rec_no={{contact.wk_sub_rel}}"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206932/20180220_donate.png" alt="Donate" style="width:150px;min-width:100px;"  width="150" hspace="15" vspace="0" /></a>
		</td>
		<td style="padding: 0;text-align:center;" align="center">
			<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206921/20180220_suscribe_2.png" alt="Subscribe to Mother Jones" style="width:150px;min-width:100px;margin-top: 10px;margin-bottom:10px;" width="150" hspace="15" vspace="0" /></a>
		</td>
	</tr>
	<tr>
		<td align="center" style="margin-top: 15px;text-align:center;" colspan="2">
			<img src="http://assets.motherjones.com/newsletters/newsletter_test/mojo_logo_btm_bw.png" style="width:300px;max-width: 300px;margin: 20px auto;" width="300" />
		</td>
	</tr>
</table>
TRUMPFOOT;

$global_footer = <<<FOOTER
<table align="center" style="width:100%;">
	<tr>
		<td align="center">
			<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
			$newsletter_info
		</td>
	</tr>
	<tr>
		<td align="center">
			<table align="center" style="margin:0 auto;width:450px;max-width:450px;">
				<tr>
					<td class="no_top_pad" style="padding: 0;text-align:center;" align="center">
							<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043&a_first_name={{contact.first_name}}&a_last_name={{contact.last_name}}&a_address_1={{contact.street_1}}&a_city={{contact.city}}&a_state={{contact.state_province}}&a_zip={{contact.zip_code}}&a_email={{contact.email}}&account_no={{contact.icn_account_number}}&rel_rec_no={{contact.wk_sub_rel}}"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206932/20180220_donate.png" alt="Donate" style="width:150px;min-width:100px;"  width="150" hspace="15" vspace="0" /></a>
					</td>
					<td style="padding: 0;text-align:center;" align="center">
						<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206921/20180220_suscribe_2.png" alt="Mother Jones Store" style="width:150px;min-width:100px;margin-top: 10px;margin-bottom:10px;" width="150" hspace="15" vspace="0" /></a>
					</td>
				</tr>
				<tr>
					<td align="center" style="margin-top: 15px;text-align:center;" colspan="2">
						<img src="http://assets.motherjones.com/newsletters/newsletter_test/mojo_logo_btm_bw.png" style="width:300px;max-width: 300px;margin: 10px auto;" width="300" />
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
FOOTER;

$page_name = $headlines_date . " | " . $headlines_type;
$html_headers = sprintf("<!DOCTYPE html>\n<html>\n<head><title>%s</title><meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"></head><body>", $page_name);
$html_footers = "</body>\n</html>";

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
 format for the archive is yyyy-mm-dd-headlinestype.html
 */
$random_var = time();
$complete_path = $long_path . "archives/$headlines_date" . "-$headlines_type" . ".html";
$temp_path = $long_path . "temp/$headlines_date" . "-$headlines_type" . "-" . $random_var . ".html";
/*make sure directory is writeable before you run this piece of code, or it'll generate an error */

$file_handle = fopen($complete_path, "w+") or die("Can't open file");
$file_handle2 = fopen($temp_path, "w+") or die("Can't open file");

fwrite($file_handle, stripslashes($html_file));
fwrite($file_handle2, stripslashes($html_file));
print $relocate_me;
/* end write html file to server section */
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
/* getEmail function which will get the emails for the web team */
/* not functioning right now */
function getEmail() {
	if(isset($_POST['email']) && $_POST['email'] != "") {
		$email_array = $_POST['email'];
		$count = count($email_array);
		if(isset($_POST['liz'])) {
			$liz = $_POST['liz'];
			
			for($e = 0; $e < $count; $e++) {
				print $email_array[$e];
				if(isset($liz) && $liz != "") {
					print $liz;
				}
			}
		}
	}
}
/*end get email section */
/* --------------------------------------- */

/* this function converts <p> from the wysiwig and places correct styles into them */
function convertP($text) {
	//do not strip these from the text
	$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr>";
	//globalize variables outside this function
	global $p_deks;
	global $p_deks_bottom_border;
	
	//break apart text into arrays based on closing </p> tags
	$exploded = explode("</p>", $text);
	//get array count
	$count = count($exploded);
	$temp_array = "";
	$count_existing = 0;
	
	/* loop through array, remove those indexes with only HTML tags or empty string, place the
	 rest into a temporary array */
	for($x = 0; $x < $count; $x++) {
		/*get rid of empty indexes with only HTML tags
		 (these are empty text generated by the explode function)*/
		$exploded[$x] = strip_tags(trim($exploded[$x]), $allowed_html);
		if($exploded[$x] != "" || $exploded[$x] != null) {
			$temp_array[$count_existing] = $exploded[$x];
			$count_existing++;
		}
	}
	//count temp array with only useful text
	$count2 = count($temp_array);
	
	//loop through array and place <p> tags back with styling
	for($i = 0; $i < $count2; $i++) {
		if($i != $count2 - 1 && $i != 0) {
			$temp_array[$i] = strip_tags(trim($temp_array[$i]), $allowed_html);
			$temp_array[$i] = "<p style=\"$p_deks\">" . $temp_array[$i] . "</p>";
		}
		else {
			$temp_array[$i] = strip_tags(trim($temp_array[$i]), $allowed_html);
			$temp_array[$i] = "<p style=\"$p_deks_bottom_border\">" . $temp_array[$i]. "</p>";
		}
		if($i == 0) {
			$temp_array[$i] = strip_tags(trim($temp_array[$i]), $allowed_html);
			$temp_array[$i] = "<p style=\"$p_deks\">" . $temp_array[$i] . "</p>";
		}
	}
	//join array into string using </p> as delimiter
	$joined = implode($temp_array);
	$pos = strrpos($joined, "</p>");
	//remove trailing </p> tag for final formatting
	$temp = substr_replace($joined, "", $pos);
	
	return $temp;
}