<?php 
/*Template for ReCharge newsletter
 * Author: Young Kim
 * Creation Date: 4/18/2018
 * Version: .1B
 */

//Post and Request section
if(isset($_REQUEST['recharge_main_hed']) && $_REQUEST['recharge_main_hed'] !== "") {
	$recharge_main_hed = trim($_REQUEST['recharge_main_hed']);
}
else {
	$recharge_main_hed = "";
}

if(isset($_REQUEST['recharge_main_url']) && $_REQUEST['recharge_main_url'] !== "") {
	$recharge_main_url = trim($_REQUEST['recharge_main_url']);
}
else {
	$recharge_main_url = "";
}

if(isset($_REQUEST['recharge_main_img']) && $_REQUEST['recharge_main_img'] !== "") {
	$recharge_main_img = trim($_REQUEST['recharge_main_img']);
}
else {
	$recharge_main_img = "";
}

if(isset($_REQUEST['recharge_main_dek']) && $_REQUEST['recharge_main_dek'] !== "") {
	$recharge_main_dek = trim($_REQUEST['recharge_main_dek']);
}
else {
	$recharge_main_dek = "";
}

if(isset($_REQUEST['recharge_main_source']) && $_REQUEST['recharge_main_source'] !== "") {
	$recharge_main_source = trim($_REQUEST['recharge_main_source']);
}
else {
	$recharge_main_source = "";
}

if(isset($_REQUEST['recharge_main_ital'])) {
	$recharge_main_ital = true;
}
else {
	$recharge_main_ital = false;
}

if(isset($_REQUEST['recharge1_dek']) && $_REQUEST['recharge1_dek'] !== "") {
	$recharge1_dek = trim($_REQUEST['recharge1_dek']);
}
else {
	$recharge1_dek = "";
}

if(isset($_REQUEST['recharge1_source']) && $_REQUEST['recharge1_source'] !== "") {
	$recharge1_source = trim($_REQUEST['recharge1_source']);
}
else {
	$recharge1_source = "";
}

if(isset($_REQUEST['recharge1_ital'])) {
	$recharge1_ital = true;
}
else {
	$recharge1_ital = false;
}

if(isset($_REQUEST['recharge1_url']) && $_REQUEST['recharge1_url'] !== "") {
	$recharge1_url = trim($_REQUEST['recharge1_url']);
}
else {
	$recharge1_url = "";
}

if(isset($_REQUEST['recharge2_dek']) && $_REQUEST['recharge2_dek'] !== "") {
	$recharge2_dek = trim($_REQUEST['recharge2_dek']);
}
else {
	$recharge2_dek = "";
}

if(isset($_REQUEST['recharge2_source']) && $_REQUEST['recharge2_source'] !== "") {
	$recharge2_source = trim($_REQUEST['recharge2_source']);
}
else {
	$recharge2_source = "";
}

if(isset($_REQUEST['recharge2_ital'])) {
	$recharge2_ital = true;
}
else {
	$recharge2_ital = false;
}

if(isset($_REQUEST['recharge2_url']) && $_REQUEST['recharge2_url'] !== "") {
	$recharge2_url = trim($_REQUEST['recharge2_url']);
}
else {
	$recharge2_url = "";
}

if(isset($_REQUEST['recharge3_dek']) && $_REQUEST['recharge3_dek'] !== "") {
	$recharge3_dek = trim($_REQUEST['recharge3_dek']);
}
else {
	$recharge3_dek = "";
}

if(isset($_REQUEST['recharge3_source']) && $_REQUEST['recharge3_source'] !== "") {
	$recharge3_source = trim($_REQUEST['recharge3_source']);
}
else {
	$recharge3_source = "";
}

if(isset($_REQUEST['recharge3_ital'])) {
	$recharge3_ital = true;
}
else {
	$recharge3_ital = false;
}

if(isset($_REQUEST['recharge3_url']) && $_REQUEST['recharge3_url'] !== "") {
	$recharge3_url = trim($_REQUEST['recharge3_url']);
}
else {
	$recharge3_url = "";
}

if(isset($_REQUEST['recharge4_dek']) && $_REQUEST['recharge4_dek'] !== "") {
	$recharge4_dek = trim($_REQUEST['recharge4_dek']);
}
else {
	$recharge4_dek = "";
}

