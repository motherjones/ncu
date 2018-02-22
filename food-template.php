<?php
/* food for thought template */
/* sections variables */
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['maindish_hed']) && $_REQUEST['maindish_hed'] != "") {
    $maindish_hed = trim($_REQUEST['maindish_hed']);
    $maindish_hed_enc = urlencode($maindish_hed);
}
else {
    $maindish_hed = "";
    $maindish_hed_enc = "";
}
if(isset($_REQUEST['maindish_url']) && $_REQUEST['maindish_url'] != "") {
    $maindish_url = trim($_REQUEST['maindish_url']);
}
else {
    $maindish_url = "";
}

if(isset($_REQUEST['maindish_dek']) && $_REQUEST['maindish_dek'] != "") {
    $maindish_dek = strip_tags(trim($_REQUEST['maindish_dek']), $allowed_html);
}
else {
    $maindish_dek = "";
}

if(isset($_REQUEST['maindish_lead']) && $_REQUEST['maindish_lead'] != "") {
		$maindish_lead = strip_tags(trim($_REQUEST['maindish_lead']),$allowed_html);
}
else {
		$maindish_lead = "";
}

if(isset($_REQUEST['maindish_title']) && $_REQUEST['maindish_title'] != "") {
	$maindish_title = strip_tags(trim($_REQUEST['maindish_title']),$allowed_html);
}
else {
	$maindish_title = "This Week's Main Dish";
}

if(isset($_REQUEST['sidedish_hed']) && $_REQUEST['sidedish_hed'] != "") {
    $sidedish_hed = trim($_REQUEST['sidedish_hed']);
}
else {
    $sidedish_hed = "";
}
if(isset($_REQUEST['sidedish_url']) && $_REQUEST['sidedish_url'] != "") {
    $sidedish_url = trim($_REQUEST['sidedish_url']);
}
else {
    $sidedish_url = "";
}

if(isset($_REQUEST['sidedish2_hed']) && $_REQUEST['sidedish2_hed'] != "") {
	$sidedish2_hed = trim($_REQUEST['sidedish2_hed']);
}
else {
	$sidedish2_hed = "";
}
if(isset($_REQUEST['sidedish2_url']) && $_REQUEST['sidedish2_url'] != "") {
	$sidedish2_url = trim($_REQUEST['sidedish2_url']);
}
else {
	$sidedish2_url = "";
}

if(isset($_REQUEST['sidedish3_hed']) && $_REQUEST['sidedish3_hed'] != "") {
	$sidedish3_hed = trim($_REQUEST['sidedish3_hed']);
}
else {
	$sidedish3_hed = "";
}
if(isset($_REQUEST['sidedish3_url']) && $_REQUEST['sidedish3_url'] != "") {
	$sidedish3_url = trim($_REQUEST['sidedish3_url']);
}
else {
	$sidedish3_url = "";
}

if(isset($_REQUEST['sidedish4_hed']) && $_REQUEST['sidedish4_hed'] != "") {
	$sidedish4_hed = trim($_REQUEST['sidedish4_hed']);
}
else {
	$sidedish4_hed = "";
}
if(isset($_REQUEST['sidedish4_url']) && $_REQUEST['sidedish4_url'] != "") {
	$sidedish4_url = trim($_REQUEST['sidedish4_url']);
}
else {
	$sidedish4_url = "";
}

if(isset($_REQUEST['sidedish5_hed']) && $_REQUEST['sidedish5_hed'] != "") {
	$sidedish5_hed = trim($_REQUEST['sidedish5_hed']);
}
else {
	$sidedish5_hed = "";
}
if(isset($_REQUEST['sidedish5_url']) && $_REQUEST['sidedish5_url'] != "") {
	$sidedish5_url = trim($_REQUEST['sidedish5_url']);
}
else {
	$sidedish5_url = "";
}

