<?php
/* WireTap template */
/* WireTap variables */
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";
//Featured
if(isset($_REQUEST['twmustread_hed']) && $_REQUEST['twmustread_hed'] != "") {
	$twmustread_hed = trim($_REQUEST['twmustread_hed']);
	$twmustread_hed_enc = urlencode($twmustread_hed);
}
else {
	$twmustread_hed = "";
	$twmustread_hed_enc = "";
}
if(isset($_REQUEST['twmustread_url']) && $_REQUEST['twmustread_url'] != "") {
	$twmustread_url = trim($_REQUEST['twmustread_url']);
}
else {
	$twmustread_url = "";
}
if(isset($_REQUEST['twmustread_dek']) && $_REQUEST['twmustread_dek'] != "") {
	$twmustread_dek = strip_tags(trim($_REQUEST['twmustread_dek']), $allowed_html);
}
else {
	$twmustread_dek = "";
}
if(isset($_REQUEST['twmustread_lead']) && $_REQUEST['twmustread_lead'] != "") {
	$twmustread_lead = strip_tags($_REQUEST['twmustread_lead'],$allowed_html);
}
else {
	$twmustread_lead = "";
}
if(isset($_REQUEST['twmustread_title']) && $_REQUEST['twmustread_title'] != "") {
	$twmustread_title = strip_tags($_REQUEST['twmustread_title'],$allowed_html);
}
else {
	$twmustread_title = "Must-Read";
}

//More from the mix section
if(isset($_REQUEST['morefrommix1_hed']) && $_REQUEST['morefrommix1_hed'] != "") {
	$morefrommix1_hed = trim($_REQUEST['morefrommix1_hed']);
}
else {
	$morefrommix1_hed = "";
}

if(isset($_REQUEST['morefrommix1_url']) && $_REQUEST['morefrommix1_url'] != "") {
	$morefrommix1_url = trim($_REQUEST['morefrommix1_url']);
}
else {
	$morefrommix1_url = "";
}

if(isset($_REQUEST['morefrommix2_hed']) && $_REQUEST['morefrommix2_hed'] != "") {
	$morefrommix2_hed = trim($_REQUEST['morefrommix2_hed']);
}
else {
	$morefrommix2_hed = "";
}

if(isset($_REQUEST['morefrommix2_url']) && $_REQUEST['morefrommix2_url'] != "") {
	$morefrommix2_url = trim($_REQUEST['morefrommix2_url']);
}
else {
	$morefrommix2_url = "";
}

if(isset($_REQUEST['morefrommix3_hed']) && $_REQUEST['morefrommix3_hed'] != "") {
	$morefrommix3_hed = trim($_REQUEST['morefrommix3_hed']);
}
else {
	$morefrommix3_hed = "";
}

if(isset($_REQUEST['morefrommix3_url']) && $_REQUEST['morefrommix3_url'] != "") {
	$morefrommix3_url = trim($_REQUEST['morefrommix3_url']);
}
else {
	$morefrommix3_url = "";
}

if(isset($_REQUEST['morefrommix4_hed']) && $_REQUEST['morefrommix4_hed'] != "") {
	$morefrommix4_hed = trim($_REQUEST['morefrommix4_hed']);
}
else {
	$morefrommix4_hed = "";
}

if(isset($_REQUEST['morefrommix4_url']) && $_REQUEST['morefrommix4_url'] != "") {
	$morefrommix4_url = trim($_REQUEST['morefrommix4_url']);
}
else {
	$morefrommix4_url = "";
}

if(isset($_REQUEST['morefrommix5_hed']) && $_REQUEST['morefrommix5_hed'] != "") {
	$morefrommix5_hed = trim($_REQUEST['morefrommix5_hed']);
}
else {
	$morefrommix5_hed = "";
}

if(isset($_REQUEST['morefrommix5_url']) && $_REQUEST['morefrommix5_url'] != "") {
	$morefrommix5_url = trim($_REQUEST['morefrommix5_url']);
}
else {
	$morefrommix5_url = "";
}

if(isset($_REQUEST['morefrommix_title']) && $_REQUEST['morefrommix_title'] != "") {
	$morefrommix_title = strip_tags(trim($_REQUEST['morefrommix_title']));
}
else {
	$morefrommix_title = "More News";
}
//end more from the mix