if(isset($_REQUEST['recharge4_source']) && $_REQUEST['recharge4_source'] !== "") {
	$recharge4_source = trim($_REQUEST['recharge4_source']);
}
else {
	$recharge4_source = "";
}

if(isset($_REQUEST['recharge4_ital'])) {
	$recharge4_ital = true;
}
else {
	$recharge4_ital = false;
}

if(isset($_REQUEST['recharge4_url']) && $_REQUEST['recharge4_url'] !== "") {
	$recharge4_url = trim($_REQUEST['recharge4_url']);
}
else {
	$recharge4_url = "";
}

if(isset($_REQUEST['recharge5_dek']) && $_REQUEST['recharge5_dek'] !== "") {
	$recharge5_dek = trim($_REQUEST['recharge5_dek']);
}
else {
	$recharge5_dek = "";
}

if(isset($_REQUEST['recharge5_source']) && $_REQUEST['recharge5_source'] !== "") {
	$recharge5_source = trim($_REQUEST['recharge5_source']);
}
else {
	$recharge5_source = "";
}

if(isset($_REQUEST['recharge5_ital'])) {
	$recharge5_ital = true;
}
else {
	$recharge5_ital = false;
}

if(isset($_REQUEST['recharge5_url']) && $_REQUEST['recharge5_url'] !== "") {
	$recharge5_url = trim($_REQUEST['recharge5_url']);
}
else {
	$recharge5_url = "";
}

if(isset($_REQUEST['recharge_image_dek']) && $_REQUEST['recharge_image_dek'] !== "") {
	$recharge_image_dek = trim($_REQUEST['recharge_image_dek']);
}
else {
	$recharge_image_dek = "";	
}

if(isset($_REQUEST['recharge_image_credits']) && $_REQUEST['recharge_image_credits'] !== "") {
	$recharge_image_credits = trim($_REQUEST['recharge_image_credits']);
}
else {
	$recharge_image_credits = "";
}

if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] != "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}
//newsletter sections
//date formatting
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);

//Main article section
$main_section = "";
$url_style = "<a style=\"color: #ff6900;\"";

if($recharge_main_url !== "" || $recharge_main_url !== null) {
	$main_hed = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\"><a href=\"$recharge_main_url\"  style=\"text-decoration: none;color: #000;\">$recharge_main_hed</a></h3>\n";
	$recharge_main_source_format = "<a href=\"$recharge_main_url\" style=\"color:#ff6900;text-decoration:none;\">$recharge_main_source</a>";
}
else {
	$main_hed = "<h3 style=\"Margin-bottom: 10px;font-weight: bold; color: #000 !important;font-family:Georgia, serif;font-size: 33px; line-height: 38px;\">$recharge_main_hed</h3>\n";
	$recharge_main_source_format = $recharge_main_source;
}

if($recharge_main_img !== "" || $recharge_main_img !== null) {
	$main_img_sec = "<tr>\n\t<td style=\"border-bottom:1px solid #767676;line-height:0;\">\n\t<center><a href=\"$recharge_main_url\"><img src=\"$recharge_main_img\" style=\"Margin: 0 auto 5px auto;width:100%;max-width: 100%; height: auto;\" width=\"540\" border=\"0\" alt=\"recharge\" /></a></center>\n\t";
}
else {
	$main_img_sec = "";
}

$main_dek_p = "<p style=\"text-align:left;color: #222;font-family:Georgia, serif;font-size: 16px; line-height: 21px;\">";
$recharge_main_dek = str_replace("<p>", $main_dek_p, $recharge_main_dek);
$recharge_main_dek = str_replace("<a", $url_style, $recharge_main_dek);
//add source name & url
$get_last_p = strripos($recharge_main_dek, "</p>");
$get_substr = substr($recharge_main_dek, 0, $get_last_p);

if(isset($recharge_main_source) && $recharge_main_source !== "") {
	if($recharge_main_ital) {
		$recharge_main_dek_cat = $get_substr . " (<em>$recharge_main_source_format</em>)</p>\n";
	}
	else {
		$recharge_main_dek_cat = $get_substr . " ($recharge_main_source_format)</p>\n";
	}
}
else {
	$recharge_main_dek_cat = $recharge_main_dek;
}

