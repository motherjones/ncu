<?php
/* econundrum template */
header("Content-Type: text/html;charset=UTF-8");
/* sections variables */
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['conundrum_hed']) && $_REQUEST['conundrum_hed'] != "") {
    $conun_hed = trim($_REQUEST['conundrum_hed']);
    $conun_hed_enc = urlencode($conun_hed);
}
else {
    $conun_hed = "";
    $conun_hed_enc = "";
}
if(isset($_REQUEST['conundrum_url']) && $_REQUEST['conundrum_url'] != "") {
    $conun_url = trim($_REQUEST['conundrum_url']);
}
else {
    $conun_url = "";
}
if(isset($_REQUEST['conundrum_dek']) && $_REQUEST['conundrum_dek'] != "") {
    $conun_dek = strip_tags(trim($_REQUEST['conundrum_dek']), $allowed_html);
}
else {
    $conun_dek = "";
}

if(isset($_REQUEST['conundrum_lead']) && $_REQUEST['conundrum_lead'] != "") {
	$conun_lead = strip_tags(trim($_REQUEST['conundrum_lead']), $allowed_html);
}
else {
	$conun_lead = "";
}

if(isset($_REQUEST['envirohealth1_hed']) && $_REQUEST['envirohealth1_hed'] != "") {
    $envh1_hed = trim($_REQUEST['envirohealth1_hed']);
}
else {
    $envh1_hed = "";
}
if(isset($_REQUEST['envirohealth1_url']) && $_REQUEST['envirohealth1_url'] != "") {
    $envh1_url = trim($_REQUEST['envirohealth1_url']);
}
else {
    $envh1_url = "";
}

if(isset($_REQUEST['envirohealth2_hed']) && $_REQUEST['envirohealth2_hed'] != "") {
    $envh2_hed = trim($_REQUEST['envirohealth2_hed']);
}
else {
    $envh2_hed = "";
}
if(isset($_REQUEST['envirohealth2_url']) && $_REQUEST['envirohealth2_url'] != "") {
    $envh2_url = trim($_REQUEST['envirohealth2_url']);
}
else {
    $envh2_url = "";
}

if(isset($_REQUEST['envirohealth3_hed']) && $_REQUEST['envirohealth3_hed'] != "") {
	$envh3_hed = trim($_REQUEST['envirohealth3_hed']);
}
else {
	$envh3_hed = "";
}
if(isset($_REQUEST['envirohealth3_url']) && $_REQUEST['envirohealth3_url'] != "") {
	$envh3_url = trim($_REQUEST['envirohealth3_url']);
}
else {
	$envh3_url = "";
}

if(isset($_REQUEST['envirohealth4_hed']) && $_REQUEST['envirohealth4_hed'] != "") {
	$envh4_hed = trim($_REQUEST['envirohealth4_hed']);
}
else {
	$envh4_hed = "";
}
if(isset($_REQUEST['envirohealth4_url']) && $_REQUEST['envirohealth4_url'] != "") {
	$envh4_url = trim($_REQUEST['envirohealth4_url']);
}
else {
	$envh4_url = "";
}