if(isset($_REQUEST['sidedish_title']) && $_REQUEST['sidedish_title'] != "") {
	$sidedish_title = trim($_REQUEST['sidedish_title']);
}
else {
	$sidedish_title = "Side Dishes";
}

if(isset($_REQUEST['moremojo_hed']) && $_REQUEST['moremojo_hed'] != "") {
    $moremojo_hed = trim($_REQUEST['moremojo_hed']);
}
else {
    $moremojo_hed = "";
}
if(isset($_REQUEST['moremojo_url']) && $_REQUEST['moremojo_url'] != "") {
    $moremojo_url = trim($_REQUEST['moremojo_url']);
}
else {
    $moremojo_url = "";
}

if(isset($_REQUEST['moremojo2_hed']) && $_REQUEST['moremojo2_hed'] != "") {
	$moremojo2_hed = trim($_REQUEST['moremojo2_hed']);
}
else {
	$moremojo2_hed = "";
}
if(isset($_REQUEST['moremojo2_url']) && $_REQUEST['moremojo2_url'] != "") {
	$moremojo2_url = trim($_REQUEST['moremojo2_url']);
}
else {
	$moremojo2_url = "";
}

if(isset($_REQUEST['moremojo3_hed']) && $_REQUEST['moremojo3_hed'] != "") {
	$moremojo3_hed = trim($_REQUEST['moremojo3_hed']);
}
else {
	$moremojo3_hed = "";
}
if(isset($_REQUEST['moremojo3_url']) && $_REQUEST['moremojo3_url'] != "") {
	$moremojo3_url = trim($_REQUEST['moremojo3_url']);
}
else {
	$moremojo3_url = "";
}

if(isset($_REQUEST['moremojo4_hed']) && $_REQUEST['moremojo4_hed'] != "") {
	$moremojo4_hed = trim($_REQUEST['moremojo4_hed']);
}
else {
	$moremojo4_hed = "";
}
if(isset($_REQUEST['moremojo4_url']) && $_REQUEST['moremojo4_url'] != "") {
	$moremojo4_url = trim($_REQUEST['moremojo4_url']);
}
else {
	$moremojo4_url = "";
}

if(isset($_REQUEST['moremojo5_hed']) && $_REQUEST['moremojo5_hed'] != "") {
	$moremojo5_hed = trim($_REQUEST['moremojo5_hed']);
}
else {
	$moremojo5_hed = "";
}
if(isset($_REQUEST['moremojo5_url']) && $_REQUEST['moremojo5_url'] != "") {
	$moremojo5_url = trim($_REQUEST['moremojo5_url']);
}
else {
	$moremojo5_url = "";
}

if(isset($_REQUEST['moremojo_title']) && $_REQUEST['moremojo_title'] != "" && strtoupper(trim($_REQUEST['moremojo_title'])) != "MORE FROM MOJO") {
	$moremojo_title = strip_tags(trim($_REQUEST['moremojo_title']),$allowed_html);
}
else {
	$moremojo_title = "MORE FROM <em>MOJO</em>";
}

if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] != "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}

//Food for Thought redesign template section
//Main section
$sidedish_section = "";
$sd_full = "";
$sd2_full = "";
$sd3_full = "";

$sd_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$sidedish_title\n</td>\n</tr>\n";

if($sidedish_hed != "" || $sidedish_hed != null) {
	$sd_url = "";
	$sd_anchor_name = "2 - " . htmlentities( $sidedish_hed, ENT_COMPAT, "UTF-8");
	$sd_url_close = "";
	$sd_social_media = "";

	if($sidedish_url != "" || $sidedish_url != null) {
		$sd_url = "<a class=\"article_hed\" href=\"$sidedish_url\" style=\"$hed_styles\" name=\"$sd_anchor_name\">";
		$sd_url_close = "</a>";
	}

	$sd_full = "<tr><td style=\"$standard_td\">\n$sd_url" . $sidedish_hed . "$sd_url_close\n" . "</td>\n</tr>\n";
}