$main_section = $main_img_sec . $main_hed . "\n\t" . $recharge_main_dek_cat . "\n\t</td>\n\t</tr>\n";
//end main section
//recharge article 1 & 2 (above ad)
$recharge_sec1 = "";
$recharge_sec2 = "";
$recharge_opener = "<tr>\n\t<td style=\"border-bottom: 1px solid #767676;\">\n\t";
$recharge_closer = "</td>\n\t</tr>\n";
$recharge_title_format = "<p style=\"margin-top: 0;font-size: 16px; line-height: 21px;font-weight: bold;font-style:italic;text-align:left;font-family:Georgia, serif;\">In this week&rsquo;s Recharge, we&rsquo;ll focus on the helpers, on acts of kindness, and on efforts to make a community a better place. There&rsquo;s a lot of good going on in the world beyond the headlines.</p>";
$recharge_p_format_dek = "<p style=\"color: #222; font-family:Georgia, serif;font-size: 16px; line-height: 21px;\">";
$recharge_bold_format_dek = "<span style=\"font-weight: bold; color: #000;\">";
$recharge_inline_img = "<img style=\"width:540px;max-width:540px\" width=\"540\" ";
$recharge_dek_sec1 = "";
$recharge_dek_sec2 = "";

if($recharge1_dek !== "" || $recharge2_dek !== "") {
	
	if($recharge1_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		$recharge1_dek = str_replace("<p>", $recharge_p_format_dek, $recharge1_dek);
		$recharge1_dek = str_replace("<strong>", $recharge_bold_format_dek, $recharge1_dek);
		$recharge1_dek = str_replace("</strong>", "</span>", $recharge1_dek);
		$recharge1_dek = str_replace("<a", $url_style, $recharge1_dek);
		
		//resize inline images
		$recharge1_dek = resizeInlineImg($recharge1_dek, "540px");
		
		$get_last_p = strripos($recharge1_dek, "</p>");
		$get_substr = substr($recharge1_dek, 0, $get_last_p);
		
		if(isset($recharge1_source) && $recharge1_source !== "") {
			if($recharge1_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$recharge1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge1_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$recharge1_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge1_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $recharge1_dek;
		}
		
		$recharge1 = $get_substr;
	}
	else {
		$recharge1 = "";
	}
	
	if($recharge2_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		$recharge2_dek = str_replace("<p>", $recharge_p_format_dek, $recharge2_dek);
		$recharge2_dek = str_replace("<strong>", $recharge_bold_format_dek, $recharge2_dek);
		$recharge2_dek = str_replace("</strong>", "</span>", $recharge2_dek);
		$recharge2_dek = str_replace("<a", $url_style, $recharge2_dek);
		
		//resize inline images
		$recharge2_dek = resizeInlineImg($recharge2_dek, "540px");
		
		$get_last_p = strripos($recharge2_dek, "</p>");
		$get_substr = substr($recharge2_dek, 0, $get_last_p);
		
		if(isset($recharge2_source) !== "") {
			if($recharge2_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$recharge2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge2_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$recharge2_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge2_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $recharge2_dek;
		}
		
		$recharge2 = $get_substr;
	}
	else {
		$recharge2 = "";
	}
	
	$recharge_sec1 = $recharge_opener . $recharge_title_format . $recharge1 . $recharge2 . $recharge_closer;
}
//end recharge article 1 & 2 (above ad)
//recharge article 3 & 4 & 5 (below ad)

$recharge_signoff = "<p style=\"font-family:Georgia, serif;font-size: 16px; line-height: 21px;font-weight:bold;font-style:italic;\">That's it for this week. We hope that Recharge helps you in the week ahead &#8212; and brings out the hellraiser in you. Have a tip or a link? Email us at <a style=\"color: #ff6900;\" href=\"mailto:recharge@motherjones.com\">recharge@motherjones.com</a>.</p>";

if($recharge3_dek !== "" || $recharge4_dek !== "" || $recharge5_dek !== "") {
	
	if($recharge3_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		$recharge3_dek = str_replace("<p>", $recharge_p_format_dek, $recharge3_dek);
		$recharge3_dek = str_replace("<strong>", $recharge_bold_format_dek, $recharge3_dek);
		$recharge3_dek = str_replace("</strong>", "</span>", $recharge3_dek);
		$recharge3_dek = str_replace("<a", $url_style, $recharge3_dek);
		
		//resize inline images
		$recharge3_dek = resizeInlineImg($recharge3_dek, "540px");
		
		$get_last_p = strripos($recharge3_dek, "</p>");
		$get_substr = substr($recharge3_dek, 0, $get_last_p);
		
		if(isset($recharge3_source) && $recharge3_source !== "") {
			if($recharge3_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$recharge3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge3_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$recharge3_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge3_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $recharge3_dek;
		}
		
		$recharge3 = $get_substr;
	}
	else {
		$recharge3 = "";
	}
	
	if($recharge4_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		$recharge4_dek = str_replace("<p>", $recharge_p_format_dek, $recharge4_dek);
		$recharge4_dek = str_replace("<strong>", $recharge_bold_format_dek, $recharge4_dek);
		$recharge4_dek = str_replace("</strong>", "</span>", $recharge4_dek);
		$recharge4_dek = str_replace("<a", $url_style, $recharge4_dek);
		
		//resize inline images
		$recharge4_dek = resizeInlineImg($recharge4_dek, "540px");
		
		$get_last_p = strripos($recharge4_dek, "</p>");
		$get_substr = substr($recharge4_dek, 0, $get_last_p);
		
		if(isset($recharge4_source) && $recharge4_source !== "") {
			if($recharge4_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$recharge4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge4_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$recharge4_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge4_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $recharge4_dek;
		}
		
		$recharge4 = $get_substr;
	}
	else {
		$recharge4 = "";
	}
	
	if($recharge5_dek !== "") {
		$get_last_p = "";
		$get_substr = "";
		$recharge5_dek = str_replace("<p>", $recharge_p_format_dek, $recharge5_dek);
		$recharge5_dek = str_replace("<strong>", $recharge_bold_format_dek, $recharge5_dek);
		$recharge5_dek = str_replace("</strong>", "</span>", $recharge5_dek);
		$recharge5_dek = str_replace("<a", $url_style, $recharge5_dek);
		
		//resize inline image
		$recharge5_dek = resizeInlineImg($recharge5_dek, "540px");
		
		$get_last_p = strripos($recharge5_dek, "</p>");
		$get_substr = substr($recharge5_dek, 0, $get_last_p);
		
		if(isset($recharge5_source) && $recharge5_source !== "") {
			if($recharge5_ital) {
				$get_substr = $get_substr . " (<em><a href=\"$recharge5_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge5_source . "</a></em>)</p>\n";
			}
			else {
				$get_substr = $get_substr . " (<a href=\"$recharge5_url\" style=\"text-decoration:none;color: #ff6900;\">" . $recharge5_source . "</a>)</p>\n";
			}
		}
		else {
			$get_substr = $recharge5_dek;
		}
		
		$recharge5 = $get_substr;
	}
	else {
		$recharge5 = "";
	}
	
	if($recharge_image_dek !== "") {
		$recharge_image_dek = str_replace("<p>", $recharge_p_format_dek, $recharge_image_dek);
		$recharge_image_dek = str_replace("<a", $url_style, $recharge_image_dek);
		/*resize inline image code*/
		resizeInlineImg($recharge_image_dek, "540px");
	}
	else {
		$recharge_image_dek = "";
	}
	
	if($recharge_image_credits !== "") {
		$recharge_image_credits = str_replace("<p>", "<p style=\"text-align:center;font-family:Georgia, serif;font-size: 14px; line-height: 19px;font-style:italic;color: #767676;\">", $recharge_image_credits);
	}
	else {
		$recharge_image_credits = "";
	}
	
	$recharge_sec2 = $recharge_opener . $recharge3 . $recharge4 . $recharge5 . $recharge_signoff . $recharge_image_dek . $recharge_image_credits . $recharge_closer;
	
}
//end recharge article 3 & 4 & 5 (below ad)
//ads
//lift note section
$lift_note_section = "";
if($lift_note !== "") {
	$search_this = "<p>";
	$replace_code = '<p style="font-family: Verdana, Helvetica, Arial, sans-serif;font-size: 16px;color: #767676;margin: 10px 20px;">';
	$lift_note = str_ireplace($search_this, $replace_code, $lift_note);
	$lift_note = str_ireplace("<strong>", "<strong style=\"color: #000;\">", $lift_note);
	$lift_note = str_ireplace("<a", "<a style=\"color: #ff6900;\"", $lift_note);
	$lift_note_section = "<tr><td>" . $lift_note . "</td></tr>";
}

//LiveIntent section
//safe RBT
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
	$safe_rbt = <<<SAFERBT
<table cellpadding="0" cellspacing="0" border="0" width="40" height="6"><tbody><tr><td><img src="http://li.motherjones.com/imp?s=124867900&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867901&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867902&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867903&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867904&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867905&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867906&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867907&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867908&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867909&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867910&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867911&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867912&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867913&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867914&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867915&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867916&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867917&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867918&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124867919&sz=2x1&li=trumpocracy&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td></tr></tbody></table>
SAFERBT;
}
//end LiveIntent section
//HTML template
$recharge = <<<RECHARGE
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
	<body style="min-width: 100%;background-color: #E9E9E9;margin: 0 auto;">
<div>
  $recharge_mobile
  <table width="100%" class="wrapper" align="center" style="Margin:0 auto;padding:0;background-color:#e9e9e9;" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <!--[if (gte mso 9)|(IE)]>
        <table width="620" align="center" border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;padding:0;background-color: #fff;border-spacing:0;">
          <tr>
            <td>
        <![endif]-->
        <table class="layout" align="center" cellpadding="0" cellspacing="0" width="620" style="Margin:0 auto;background-color: #fff;max-width:620px;">
					$lift_note_section
					<tr>
						<td>
							<div style="width:145px;text-align:center;margin:10px auto;" align="center">
								<img src="https://cdn.maropost.com/pro/uploads/account_585/215784/MoJoLoGo.png" style="max-width:145px;width:145px;" width="145">
							</div>
						</td>
					</tr>
          <tr>
            <td align="center" style="line-height:0;margin: 0;padding:0;">
              <img src="https://cdn.maropost.com/pro/uploads/account_585/214111/header_recharge_orange.png" width="620" style="Margin:0 auto;width:100%;max-width:100%;height:auto;line-height:0;" alt="Recharge" />
            </td>
          </tr>
          <tr>
            <td>
              <table class="spacing" align="center" width="580" cellpadding="0" cellspacing="20" style="max-width:580px;margin:0 auto;">
                <tr>
                  <td align="center" style="border-bottom: 1px solid #000;">
                    <p style="Margin-top:0;Margin-bottom: 16px;color: #000 !important;text-decoration: none !important;text-align:center;font-size: 18px;line-height:21px;font-family:Georgia, serif;font-weight:bold;font-style:italic;" id="date_line">Stories that’ll get you through the week. <span style="color: #ff6900;">/</span> <strong>April 6, 2018</strong></p>
                  </td>
                </tr>
                $main_section
								<tr>
                  <td style="border-bottom: 1px solid #767676;">
                    <p class="ad_text" style="margin-top:0;color: #222; text-align: center;font-family:Georgia, serif; font-size: 12px;font-style:italic;">&#8212;Advertisement&#8212;</p>
										$billboard_ad
                    <br />
                    <!--[if (gte mso 9)|(IE)]>
                    <br />
                    <![endif]-->
                  </td>
                </tr>
                $recharge_sec1
                <tr>
                  <td style="border-bottom:1px solid #767676;" align="center">
                    $small_sub_ad
                    <br />
                    <!--[if (gte mso 9)|(IE)]>
                    <br />
                    <![endif]-->
                  </td>
                </tr>
                $recharge_sec2
                <tr>
                  <td align="center">
                    $newsletter_info
                  </td>
                </tr>
                <tr>
                  <td>
                    <!--[if (gte mso 9)|(IE)]>
                    <br /><br />
                    <![endif]-->
                    $trumpocracy_footer
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
RECHARGE;

//print out HTML template
print $recharge;
//end HTML template

/* db operations */
//connect to db
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");
//clean sql strings
$recharge_main_hed = addslashes($recharge_main_hed);
$recharge_main_url = addslashes($recharge_main_url);
$recharge_main_img = addslashes($recharge_main_img);
$recharge_main_dek = addslashes($recharge_main_dek);
$recharge_main_source = addslashes($recharge_main_source);
$recharge1_dek = addslashes($recharge1_dek);
$recharge1_source = addslashes($recharge1_source);
$recharge1_url = addslashes($recharge1_url);
$recharge2_dek = addslashes($recharge2_dek);
$recharge2_source = addslashes($recharge2_source);
$recharge2_url = addslashes($recharge2_url);
$recharge3_dek = addslashes($recharge3_dek);
$recharge3_source = addslashes($recharge3_source);
$recharge3_url = addslashes($recharge3_url);
$recharge4_dek = addslashes($recharge4_dek);
$recharge4_source = addslashes($recharge4_source);
$recharge4_url = addslashes($recharge4_url);
$recharge5_dek = addslashes($recharge5_dek);
$recharge5_source = addslashes($recharge5_source);
$recharge5_url = addslashes($recharge5_url);
$recharge_image_dek = addslashes($recharge_image_dek);
$recharge_image_credits = addslashes($recharge_image_credits);
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
$check_existing = "SELECT id, hed_date FROM recharge WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

//if data exists, update, otherwise insert data
if($exists) {
	$run_qry = "UPDATE recharge
	SET hed_date = '$headlines_date',
	subject_line='$subject_line',
	recharge_main_hed = '$recharge_main_hed',
	recharge_main_url = '$recharge_main_url',
	recharge_main_img = '$recharge_main_img',
	recharge_main_dek = '$recharge_main_dek',
	recharge_main_source = '$recharge_main_source',
	recharge_main_ital = '$recharge_main_ital',
	recharge1_dek = '$recharge1_dek',
	recharge1_source = '$recharge1_source',
	recharge1_ital = '$recharge1_ital',
	recharge1_url = '$recharge1_url',
	recharge2_dek = '$recharge2_dek',
	recharge2_source = '$recharge2_source',
	recharge2_ital = '$recharge2_ital',
	recharge2_url = '$recharge2_url',
	recharge3_dek = '$recharge3_dek',
	recharge3_source = '$recharge3_source',
	recharge3_ital = '$recharge3_ital',
	recharge3_url = '$recharge3_url',
	recharge4_dek = '$recharge4_dek',
	recharge4_source = '$recharge4_source',
	recharge4_ital = '$recharge4_ital',
	recharge4_url = '$recharge4_url',
	recharge5_dek = '$recharge5_dek',
	recharge5_source = '$recharge5_source',
	recharge5_ital = '$recharge5_ital',
	recharge5_url = '$recharge5_url',
	recharge_image_dek = '$recharge_image_dek',
	recharge_image_credits = '$recharge_image_credits',
	ad_link_bill = '$billboard_url',
	ad_billboard = '$billboard_image',
	ad_name = '$advertiser_name',
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
	$run_qry = "INSERT INTO recharge(hed_date,subject_line,recharge_main_hed,recharge_main_url,recharge_main_img,recharge_main_dek,recharge_main_source,recharge_main_ital,recharge1_dek,recharge1_source,recharge1_ital,recharge1_url,recharge2_dek,recharge2_source,recharge2_ital,recharge2_url,recharge3_dek,recharge3_source,recharge3_ital,recharge3_url,recharge4_dek,recharge4_source,recharge4_ital,recharge4_url,recharge5_dek,recharge5_source,recharge5_ital,recharge5_url,recharge_image_dek,recharge_image_credits,ad_name,ad_link_bill,ad_billboard,sub_url,sub_image,sub_text,sub_code,lift_note,pixel_tracker,pixel_tracker2)
	VALUES('$headlines_date',
	'$subject_line',
	'$recharge_main_hed',
	'$recharge_main_url',
	'$recharge_main_img',
	'$recharge_main_dek',
	'$recharge_main_source',
	'$recharge_main_ital',
	'$recharge1_dek',
	'$recharge1_source',
	'$recharge1_ital',
	'$recharge1_url',
	'$recharge2_dek',
	'$recharge2_source',
	'$recharge2_ital',
	'$recharge2_url',
	'$recharge3_dek',
	'$recharge3_source',
	'$recharge3_ital',
	'$recharge3_url',
	'$recharge4_dek',
	'$recharge4_source',
	'$recharge4_ital',
	'$recharge4_url',
	'$recharge5_dek',
	'$recharge5_source',
	'$recharge5_ital',
	'$recharge5_url',
	'$recharge_image_dek',
	'$recharge_image_credits',
	'$advertiser_name',
	'$billboard_url',
	'$billboard_image',
	'$sub_url',
	'$sub_image',
	'$sub_text',
	'$sub_code',
	'$lift_note',
	'$pixel_tracker',
	'$pixel_tracker2')";
}
/* end db operations */

//flush query and close db connections
mysqli_query($db_connect, $run_qry) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);
/* end db section */
?>