if(isset($_REQUEST['envirohealth5_hed']) && $_REQUEST['envirohealth5_hed'] != "") {
	$envh5_hed = trim($_REQUEST['envirohealth5_hed']);
}
else {
	$envh5_hed = "";
}
if(isset($_REQUEST['envirohealth5_url']) && $_REQUEST['envirohealth5_url'] != "") {
	$envh5_url = trim($_REQUEST['envirohealth5_url']);
}
else {
	$envh5_url = "";
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

// This week's conundrum template setup
//check all variables to make sure they contain data

//section titles

//This Week's Econundrum
if(isset($_REQUEST['this_week']) && ($_REQUEST['this_week'] == "" || strtoupper($_REQUEST['this_week']) == "THIS WEEK'S ECONUNDRUM")) {
	$this_week = "This Week's Econundrum";
}
else {
	$this_week = strtoupper(trim($_REQUEST['this_week']));
}

//More Environment & Health
if(isset($_REQUEST['envirohealth_title']) && ($_REQUEST['envirohealth_title'] == "" || strtoupper($_REQUEST['envirohealth_title']) == "MORE ENVIRONMENT & HEALTH")) {
	$envirohealth_title = "More Environment & Health";
}
else {
	$envirohealth_title = strtoupper(trim($_REQUEST['envirohealth_title']));
}

//More from MoJo
if(isset($_REQUEST['moremojo_title']) && ($_REQUEST['moremojo_title'] == "" || strtoupper($_REQUEST['moremojo_title']) == "MORE FROM MOJO")) {
	$moremojo_title = "More from <em>MoJo</em>";
}
else {
	$moremojo_title = strtoupper(trim($_REQUEST['moremojo_title']));
}
//html template build section
//environment & health section
$envirohealth_section = "";

$eh_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$envirohealth_title\n</td>\n</tr>\n";
if(isset($envh1_hed) && $envh1_hed !== "") {
	$eh1_url = "";
	$eh1_anchor_name = "2 - " . htmlentities( $envh1_hed, ENT_COMPAT, "UTF-8");
	$eh1_url_close = "</a>";
	$eh1_social_media = "";
	
	if(isset($envh1_url) && $envh1_url !== "") {
		$eh1_url = "<a class=\"article_hed\" href=\"$envh1_url\" style=\"$hed_styles\" name=\"$eh1_anchor_name\">";
	}
	
	$eh1_full = "<tr>\n<td style=\"$standard_td\">\n$eh1_url". $envh1_hed. "$eh1_url_close\n" . "$eh1_social_media</td>\n</tr>\n";
}
else {
	$eh1_full = "";
}

if(isset($envh2_hed) && $envh2_hed !== "") {
	$eh2_url = "";
	$eh2_anchor_name = "3 - " . htmlentities( $envh2_hed, ENT_COMPAT, "UTF-8");
	$eh2_url_close = "</a>";
	$eh2_social_media = "";
	
	if(isset($envh2_url) && $envh2_url !== "") {
		$eh2_url = "<a class=\"article_hed\" href=\"$envh2_url\" style=\"$hed_styles\" name=\"$eh2_anchor_name\">";
	}
	
	$eh2_full = "<tr>\n<td style=\"$standard_td\">\n$eh2_url". $envh2_hed . "$eh2_url_close\n" . "$eh2_social_media</td>\n</tr>\n";
}
else {
	$eh2_full = "";
}

if(isset($envh3_hed) && $envh3_hed !== "") {
	$eh3_url = "";
	$eh3_anchor_name = "4 - " . htmlentities( $envh3_hed, ENT_COMPAT, "UTF-8");
	$eh3_url_close = "</a>";
	$eh3_social_media = "";

	if(isset($envh3_url) && $envh3_url !== "") {
		$eh3_url = "<a class=\"article_hed\" href=\"$envh3_url\" style=\"$hed_styles\" name=\"$eh3_anchor_name\">";
	}

	$eh3_full = "<tr>\n<td style=\"$standard_td\">\n$eh3_url". $envh3_hed . "$eh3_url_close\n" . "$eh3_social_media</td>\n</tr>\n";
}
else {
	$eh3_full = "";
}

if($eh1_full == "" && $eh2_full == "" && $eh3_full == "") {
	$envirohealth_section = "";
	
}
else {
	$envirohealth_section = $eh_title . $eh1_full . $eh2_full . $eh3_full;
}
//end environment & health section

//more mojo section

$moremojo_section = "";
$mm_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$moremojo_title\n</td>\n</tr>\n";
$mm_full = "";
$mm2_full = "";

if(isset($moremojo_hed) && $moremojo_hed !== "") {
	$mm_url = "";
	$mm_anchor_name = "5 - " . htmlentities( $moremojo_hed, ENT_COMPAT, "UTF-8");
	$mm_url_close = "</a>";
	$mm_social_media = "";

	if(isset($moremojo_url) && $moremojo_url !== "") {
		$mm_url = "<a class=\"article_hed\" href=\"$moremojo_url\" style=\"$hed_styles\" name=\"$mm_anchor_name\">";
	}

	$mm_full = "<tr>\n<td style=\"$standard_td\">\n$mm_url". "$moremojo_hed\n" . $mm_url_close . "$mm_social_media\n</td>\n</tr>\n";
}

if(isset($moremojo2_hed) && $moremojo2_hed !== "") {
	$mm2_url = "";
	$mm2_anchor_name = "6 - " . htmlentities( $moremojo2_hed, ENT_COMPAT, "UTF-8");
	$mm2_url_close = "</a>";
	$mm2_social_media = "";

	if(isset($moremojo2_url) && $moremojo2_url !== "") {
		$mm2_url = "<a class=\"article_hed\" href=\"$moremojo2_url\" style=\"$hed_styles\" name=\"$mm2_anchor_name\">";
	}

	$mm2_full = "<tr>\n<td style=\"$standard_td\">\n$mm2_url". "$moremojo2_hed\n" . $mm2_url_close . "$mm2_social_media\n</td>\n</tr>\n";
}

if($mm_full == "" && $mm2_full == "") {
	$moremojo_section = "";
}
else {
	$moremojo_section = $mm_title . $mm_full . $mm2_full;
}

//end more mojo section

//live intent section
$liveintent_toptags = "";
$liveintent_bottomtags = "";
$liveintnet_rba = "";
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
	//safe RBT
	$safe_rbt = <<<SAFERBT
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"40\" height=\"6\"><tbody><tr><td><img src=\"http://li.motherjones.com/imp?s=68990&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68991&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68992&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68993&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68994&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68995&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68996&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68997&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68998&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68999&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=69000&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=69001&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399212&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399213&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399214&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399215&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399216&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399217&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399218&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399219&sz=2x1&li=econundrums&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td></tr></tbody></table>
SAFERBT;
	
$liveintent_toptags = <<<LIVETOP
<table align="center" cellpadding="0" cellspacing="0" border="0">
	<tbody>
		<tr>
			<td colspan="3" align="center" height="1" valign="bottom">
				<a href="http://li.motherjones.com/click?s=68904&t=newsletter&sz=728x91&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68904&t=newsletter&sz=728x91&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="1">
				<a href="http://li.motherjones.com/click?s=68902&t=newsletter&sz=160x601&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68902&t=newsletter&sz=160x601&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
			<td valign="top" width="100%">
LIVETOP;

$liveintent_bottomtags = <<<LIVEBOTTOM
</td>
			<td align="left" valign="top" width="1">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">
							<a href="http://li.motherjones.com/click?s=68903&t=newsletter&sz=300x601&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68903&t=newsletter&sz=300x601&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
					</tr>
					<tr style="display:block; height:1px; line-height:1px;">
						<td>
							<img src="http://li.motherjones.com/imp?s=68905&t=newsletter&sz=1x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
						<td>
							<img src="http://li.motherjones.com/imp?s=68906&t=newsletter&sz=1x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
					</tr>
					<tr>
						<td align="left">
							<a href="http://li.motherjones.com/click?s=68908&t=newsletter&sz=116x15&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68908&t=newsletter&sz=116x15&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
						<td align="right">
							<a href="http://li.motherjones.com/click?s=68907&t=newsletter&sz=69x15&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68907&t=newsletter&sz=69x15&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
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
				<img src="http://li.motherjones.com/imp?s=68990&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68991&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68992&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68993&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68994&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68995&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68996&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68997&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68998&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68999&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=69000&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=69001&t=newsletter&sz=2x1&li=econundrums&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
		</tr>
	</tbody>
</table>
LIVERBA;
}
//$liveintent_toptags
//heredoc for the template containing the main HTML code in a table
//$liveintent_toptags
//$liveintnet_rba
//$liveintent_bottomtags
$conun_hed_anchor = "1 - " . htmlentities( $conun_hed, ENT_COMPAT, "UTF-8");
$conun_hed_anchor_fb = "Facebook: " . $conun_hed;
$conun_hed_anchor_tt = "Twitter: " . $conun_hed;
$econundrum = <<<ECO
<div>
$mobile_styles
</div>
<div style="$main_div" id="main_background">
<table id="table_content" style="$main_table_styles" width="640" align="center" cellpadding="5" cellspacing="0" border="0">
	$lift_note_section
    <tr>
        <td style="$news_main_logo" align="center">
            <img src="http://assets.motherjones.com/newsletters/images/econ_header_3.png" alt="Econundrums" style="width:600px;border: none !important;" width="600" border="0" />
		</td>
    </tr>
    <tr>
		<td align="left" valign="top" style="$section_title">$this_week</td>
    </tr>
    <tr>
        <td class="standard_td" style="$standard_td">
            <a id="main_art_hed" href="$conun_url" style="$hed_styles_main" name="$conun_hed_anchor">$conun_hed</a>
            <div id="main_article" style="margin-top:5px;">
            	<span id="dek_font_size" style="$dek_style">$conun_dek</span>
			</div>
            <sup><a id="read_more" href="$conun_url" style="$read_more">[READ MORE]</a></sup> <sub><a href="http://www.facebook.com/sharer/sharer.php?u=$conun_url" name="$conun_hed_anchor_fb">$facebook_icon</a>\n<a href="http://twitter.com/intent/tweet?url=$conun_url&text=$conun_hed_enc&via=MotherJones" target=\"_blank\" name="$conun_hed_anchor_tt">$twitter_icon</a></sub>
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
    $envirohealth_section
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
        <td class="no_top_pad" align="center" style="padding:0;">
			<br />
			<hr style="$separator_border" />
        	$global_footer
			<br />
        </td>
    </tr>
    <tr>
    	<td>
        	$safe_rbt
    	</td>
    </tr>
