<?php
/* politics template */
// politics variables
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['topstory_hed']) && $_REQUEST['topstory_hed'] != "") {
    $topstory_hed = trim($_REQUEST['topstory_hed']);
    $topstory_hed_enc = urlencode($topstory_hed);
}
else {
    $topstory_hed = "";
    $topstory_hed_enc = "";
}

if(isset($_REQUEST['topstory_url'])) {
    $topstory_url = trim($_REQUEST['topstory_url']);
}
else {
    $topstory_url = "";
}

if(isset($_REQUEST['topstory_dek']) && $_REQUEST['topstory_dek'] != "") {
    $topstory_dek = strip_tags(trim($_REQUEST['topstory_dek']), $allowed_html);
}
else {
    $topstory_dek = "";
}

if(isset($_REQUEST['topstory_byline']) && $_REQUEST['topstory_byline'] != "") {
    $topstory_byline = trim($_REQUEST['topstory_byline']);
}
else {
    $topstory_byline = "";
}

if(isset($_REQUEST['topstory_lead']) && $_REQUEST['topstory_lead'] != "") {
    $topstory_lead = trim($_REQUEST['topstory_lead']);
}
else {
    $topstory_lead = "";
}

if(isset($_REQUEST['topstory_title']) && $_REQUEST['topstory_title'] != "") {
    $topstory_title = strip_tags(trim($_REQUEST['topstory_title']), $allowed_html);
}
else {
    $topstory_title = "This Week's Top Story";
}
//end top story
//In other news section
if(isset($_REQUEST['inothernews_hed']) && $_REQUEST['inothernews_hed'] != "") {
    $inothernews_hed = trim($_REQUEST['inothernews_hed']);
}
else {
    $inothernews_hed = "";
}

if(isset($_REQUEST['inothernews_url']) && $_REQUEST['inothernews_url'] != "") {
    $inothernews_url = trim($_REQUEST['inothernews_url']);
}
else {
    $inothernews_url = "";
}

if(isset($_REQUEST['inothernews2_hed']) && $_REQUEST['inothernews2_hed'] != "") {
    $inothernews2_hed = trim($_REQUEST['inothernews2_hed']);
}
else {
    $inothernews2_hed = "";
}

if(isset($_REQUEST['inothernews2_url']) && $_REQUEST['inothernews2_url'] != "") {
    $inothernews2_url = trim($_REQUEST['inothernews2_url']);
}
else {
    $inothernews2_url = "";
}

if(isset($_REQUEST['inothernews3_hed']) && $_REQUEST['inothernews3_hed'] != "") {
    $inothernews3_hed = trim($_REQUEST['inothernews3_hed']);
}
else {
    $inothernews3_hed = "";
}

if(isset($_REQUEST['inothernews3_url']) && $_REQUEST['inothernews3_url'] != "") {
    $inothernews3_url = trim($_REQUEST['inothernews3_url']);
}
else {
    $inothernews3_url = "";
}

if(isset($_REQUEST['inothernews4_hed']) && $_REQUEST['inothernews4_hed'] != "") {
    $inothernews4_hed = trim($_REQUEST['inothernews4_hed']);
}
else {
    $inothernews4_hed = "";
}

if(isset($_REQUEST['inothernews4_url']) && $_REQUEST['inothernews4_url'] != "") {
    $inothernews4_url = trim($_REQUEST['inothernews4_url']);
}
else {
    $inothernews4_url = "";
}

if(isset($_REQUEST['inothernews5_hed']) && $_REQUEST['inothernews5_hed'] != "") {
    $inothernews5_hed = trim($_REQUEST['inothernews5_hed']);
}
else {
    $inothernews5_hed = "";
}

if(isset($_REQUEST['inothernews5_url']) && $_REQUEST['inothernews5_url'] != "") {
    $inothernews5_url = trim($_REQUEST['inothernews5_url']);
}
else {
    $inothernews5_url = "";
}

if(isset($_REQUEST['inothernews_title']) && $_REQUEST['inothernews_title'] != "") {
    $inothernews_title = trim($_REQUEST['inothernews_title']);
}
else {
    $inothernews_title = "In Other News";
}
/*most read section */
if(isset($_REQUEST['mostread1_hed']) && $_REQUEST['mostread1_hed'] != "") {
    $mostread1_hed = trim($_REQUEST['mostread1_hed']);
}
else {
    $mostread1_hed = "";
}