//from the arcive / bottom section
if(isset($_REQUEST['fromarchive1_hed']) && $_REQUEST['fromarchive1_hed'] != "") {
	$fromarchive1_hed = trim($_REQUEST['fromarchive1_hed']);
}
else {
	$fromarchive1_hed = "";
}

if(isset($_REQUEST['fromarchive1_url']) && $_REQUEST['fromarchive1_url'] != "") {
	$fromarchive1_url = trim($_REQUEST['fromarchive1_url']);
}
else {
	$fromarchive1_url = "";
}

if(isset($_REQUEST['fromarchive2_hed']) && $_REQUEST['fromarchive2_hed'] != "") {
	$fromarchive2_hed = trim($_REQUEST['fromarchive2_hed']);
}
else {
	$fromarchive2_hed = "";
}

if(isset($_REQUEST['fromarchive2_url']) && $_REQUEST['fromarchive2_url'] != "") {
	$fromarchive2_url = trim($_REQUEST['fromarchive2_url']);
}
else {
	$fromarchive2_url = "";
}

if(isset($_REQUEST['fromarchive3_hed']) && $_REQUEST['fromarchive3_hed'] != "") {
	$fromarchive3_hed = trim($_REQUEST['fromarchive3_hed']);
}
else {
	$fromarchive3_hed = "";
}

if(isset($_REQUEST['fromarchive3_url']) && $_REQUEST['fromarchive3_url'] != "") {
	$fromarchive3_url = trim($_REQUEST['fromarchive3_url']);
}
else {
	$fromarchive3_url = "";
}

if(isset($_REQUEST['fromarchive4_hed']) && $_REQUEST['fromarchive4_hed'] != "") {
	$fromarchive4_hed = trim($_REQUEST['fromarchive4_hed']);
}
else {
	$fromarchive4_hed = "";
}

if(isset($_REQUEST['fromarchive4_url']) && $_REQUEST['fromarchive4_url'] != "") {
	$fromarchive4_url = trim($_REQUEST['fromarchive4_url']);
}
else {
	$fromarchive4_url = "";
}

if(isset($_REQUEST['fromarchive5_hed']) && $_REQUEST['fromarchive5_hed'] != "") {
	$fromarchive5_hed = trim($_REQUEST['fromarchive5_hed']);
}
else {
	$fromarchive5_hed = "";
}

if(isset($_REQUEST['fromarchive5_url']) && $_REQUEST['fromarchive5_url'] != "") {
	$fromarchive5_url = trim($_REQUEST['fromarchive5_url']);
}
else {
	$fromarchive5_url = "";
}

if(isset($_REQUEST['fromarchive_title']) && $_REQUEST['fromarchive_title'] != "") {
	$fromarchive_title = trim($_REQUEST['fromarchive_title']);
}
else {
	$fromarchive_title = "Don't Miss";
}

if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] != "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}
// end from the archive / bottom section
//template set up
//More from Mix section
$morefrommix_section = "";
$mfm1_full = "";
$mfm2_full = "";
$mfm3_full = "";
$mfm_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$morefrommix_title\n</td>\n</tr>";

if(isset($morefrommix1_hed) && $morefrommix1_hed !== "") {
	$mfm1_url = "";
	$mfm1_anchor_name = "2 - " . htmlentities( $morefrommix1_hed, ENT_COMPAT, "UTF-8");
	$mfm1_url_close = "";
	$mfm1_social_media = "";
	
	if(isset($morefrommix1_url) && $morefrommix1_url !== "") {
		$mfm1_url = "<a class=\"article_hed\" href=\"$morefrommix1_url\" style=\"$hed_styles\" name=\"$mfm1_anchor_name\">";
		$mfm1_url_close = "</a>";
		
		/*$mfm1_social_media = "<br />\n<a href=\"http://www.facebook.com/sharer/sharer.php?u=$morefrommix1_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$morefrommix1_url&text=$morefrommix1_hed&via=MotherJones\" target=\"_blank\">$twitter_icon</a>\n";*/
	}
	
	$mfm1_full = "<tr>\n<td style=\"$standard_td\">\n$mfm1_url". $morefrommix1_hed. "$mfm1_url_close\n" . "$mfm1_social_media</td>\n</tr>\n";
}
else {
	$mfm1_full = "";
}