if($sidedish2_hed != "" || $sidedish2_hed != null) {
	$sd2_url = "";
	$sd2_anchor_name = "3 - " . htmlentities( $sidedish2_hed, ENT_COMPAT, "UTF-8");
	$sd2_url_close = "";
	$sd2_social_media = "";

	if($sidedish2_url != "" || $sidedish2_url != null) {
		$sd2_url = "<a class=\"article_hed\" href=\"$sidedish2_url\" style=\"$hed_styles\"name=\"$sd2_anchor_name\">";
		$sd2_url_close = "</a>";
	}

	$sd2_full = "<tr><td style=\"$standard_td\">\n$sd2_url" . $sidedish2_hed . "$sd2_url_close\n" . "</td>\n</tr>\n";
}

if($sidedish3_hed != "" || $sidedish3_hed != null) {
	$sd3_url = "";
	$sd3_anchor_name = "4 - " . htmlentities( $sidedish3_hed, ENT_COMPAT, "UTF-8");
	$sd3_url_close = "";
	$sd3_social_media = "";

	if($sidedish3_url != "" || $sidedish3_url != null) {
		$sd3_url = "<a class=\"article_hed\" href=\"$sidedish3_url\" style=\"$hed_styles\" name=\"$sd3_anchor_name\">";
		$sd3_url_close = "</a>";
	}

	$sd3_full = "<tr><td style=\"$standard_td\">\n$sd3_url" . $sidedish3_hed . "$sd3_url_close\n" . "</td>\n</tr>\n";
}

if($sd_full == "" && $sd2_full == "" && $sd3_full == "") {
	$sidedish_section = "";
}
else {
	$sidedish_section = $sd_title . $sd_full . $sd2_full . $sd3_full;
}
//end side dish section

//more from mojo section
$moremojo_section = "";
$mm_full = "";
$mm2_full  = "";
$mm_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" /><br />\n$moremojo_title\n</td>\n</tr>\n";

if($moremojo_hed != "" || $moremojo_hed != null) {
	$mm_url = "";
	$mm_anchor_name = "5 - " . htmlentities( $moremojo_hed, ENT_COMPAT, "UTF-8");
	$mm_url_close = "";
	$mm_social_media = "";

	if($moremojo_url != "" || $moremojo_url != null) {
		$mm_url = "<a class=\"article_hed\" href=\"$moremojo_url\" style=\"$hed_styles\" name=\"$mm_anchor_name\">";
		$mm_url_close = "</a>";
	}

	$mm_full = "<tr>\n<td style=\"$standard_td\">\n$mm_url" . $moremojo_hed . "$mm_url_close\n" . "</td>\n</tr>\n";
}

if($moremojo2_hed != "" || $moremojo2_hed != null) {
	$mm2_url = "";
	$mm2_anchor_name = "6 - " . htmlentities( $moremojo2_hed, ENT_COMPAT, "UTF-8");
	$mm2_url_close = "";
	$mm2_social_media = "";

	if($moremojo2_url != "" || $moremojo2_url != null) {
		$mm2_url = "<a class=\"article_hed\" href=\"$moremojo2_url\" style=\"$hed_styles\" name=\"$mm2_anchor_name\">";
		$mm2_url_close = "</a>";
	}

	$mm2_full = "<tr>\n<td style=\"$standard_td\">\n$mm2_url" . $moremojo2_hed . "$mm2_url_close\n" . "</td>\n</tr>\n";
}

if($mm_full == "" && $mm2_full == "") {
	$moremojo_section = "";
}
else {
	$moremojo_section = $mm_title . $mm_full . $mm2_full;
}
//end more mojo section