if(isset($_REQUEST['mostread1_url']) && $_REQUEST['mostread1_url'] != "") {
    $mostread1_url = trim($_REQUEST['mostread1_url']);
}
else {
    $mostread1_url = "";
}

if(isset($_REQUEST['mostread2_hed']) && $_REQUEST['mostread2_hed'] != "") {
    $mostread2_hed = trim($_REQUEST['mostread2_hed']);
}
else {
    $mostread2_hed = "";
}

if(isset($_REQUEST['mostread2_url']) && $_REQUEST['mostread2_url'] != "") {
    $mostread2_url = trim($_REQUEST['mostread2_url']);
}
else {
    $mostread2_url = "";
}

if(isset($_REQUEST['mostread3_hed']) && $_REQUEST['mostread3_hed'] != "") {
    $mostread3_hed = trim($_REQUEST['mostread3_hed']);
}
else {
    $mostread3_hed = "";
}

if(isset($_REQUEST['mostread3_url']) && $_REQUEST['mostread3_url'] != "") {
    $mostread3_url = trim($_REQUEST['mostread3_url']);
}
else {
    $mostread3_url = "";
}

if(isset($_REQUEST['mostread4_hed']) && $_REQUEST['mostread4_hed'] != "") {
    $mostread4_hed = trim($_REQUEST['mostread4_hed']);
}
else {
    $mostread4_hed = "";
}

if(isset($_REQUEST['mostread4_url']) && $_REQUEST['mostread4_url'] != "") {
    $mostread4_url = trim($_REQUEST['mostread4_url']);
}
else {
    $mostread4_url = "";
}

if(isset($_REQUEST['mostread5_hed']) && $_REQUEST['mostread5_hed'] != "") {
    $mostread5_hed = trim($_REQUEST['mostread5_hed']);
}
else {
    $mostread5_hed = "";
}

if(isset($_REQUEST['mostread5_url']) && $_REQUEST['mostread5_url'] != "") {
    $mostread5_url = trim($_REQUEST['mostread5_url']);
}
else {
    $mostread5_url = "";
}

if(isset($_REQUEST['mostread_title']) && $_REQUEST['mostread_title'] != "") {
    $mostread_title = trim($_REQUEST['mostread_title']);
}
else {
    $mostread2_title = "Most Read";
}
/* end most read */

//section titles
//In other News
$inothernews_section = "";
$ion1_full = "";
$ion2_full = "";

$ion_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$inothernews_title\n</td>\n</tr>";

if(isset($inothernews_hed) && $inothernews_hed !== "") {
    $ion1_url = "";
    $ion1_anchor_name = "2 - " . htmlentities( $inothernews_hed, ENT_COMPAT, "UTF-8");
    $ion1_url_close = "";
    $ion1_social_media = "";
    
    if(isset($inothernews_url) && $inothernews_url !== "") {
        $ion1_url = "<a class=\"article_hed\" href=\"$inothernews_url\" style=\"$hed_styles\" name=\"$ion1_anchor_name\">";
        $ion1_url_close = "</a>";
    }
    
    $ion1_full = "<tr>\n<td style=\"$standard_td\">\n$ion1_url". $inothernews_hed. "$ion1_url_close\n" . "$ion1_social_media</td>\n</tr>\n";
}
else {
    $ion1_full = "";
}

if(isset($inothernews2_hed) && $inothernews2_hed !== "") {
    $ion2_url = "";
    $ion2_anchor_name = "3 - " . htmlentities( $inothernews2_hed, ENT_COMPAT, "UTF-8");
    $ion2_url_close = "";
    $ion2_social_media = "";
    
    if(isset($inothernews2_url) && $inothernews2_url !== "") {
        $ion2_url = "<a class=\"article_hed\" href=\"$inothernews2_url\" style=\"$hed_styles\" name=\"$ion2_anchor_name\">";
        $ion2_url_close = "</a>";
    }
    
    $ion2_full = "<tr>\n<td style=\"$standard_td\">\n$ion2_url". $inothernews2_hed. "$ion2_url_close\n" . "$ion2_social_media</td>\n</tr>\n";
}
else {
    $ion2_full = "";
}