if(isset($morefrommix2_hed) && $morefrommix2_hed !== "") {
	$mfm2_url = "";
	$mfm2_anchor_name = "3 - " . htmlentities( $morefrommix2_hed, ENT_COMPAT, "UTF-8");
	$mfm2_url_close = "";
	$mfm2_social_media = "";
	
	if(isset($morefrommix2_url) && $morefrommix2_url !== "") {
		$mfm2_url = "<a class=\"article_hed\" href=\"$morefrommix2_url\" style=\"$hed_styles\" name=\"$mfm2_anchor_name\">";
		$mfm2_url_close = "</a>";
		
		//$mfm2_social_media = "<br />\n<a href=\"http://www.facebook.com/sharer/sharer.php?u=$morefrommix2_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$morefrommix2_url&text=$morefrommix2_hed&via=MotherJones\" target=\"_blank\">$twitter_icon</a>\n";
	}
	
	$mfm2_full = "<tr>\n<td style=\"$standard_td\">\n$mfm2_url". $morefrommix2_hed . "$mfm2_url_close\n" . "$mfm2_social_media</td>\n</tr>\n";
}
else {
	$mfm2_full = "";
}

if(isset($morefrommix3_hed) && $morefrommix3_hed !== "") {
	$mfm3_url = "";
	$mfm3_anchor_name = "4 - " . htmlentities( $morefrommix3_hed, ENT_COMPAT, "UTF-8");
	$mfm3_url_close = "";
	$mfm3_social_media = "";
	
	if(isset($morefrommix3_url) && $morefrommix3_url !== "") {
		$mfm3_url = "<a class=\"article_hed\" href=\"$morefrommix3_url\" style=\"$hed_styles\" name=\"$mfm3_anchor_name\">";
		$mfm3_url_close = "</a>";
		
		/*$mfm3_social_media = "<br />\n<a href=\"http://www.facebook.com/sharer/sharer.php?u=$morefrommix3_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$morefrommix3_url&text=$morefrommix3_hed&via=MotherJones\" target=\"_blank\">$twitter_icon</a>\n";*/
	}
	
	$mfm3_full = "<tr>\n<td style=\"$standard_td\">\n$mfm3_url". $morefrommix3_hed . "$mfm3_url_close\n" . "$mfm3_social_media</td>\n</tr>\n";
}
else {
	$mfm3_full = "";
}

if($mfm1_full == "" && $mfm2_full == "" && $mfm3_full == "") {
	$morefrommix_section = "";
}
else {
	$morefrommix_section = $mfm_title . $mfm1_full . $mfm2_full . $mfm3_full;
}
//end More from Mix

//From the Archive section
$fromarchive_section = "";
$fa_full = "";
$fa_title = "<tr>\n<td style=\"$section_title\">\n<hr style=\"$separator_border\" />\n<br />\n$fromarchive_title\n</td>\n</tr>";

if(isset($fromarchive1_hed) && $fromarchive1_hed !== "") {
	$fa1_url = "";
	$fa1_anchor_name = "5 - " . htmlentities( $fromarchive1_hed, ENT_COMPAT, "UTF-8");
	$fa1_url_close = "";
	$fa1_social_media = "";
	
	if(isset($fromarchive1_url) && $fromarchive1_url !== "") {
		$fa1_url = "<a class=\"article_hed\" href=\"$fromarchive1_url\" style=\"$hed_styles\" name=\"$fa1_anchor_name\">";
		$fa1_url_close = "</a>";
		
		/*$fa1_social_media = "<br />\n<a href=\"http://www.facebook.com/sharer/sharer.php?u=$fromarchive1_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$fromarchive1_url&text=$fromarchive1_hed&via=MotherJones\" target=\"_blank\">$twitter_icon</a>\n";*/
	}
	
	$fa1_full = "<tr>\n<td style=\"$standard_td\">\n$fa1_url". $fromarchive1_hed. "$fa1_url_close\n" . "$fa1_social_media</td>\n</tr>\n";
}
else {
	$fa1_full = "";
}