</table>
</div>
ECO;

//print out HTML template
print $econundrum;

/* db section */
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
//add slashes for the db and strip out disallowed html tags
$conun_hed = strip_tags(addslashes($conun_hed));
$conun_dek = strip_tags(addslashes($conun_dek), "<a><br /><br><b><i><em><strong><span><ol><ul><li><blockquote><img><table><tr><td><p>");
$conun_url = addslashes($conun_url);
$envh1_hed = strip_tags(addslashes($envh1_hed));
$envh1_url = addslashes($envh1_url);
$envh2_hed = strip_tags(addslashes($envh2_hed));
$envh2_url = addslashes($envh2_url);
$envh3_hed = strip_tags(addslashes($envh3_hed));
$envh3_url = addslashes($envh3_url);
$moremojo_hed = strip_tags(addslashes($moremojo_hed));
$moremojo_url = addslashes($moremojo_url);
$moremojo2_hed = strip_tags(addslashes($moremojo2_hed));
$moremojo2_url = addslashes($moremojo2_url);
$this_week = strip_tags(addslashes($this_week), "<i><em><b><strong>");
$envirohealth_title = strip_tags(addslashes($envirohealth_title), "<i><em><b><strong>");
$moremojo_title = strip_tags(addslashes($moremojo_title));
$subject_line = addslashes(str_replace("â€”","–", $subject_line));
$sub_code = addslashes($sub_code);
$lift_note = addslashes($lift_note);
$pixel_tracker = addslashes($pixel_tracker);
$pixel_tracker2 = addslashes($pixel_tracker2);
$billboard_url = addslashes($billboard_url);
$billboard_image = addslashes($billboard_image);
$advertiser_name = addslashes($advertiser_name);
$billboard_url2 = addslashes($billboard_url2);
$billboard_image2 = addslashes($billboard_image2);
$advertiser_name2 = addslashes($advertiser_name2);
$advertiser_name = addslashes($advertiser_name);