if(isset($inothernews3_hed) && $inothernews3_hed !== "") {
    $ion3_url = "";
    $ion3_anchor_name = "4 - " . htmlentities( $inothernews3_hed, ENT_COMPAT, "UTF-8");
    $ion3_url_close = "";
    $ion3_social_media = "";
    
    if(isset($inothernews3_url) && $inothernews3_url !== "") {
        $ion3_url = "<a class=\"article_hed\" href=\"$inothernews3_url\" style=\"$hed_styles\" name=\"$ion3_anchor_name\">";
        $ion3_url_close = "</a>";
    }
    
    $ion3_full = "<tr>\n<td style=\"$standard_td\">\n$ion3_url". $inothernews3_hed. "$ion3_url_close\n" . "$ion3_social_media</td>\n</tr>\n";
}
else {
    $ion3_full = "";
}

if($ion1_full == "" && $ion2_full == "" && $ion3_full == "") {
    $inothernews_section = "";
}
else {
    $inothernews_section = $ion_title . $ion1_full . $ion2_full . $ion3_full;
}
//----------------------------------------------------------------------------------
//Most Read
$mostread_section = "";
$mr1_full = "";
$mr2_full = "";
$mr_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$mostread_title\n</td>\n</tr>";

if(isset($mostread1_hed) && $mostread1_hed !== "") {
    $mr1_url = "";
    $mr1_anchor_name = "5 - " . htmlentities( $mostread1_hed, ENT_COMPAT, "UTF-8");
    $mr1_url_close = "";
    $mr1_social_media = "";
    
    if(isset($mostread1_url) && $mostread1_url !== "") {
        $mr1_url = "<a class=\"article_hed\" href=\"$mostread1_url\" style=\"$hed_styles\" name=\"$mr1_anchor_name\">";
        $mr1_url_close = "";
    }
    
    $mr1_full = "<tr>\n<td style=\"$standard_td\">\n$mr1_url". $mostread1_hed. "$mr1_url_close\n" . "$mr1_social_media</td>\n</tr>\n";
}

if(isset($mostread2_hed) && $mostread2_hed !== "") {
    $mr2_url = "";
    $mr2_anchor_name = "6 - " . htmlentities( $mostread2_hed, ENT_COMPAT, "UTF-8");
    $mr2_url_close = "";
    $mr2_social_media = "";
    
    if(isset($mostread2_url) && $mostread2_url !== "") {
        $mr2_url = "<a class=\"article_hed\" href=\"$mostread2_url\" style=\"$hed_styles\" name=\"$mr2_anchor_name\">";
        $mr2_url_close = "";
    }
    
    $mr2_full = "<tr>\n<td style=\"$standard_td\">\n$mr2_url". $mostread2_hed. "$mr2_url_close\n" . "$mr2_social_media</td>\n</tr>\n";
}

if($mr1_full == "" && $mr2_full == "") {
    $mostread_section = "";
}
else {
    $mostread_section = $mr_title . $mr1_full . $mr2_full;
}
//end most read section

//live intent section
$liveintent_toptags = "";
$liveintent_bottomtags = "";
$liveintnet_rba = "";
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
    //safe RBT
    $safe_rbt = <<<SAFERBT
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"40\" height=\"6\"><tbody><tr><td><img src=\"http://li.motherjones.com/imp?s=68978&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68979&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68980&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68981&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68982&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68983&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68984&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68985&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68986&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68987&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68988&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68989&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399512&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399513&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399514&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399515&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399516&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399517&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399518&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399519&sz=2x1&li=politicalmojo&m={{contact.email | md5}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td></tr></tbody></table>
SAFERBT;
    
    $liveintent_toptags = <<<LIVETOP