if(isset($fromarchive2_hed) && $fromarchive2_hed !== "") {
	$fa2_url = "";
	$fa2_anchor_name = "6 - " . htmlentities( $fromarchive2_hed, ENT_COMPAT, "UTF-8");
	$fa2_url_close = "";
	$fa2_social_media = "";
	
	if(isset($fromarchive2_url) && $fromarchive2_url !== "") {
		$fa2_url = "<a class=\"article_hed\" href=\"$fromarchive2_url\" style=\"$hed_styles\" name=\"$fa2_anchor_name\">";
		$fa2_url_close = "</a>";
		
		/*$fa2_social_media = "<br />\n<a href=\"http://www.facebook.com/sharer/sharer.php?u=$fromarchive2_url\">$facebook_icon</a>\n<a href=\"http://twitter.com/intent/tweet?url=$fromarchive2_url&text=$fromarchive2_hed&via=MotherJones\" target=\"_blank\">$twitter_icon</a>\n";*/
	}
	
	$fa2_full = "<tr>\n<td style=\"$standard_td\">\n$fa2_url". $fromarchive2_hed. "$fa2_url_close\n" . "$fa2_social_media</td>\n</tr>\n";
}
else {
	$fa2_full = "";
}

if($fa1_full == "" || $fa2_full == "") {
	$fromarchive_section = "";
}
else {
	$fromarchive_section = $fa_title . $fa1_full . $fa2_full;
}
//end From the Archive

//lift note section
$lift_note_section = "";
if(isset($lift_note) && $lift_note !== "") {
	$search_this = "<p>";
	$replace_code = '<p style="font-family: Verdana, Helvetica, Arial, sans-serif !important;font-size: 16px !important;line-height:20px !important;color: #767676 !important;margin: 10px 20px;">';
	$lift_note = str_ireplace($search_this, $replace_code, $lift_note);
	$lift_note_section = "<tr><td class=\"standard_td\" style=\"padding: 10px 20px !important;\">" . $lift_note . "<hr style=\"border:1px solid #e8e8e8;background-color: #f2eeed;width:100%;\" /></td></tr>";
}

//text ad section
/*$text_ad = strip_tags(stripslashes($text_ad_dek), "<br><b><strong><a><map><area><img>");
 $text_ad = "<div style=\"font-size:12px;text-align:left;color:#666666;margin-top:7px !important;margin-right:20px !important;margin-left:20px !important;\">" . $text_ad . "</div>";*/

//live intent section
$liveintent_toptags = "";
$liveintent_bottomtags = "";
$liveintnet_rba = "";
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
	//safe RBT
	$safe_rbt = <<<SAFERBT
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"40\" height=\"6\"><tbody><tr><td><img src=\"http://li.motherjones.com/imp?s=68966&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68967&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68968&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68969&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68970&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68971&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68972&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68973&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68974&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68975&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68976&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=68977&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399412&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399413&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399414&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399415&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399416&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399417&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399418&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td><td><img src=\"http://li.motherjones.com/imp?s=123399419&sz=2x1&li=inthemix&e={{contact.email}}&p={{campaign.id}}$timestamp\" width=\"2\" height=\"6\" border=\"0\" /></td></tr></tbody></table>
SAFERBT;
	
	$liveintent_toptags = <<<LIVETOP
<table align="center" cellpadding="0" cellspacing="0" border="0" width="768">
	<tbody>
		<tr>
			<td colspan="3" align="center" height="1" valign="bottom">
				<a href="http://li.motherjones.com/click?s=68918&t=newsletter&sz=728x91&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68918&t=newsletter&sz=728x91&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="1">
				<a href="http://li.motherjones.com/click?s=68916&t=newsletter&sz=160x601&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68916&t=newsletter&sz=160x601&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
			</td>
			<td valign="top" width="100%">
LIVETOP;
	
	$liveintent_bottomtags = <<<LIVEBOTTOM
			</td>
			<td align="left" valign="top" width="1">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="2">
							<a href="http://li.motherjones.com/click?s=68917&t=newsletter&sz=300x601&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68917&t=newsletter&sz=300x601&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
					</tr>
					<tr style="display:block; height:1px; line-height:1px;">
						<td>
							<img src="http://li.motherjones.com/imp?s=68919&t=newsletter&sz=1x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
						<td>
							<img src="http://li.motherjones.com/imp?s=68920&t=newsletter&sz=1x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" height="1" width="10" />
						</td>
					</tr>
					<tr>
						<td align="left">
							<a href="http://li.motherjones.com/click?s=68922&t=newsletter&sz=116x15&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68922&t=newsletter&sz=116x15&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
						</td>
						<td align="right">
							<a href="http://li.motherjones.com/click?s=68921&t=newsletter&sz=69x15&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" rel="nofollow"><img src="http://li.motherjones.com/imp?s=68921&t=newsletter&sz=69x15&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" border="0"/></a>
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
				<img src="http://li.motherjones.com/imp?s=68966&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68967&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68968&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68969&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68970&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68971&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68972&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68973&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68974&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68975&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68976&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
			<td>
				<img src="http://li.motherjones.com/imp?s=68977&t=newsletter&sz=2x1&li=inthemix&m=[[T10:[[S1:primary_email]]]]&p=$timestamp" width="2" height="6" border="0" />
			</td>
		</tr>
	</tbody>