//lift note section
$lift_note_section = "";
if($lift_note !== "") {
	$search_this = "<p>";
	$replace_code = '<p style="font-family: Verdana, Helvetica, Arial, sans-serif !important;font-size: 16px !important;line-height:20px !important;color: #767676 !important;margin: 10px 20px;">';
	$lift_note = str_ireplace($search_this, $replace_code, $lift_note);
	$lift_note_section = "<tr><td class=\"standard_td\" style=\"padding: 10px 20px !important;\">" . $lift_note . "<hr style=\"border:1px solid #e8e8e8;background-color: #f2eeed;width:100%;\" /></td></tr>";
}

//text ad section

//live intent section
$liveintent_toptags = "";
$liveintent_bottomtags = "";
$liveintnet_rba = "";
$safe_rbt = "";

//safe RBT
if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
$safe_rbt = <<<SAFERBT
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"40\" height=\"6\"><tbody><tr><td><img src=\"http://li.motherjones.com/imp?s=68954&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68955&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68956&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68957&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68958&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68959&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68960&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68961&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68962&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68963&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68964&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68965&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399312&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399313&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399314&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399315&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399316&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399317&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399318&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399319&sz=2x1&li=foodforthought&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td></tr></tbody></table>
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
$maindish_anchor_name = "1 - " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");
$maindish_anchor_name_fb = "Facebook: " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");
$maindish_anchor_name_tt = "Twitter: " . htmlentities( $maindish_hed, ENT_COMPAT, "UTF-8");
$food = <<<FOOD
<div>
$mobile_styles
</div>
<div style="$main_div" id="main_background">
<table id="table_content" style="$main_table_styles" width="640" align="center" cellpadding="5" cellspacing="0" border="0">$lift_note_section
    <tr>
        <td style="$news_main_logo" align="center">
            <img src="http://assets.motherjones.com/newsletters/images/foodforthought_header_3.png" alt="Food for Thought" style="width:600px;border: none !important;" border="0" />
				</td>
    </tr>
    <tr>
				<td align="left" valign="top" style="$section_title">$maindish_title</td>
    </tr>
    <tr>
        <td class="standard_td" style="$standard_td">
            <a id="main_art_hed" href="$maindish_url" style="$hed_styles_main" name="$maindish_anchor_name">$maindish_hed</a>
            <div id="main_article" style="margin-top:5px;">
            	<span id="dek_font_size" style="$dek_style">$maindish_dek</span>
						</div>
						<sup><a id="read_more" href="$maindish_url" style="$read_more">[READ MORE]</a></sup> <sub><a href=\"http://www.facebook.com/sharer/sharer.php?u=$maindish_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$maindish_url&text=$maindish_hed_enc&via=MotherJones\" target=\"_blank\">$twitter_icon</a></sub>
        </td>
    </tr>
    <tr>
        <td class="no_top_pad" align="center" style="$no_top_pad20">
        		<br />
        	  <hr style="$separator_border" />
            <br />
            <span style="$ad_style">&#8212;Advertisement&#8212;</span>
            $billboard_ad
        </td>
    </tr>
    $sidedish_section
    <tr>
        <td class="no_top_pad" align="center" style="$no_top_pad20">
            <br />
            <hr style="$separator_border" />
            <br />
            $small_sub_ad
            <br />
        </td>
    </tr>
    $moremojo_section
    <tr>
        <td class="no_top_pad" align="center" style="$no_top_pad20">
        		<br />
        	  <hr style="$separator_border" />
            <br />
            <span style="$ad_style">&#8212;Advertisement&#8212;</span>
            $billboard_ad2
        </td>
    </tr>
    <tr>
        <td class="no_top_pad" align="center" style="$no_top_pad20">
				<br />
				<hr style="$separator_border" />
        	$global_footer
					<br />
        </td>
    </tr>
</table>
$safe_rbt
</div>
FOOD;

//print out HTML template
print $food;