<table align="center" cellpadding="0" cellspacing="0" border="0" width="768">
	<tbody>
		<tr>
			<td colspan="3" align="center" height="1" valign="bottom">
				<a href="http://li.motherjones.com/click?s=68925&t=newsletter&sz=728x91&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68925&t=newsletter&sz=728x91&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="1">
				<a href="http://li.motherjones.com/click?s=68923&t=newsletter&sz=160x601&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68923&t=newsletter&sz=160x601&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
			<td valign="top" width="100%">
LIVETOP;
    
    $liveintent_bottomtags = <<<LIVEBOTTOM
			</td>
			<td align="left" valign="top" width="1">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">
							<a href="http://li.motherjones.com/click?s=68924&t=newsletter&sz=300x601&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68924&t=newsletter&sz=300x601&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
					</tr>
					<tr style="display:block; height:1px; line-height:1px;">
						<td>
							<img src="http://li.motherjones.com/imp?s=68926&t=newsletter&sz=1x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
						<td>
							<img src="http://li.motherjones.com/imp?s=68927&t=newsletter&sz=1x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
					</tr>
					<tr>
						<td align="left">
							<a href="http://li.motherjones.com/click?s=68929&t=newsletter&sz=116x15&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68929&t=newsletter&sz=116x15&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
						<td align="right">
							<a href="http://li.motherjones.com/click?s=68928&t=newsletter&sz=69x15&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68928&t=newsletter&sz=69x15&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
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
				<img src="http://li.motherjones.com/imp?s=68978&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68979&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68980&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68981&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68982&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68983&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68984&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68985&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68986&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68987&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68988&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68989&t=newsletter&sz=2x1&li=politicalmojo&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
		</tr>
	</tbody>
</table>
LIVERBA;
}
//$liveintent_toptags
//$liveintnet_rba
//$liveintent_bottomtags
//politics template
$topstory_anchor_name = "1 - ". htmlentities( $topstory_hed, ENT_COMPAT, "UTF-8");
$topstory_anchor_name_fb = "Facebook: " . htmlentities( $topstory_hed, ENT_COMPAT, "UTF-8");
$topstory_anchor_name_tt = "Twitter: " . htmlentities( $topstory_hed, ENT_COMPAT, "UTF-8");

$politics = <<<POLITICS
<div>
$mobile_styles
</div>
<div style="$main_div">
<table id="table_content" style="$main_table_styles" width="640" align="center" cellpadding="5" cellspacing="0" border="0">$lift_note_section
    <tr>
        <td style="$news_main_logo" align="center">
            <a href="https://www.motherjones.com"><img src="http://assets.motherjones.com/newsletters/images/politicalmojo_header_3.png" alt="Political MoJo" style="width:600px;border:none !important;" width="600" border="0" /></a>
		</td>
    </tr>
    <tr>
		<td align="left" valign="top" style="$section_title">$topstory_title</td>
    </tr>
    <tr>
        <td style="$standard_td">
            <a id="main_art_hed" href="$topstory_url" style="$hed_styles" name="$topstory_anchor_name">$topstory_hed</a>
            <div id="main_article" style="margin-top:5px;">
            	<span id="dek_font_size" style="$dek_style">$topstory_dek</span>
            </div>
            <sup><a id="read_more" href="$topstory_url" style="$read_more">[READ MORE]</a></sup> <sub><a href=\"http://www.facebook.com/sharer/sharer.php?u=$topstory_url\" name="$topstory_anchor_name_fb">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$topstory_url&text=$topstory_hed_enc&via=MotherJones\" name="$topstory_anchor_name_tt">$twitter_icon</a></sub>
        </td>
    </tr>
    <tr>
        <td align="center" style="$no_top_pad20">
            <br />
            <hr style="$separator_border" />
            <span style="$ad_style">&#8212;Advertisement&#8212;</span>
            $billboard_ad
        </td>
    </tr>
    $inothernews_section
    <tr>
        <td align="center" style="$no_top_pad20">
            <br />
            <hr style="$separator_border" />
            <br />
            $small_sub_ad
            <br />
        </td>
    </tr>
	$mostread_section
    <tr>
        <td align="center" style="$no_top_pad20">
            <br />
            <hr style="$separator_border" />
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
    <tr>
    	<td>
    		$safe_rbt
    	</td>
    </tr>
</table>
</div>
POLITICS;

//print out template HTML code
print $politics;