</table>
LIVERBA;
}
//$liveintent_toptags
//$liveintnet_rba
//$liveintent_bottomtags
//In the Mix template
$twmustread_anchor_name = "1 - " . htmlentities( $twmustread_hed, ENT_COMPAT, "UTF-8");
$twmustread_anchor_name_fb = "Facebook: " . htmlentities( $twmustread_hed, ENT_COMPAT, "UTF-8");
$twmustread_anchor_name_tt = "Twitter: " . htmlentities( $twmustread_hed, ENT_COMPAT, "UTF-8");
$inthemix = <<<INTHEMIX
<div>
$mobile_styles
</div>
<div style="$main_div" id="main_background">
<table id="table_content" style="$main_table_styles" width="640" align="center" cellpadding="5" cellspacing="0" border="0">$lift_note_section
    <tr>
        <td style="$news_main_logo" align="center">
            <img src="http://assets.motherjones.com/newsletters/images/inthemix-header-new-2017.png" alt="In the Mix" style="width:600px;border: none !important;" width="600" border="0" />
		</td>
    </tr>
    <tr>
		<td align="left" valign="top" style="$section_title">$twmustread_title</td>
    </tr>
    <tr>
        <td style="$standard_td">
            <a id="main_art_hed" href="$twmustread_url" style="$hed_styles" name="$twmustread_anchor_name">$twmustread_hed</a>
            <div id="main_article" style="margin-top:5px;">
            	<span id="dek_font_size" style="$dek_style">$twmustread_dek</span>
            </div>
            <sup><a id="read_more" href="$twmustread_url" style="$read_more">[READ MORE]</a></sup> <sub><a href="http://www.facebook.com/sharer/sharer.php?u=$twmustread_url" name="$twmustread_anchor_name_fb">$facebook_icon</a>\n<a href="http://twitter.com/intent/tweet?url=$twmustread_url&text=$twmustread_hed_enc&via=MotherJones" name="$twmustread_anchor_name_tt">$twitter_icon</a></sub>
        </td>
    </tr>
    <tr>
        <td align="center" style="$no_top_pad20">
            <hr style="$separator_border" />
            <br />
            <span style="$ad_style">&#8212;Advertisement&#8212;</span>
            $billboard_ad
        </td>
    </tr>
	$morefrommix_section
    <tr>
        <td align="center" style="$no_top_pad20">
        	<br />
        	<hr style="$separator_border" />
            <br />
            $small_sub_ad
            <br />
        </td>
    </tr>
	$fromarchive_section
    <tr>
        <td align="center" style="$no_top_pad20">
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
    <tr>
    	<td>
        	$safe_rbt
        </td>
    </tr>
</table>
</div>
INTHEMIX;

/* text ad code
 <tr>
 <td class="no_top_pad" align="center" style="$no_top_pad20">
 <br />
 <hr style="$separator_border" />
 <br />
 <span style="$ad_style">&#8212;Advertisement&#8212;</span>
 </td>
 </tr>
 <tr>
 <td class="standard_td" align="left" style="$no_top_pad80">
 $text_ad
 </td>
 </tr>
 */

//print out HTML template code
print $inthemix;