//check to see if data exists in db
$check_existing = "SELECT id, hed_date FROM econundrums_new WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
    $exists = true;
}
else {
    $exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
$run_qry = "UPDATE econundrums_new
  SET  hed_date='$headlines_date',
  conundrum_hed='$conun_hed',
  conundrum_url='$conun_url',
  conundrum_dek='$conun_dek',
  envirohealth1_hed='$envh1_hed',
  envirohealth1_url='$envh1_url',
  envirohealth2_hed='$envh2_hed',
  envirohealth2_url='$envh2_url',
  envirohealth3_hed='$envh3_hed',
  envirohealth3_url='$envh3_url',
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
  this_week='$this_week',
  envirohealth_title='$envirohealth_title',
  moremojo_title='$moremojo_title',
  conundrum_lead='$conun_lead',
  sub_url = '$sub_url',
  sub_image = '$sub_image',
  sub_text = '$sub_text',
  sub_code = '$sub_code',
  lift_note = '$lift_note',
  pixel_tracker = '$pixel_tracker',
  pixel_tracker2 = '$pixel_tracker2'
  WHERE hed_date='$headlines_date'";
}
else {
$run_qry = "INSERT INTO econundrums_new(hed_date,conundrum_hed,conundrum_url,conundrum_dek,envirohealth1_hed,envirohealth1_url,envirohealth2_hed,envirohealth2_url,envirohealth3_hed,envirohealth3_url,moremojo_hed,moremojo_url,moremojo2_hed,moremojo2_url,ad_link_bill,ad_billboard,ad_name,ad_link_banner,ad_banner,ad_name2,this_week,envirohealth_title,moremojo_title,subject_line,conundrum_lead,sub_url,sub_image,sub_text,sub_code,lift_note,pixel_tracker,pixel_tracker2)
VALUES('$headlines_date',
       '$conun_hed',
       '$conun_url',
       '$conun_dek',
       '$envh1_hed',
       '$envh1_url',
       '$envh2_hed',
       '$envh2_url',
       '$envh3_hed',
       '$envh3_url',
       '$moremojo_hed',
       '$moremojo_url',
       '$moremojo2_hed',
       '$moremojo2_url',
       '$billboard_url',
       '$billboard_image',
       '$advertiser_name',
       '$billboard_url2',
       '$billboard_image2',
       '$advertiser_name2',
       '$this_week',
       '$envirohealth_title',
       '$moremojo_title',
       '$subject_line',
       '$conun_lead',
       '$sub_url',
       '$sub_image',
       '$sub_text',
       '$sub_code',
       '$lift_note',
       '$pixel_tracker',
       '$pixel_tracker2')";
}
//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>