/* db section */
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
$topstory_hed = strip_tags(addslashes($topstory_hed));
$topstory_dek = strip_tags(addslashes($topstory_dek), "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>");
$topstory_url = addslashes($topstory_url);
$topstory_byline = strip_tags(addslashes($topstory_byline));
$inothernews_hed = strip_tags(addslashes($inothernews_hed));
$inothernews_url = addslashes($inothernews_url);
$inothernews2_hed = strip_tags(addslashes($inothernews2_hed));
$inothernews2_url = addslashes($inothernews2_url);
$inothernews3_hed = strip_tags(addslashes($inothernews3_hed));
$inothernews3_url = addslashes($inothernews3_url);
$mostread1_hed = strip_tags(addslashes($mostread1_hed));
$mostread1_url = addslashes($mostread1_url);
$mostread2_hed = strip_tags(addslashes($mostread2_hed));
$mostread2_url = addslashes($mostread2_url);
$topstory_title = strip_tags(addslashes($topstory_title));
$inothernews_title = strip_tags(addslashes($inothernews_title));
$mostread_title = strip_tags(addslashes($mostread_title));
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

//check if data exists in db
$check_existing = "SELECT id, hed_date FROM political_mojo_new WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");

if(mysqli_num_rows($existing_qry) > 0) {
    $exists = true;
}
else {
    $exists = false;
}

//if data exists, do an update, otherwise insert data
if($exists) {
    $run_qry = "UPDATE political_mojo_new
  SET hed_date='$headlines_date',
  topstory_hed='$topstory_hed',
  topstory_url='$topstory_url',
  topstory_dek='$topstory_dek',
  topstory_lead='$topstory_lead',
  topstory_byline='$topstory_byline',
  topstory_title='$topstory_title',
  inothernews_hed='$inothernews_hed',
  inothernews_url='$inothernews_url',
  inothernews2_hed='$inothernews2_hed',
  inothernews2_url='$inothernews2_url',
  inothernews3_hed='$inothernews3_hed',
  inothernews3_url='$inothernews3_url',
  inothernews_title='$inothernews_title',
  mostread1_hed='$mostread1_hed',
  mostread1_url='$mostread1_url',
  mostread2_hed='$mostread2_hed',
  mostread2_url='$mostread2_url',
  mostread_title='$mostread_title',
	ad_name='$advertiser_name',
  ad_link_bill='$billboard_url',
  ad_billboard='$billboard_image',
	ad_name2='$advertiser_name2',
  ad_link_banner='$billboard_url2',
  ad_banner='$billboard_image2',
  subject_line='$subject_line',
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
    $run_qry = "INSERT INTO political_mojo_new(hed_date,topstory_hed,topstory_url,topstory_dek,topstory_lead,topstory_byline,inothernews_hed,inothernews_url,inothernews2_hed,inothernews2_url,inothernews3_hed,inothernews3_url,mostread1_hed,mostread1_url,mostread2_hed,mostread2_url,ad_name,ad_link_bill,ad_billboard,ad_name2,ad_link_banner,ad_banner,topstory_title,inothernews_title,mostread_title,subject_line,sub_url,sub_image,sub_text, sub_code, lift_note,pixel_tracker,pixel_tracker2)
VALUES('$headlines_date',
       '$topstory_hed',
       '$topstory_url',
       '$topstory_dek',
       '$topstory_lead',
       '$topstory_byline',
       '$inothernews_hed',
       '$inothernews_url',
       '$inothernews2_hed',
       '$inothernews2_url',
       '$inothernews3_hed',
       '$inothernews3_url',
       '$mostread1_hed',
       '$mostread1_url',
       '$mostread2_hed',
       '$mostread2_url',
       '$advertiser_name',
       '$billboard_url',
       '$billboard_image',
       '$advertiser_name2',
       '$billboard_url2',
       '$billboard_image2',
       '$topstory_title',
       '$inothernews_title',
       '$mostread_title',
       '$subject_line',
       '$sub_url',
       '$sub_image',
		'$sub_text',
		'$sub_code',
		'$lift_note',
		'$pixel_tracker',
		'$pixel_tracker2')";
}
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly" . mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>