/*db section*/
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
$twmustread_hed = strip_tags(addslashes($twmustread_hed));
$twmustread_dek = strip_tags(addslashes($twmustread_dek), "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>");
$twmustread_url = addslashes($twmustread_url);
$twmustread_title = addslashes($twmustread_title);
$morefrommix1_hed = strip_tags(addslashes($morefrommix1_hed));
$morefrommix1_url = addslashes($morefrommix1_url);
$morefrommix2_hed = strip_tags(addslashes($morefrommix2_hed));
$morefrommix2_url = addslashes($morefrommix2_url);
$morefrommix3_hed = strip_tags(addslashes($morefrommix3_hed));
$morefrommix3_url = addslashes($morefrommix3_url);
$morefrommix_title = addslashes($morefrommix_title);
$fromarchive1_hed = strip_tags(addslashes($fromarchive1_hed));
$fromarchive1_url = addslashes($fromarchive1_url);
$fromarchive2_hed = strip_tags(addslashes($fromarchive2_hed));
$fromarchive2_url = addslashes($fromarchive2_url);
$fromarchive_title = strip_tags(addslashes($fromarchive_title));
$subject_line = addslashes(str_replace("â€”","–", $subject_line));
$sub_code = addslashes($sub_code);
$lift_note = addslashes($lift_note);
$pixel_tracker = addslashes($pixel_tracker);
$pixel_tracker2 = addslashes($pixel_tracker2);

//check if data exists in db
$check_existing = "SELECT id, hed_date FROM in_the_mix_new WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");

if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

//if data exists, then do an update, othewise insert data
if($exists) {
	$run_qry = "UPDATE in_the_mix_new
	SET hed_date='$headlines_date',
	twmustread_hed='$twmustread_hed',
	twmustread_url='$twmustread_url',
	twmustread_dek='$twmustread_dek',
	morefrommix1_hed='$morefrommix1_hed',
	morefrommix1_url='$morefrommix1_url',
	morefrommix2_hed='$morefrommix2_hed',
	morefrommix2_url='$morefrommix2_url',
	morefrommix3_hed='$morefrommix3_hed',
	morefrommix3_url='$morefrommix3_url',
	fromarchive1_hed='$fromarchive1_hed',
	fromarchive1_url='$fromarchive1_url',
	fromarchive2_hed='$fromarchive2_hed',
	fromarchive2_url='$fromarchive2_url',
	ad_name='$advertiser_name',
	ad_link_bill='$billboard_url',
	ad_billboard='$billboard_image',
	ad_name2='$advertiser_name2',
	ad_link_banner='$billboard_url2',
	ad_banner='$billboard_image2',
	subject_line='$subject_line',
	sub_url='$sub_url',
	sub_image='$sub_image',
	sub_text='$sub_text',
	twmustread_lead='$twmustread_lead',
	twmustread_title='$twmustread_title',
	morefrommix_title='$morefrommix_title',
	fromarchive_title='$fromarchive_title',
	sub_code='$sub_code',
	lift_note='$lift_note',
	pixel_tracker='$pixel_tracker',
	pixel_tracker2='$pixel_tracker2'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO in_the_mix_new(hed_date,twmustread_hed,twmustread_url,twmustread_dek,morefrommix1_hed,morefrommix1_url,morefrommix2_hed,morefrommix2_url,morefrommix3_hed,morefrommix3_url,fromarchive1_hed,fromarchive1_url,fromarchive2_hed,fromarchive2_url,ad_name,ad_link_bill,ad_billboard,ad_name2,ad_link_banner,ad_banner,subject_line,sub_url, sub_image, sub_text,twmustread_lead,twmustread_title,morefrommix_title,fromarchive_title, sub_code, lift_note,pixel_tracker,pixel_tracker2)
	VALUES('$headlines_date',
	'$twmustread_hed',
	'$twmustread_url',
	'$twmustread_dek',
	'$morefrommix1_hed',
	'$morefrommix1_url',
	'$morefrommix2_hed',
	'$morefrommix2_url',
	'$morefrommix3_hed',
	'$morefrommix3_url',
	'$fromarchive1_hed',
	'$fromarchive1_url',
	'$fromarchive2_hed',
	'$fromarchive2_url',
	'$advertiser_name',
	'$billboard_url',
	'$billboard_image',
	'$advertiser_name2',
	'$billboard_url2',
	'$billboard_image2',
	'$subject_line',
	'$sub_url',
	'$sub_image',
	'$sub_text',
	'$twmustread_lead',
	'$twmustread_title',
	'$morefrommix_title',
	'$fromarchive_title',
	'$sub_code',
	'$lift_note',
	'$pixel_tracker',
	'$pixel_tracker2')";
}
//free memory and close db connection
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly" . mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>