/* db section */
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
//add slashes for the db and strip out disallowed html tags
$maindish_hed = strip_tags(addslashes($maindish_hed));
$maindish_dek = strip_tags(addslashes($maindish_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$maindish_url = addslashes($maindish_url);
$maindish_title = addslashes($maindish_title);
$sidedish_hed = strip_tags(addslashes($sidedish_hed));
$sidedish_url = addslashes($sidedish_url);
$sidedish2_hed = strip_tags(addslashes($sidedish2_hed));
$sidedish2_url = addslashes($sidedish2_url);
$sidedish3_hed = strip_tags(addslashes($sidedish3_hed));
$sidedish3_url = addslashes($sidedish3_url);
$sidedish_title = addslashes($sidedish_title);
$moremojo_hed = strip_tags(addslashes($moremojo_hed));
$moremojo_url = addslashes($moremojo_url);
$moremojo2_hed = strip_tags(addslashes($moremojo2_hed));
$moremojo2_url = addslashes($moremojo2_url);
$moremojo_title = addslashes($moremojo_title);
$subject_line = addslashes($subject_line);
$sub_code = addslashes($sub_code);
$lift_note = addslashes($lift_note);

//check to see if data exists in db
$check_existing = "SELECT id, hed_date FROM food_for_thought_new WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
    $exists = true;
}
else {
    $exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
$run_qry = "UPDATE food_for_thought_new
  SET  hed_date='$headlines_date',
  maindish_hed='$maindish_hed',
  maindish_url='$maindish_url',
  maindish_dek='$maindish_dek',
  maindish_lead='$maindish_lead',
  sidedish_hed='$sidedish_hed',
  sidedish_url='$sidedish_url',
  sidedish2_hed='$sidedish2_hed',
  sidedish2_url='$sidedish2_url',
  sidedish3_hed='$sidedish3_hed',
  sidedish3_url='$sidedish3_url',
  moremojo_hed='$moremojo_hed',
  moremojo_url='$moremojo_url',
  moremojo2_hed='$moremojo2_hed',
  moremojo2_url='$moremojo2_url',
  ad_link_bill='$billboard_url',
  ad_billboard='$billboard_image',
  ad_name='$advertiser_name',
  ad_link_banner='$billboard_url2',
  ad_banner='$billboard_image2',
  ad_name2='$advertiser_name2',
  subject_line='$subject_line',
  maindish_title = '$maindish_title',
  sidedish_title = '$sidedish_title',
  moremojo_title = '$moremojo_title',
  sub_url = '$sub_url',
  sub_image = '$sub_image',
  sub_text = '$sub_text',
  sub_code = '$sub_code',
  lift_note = '$lift_note'
  WHERE hed_date='$headlines_date'";
}
else {
$run_qry = "INSERT INTO food_for_thought_new(hed_date,maindish_hed,maindish_url,maindish_dek,sidedish_hed,sidedish_url,sidedish2_hed,sidedish2_url,sidedish3_hed,sidedish3_url,moremojo_hed,moremojo_url,moremojo2_hed,moremojo2_url,ad_name,ad_link_bill,ad_billboard,ad_name2,ad_link_banner,ad_banner,subject_line,maindish_lead,sidedish_title,moremojo_title,sub_url,sub_image,sub_text,sub_code,lift_note)
VALUES('$headlines_date',
       '$maindish_hed',
       '$maindish_url',
       '$maindish_dek',
       '$sidedish_hed',
       '$sidedish_url',
       '$sidedish2_hed',
       '$sidedish2_url',
       '$sidedish3_hed',
       '$sidedish3_url',
       '$moremojo_hed',
       '$moremojo_url',
       '$moremojo2_hed',
       '$moremojo2_url',
       '$advertiser_name',
       '$billboard_url',
       '$billboard_image',
       '$advertiser_name2',
       '$billboard_url2',
       '$billboard_image2',
       '$subject_line',
	   '$maindish_lead',
	   '$sidedish_title',
	   '$moremojo_title',
	   '$sub_url',
	   '$sub_image',
	   '$sub_text',
	   '$sub_code',
	   '$lift_note')";
}
//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>