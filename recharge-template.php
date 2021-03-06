<?php
/*Template for Recharge newsletter
 * Author: Young Kim
 * Creation Date: 4/18/2018
 * Update: 5/09/2018
 * Version: 1.02
 * Update: 8/22/2018
 * Version: 1.03 -- Reduced font size for Recharge tag line
 * Update: 9/11/2018
 * Version: 1.04 -- Eliminated the intro language from newsletter
 */

//Post and Request section (get all input fields for newsletter)
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

if(isset($_REQUEST['recharge_intro_dek']) && $_REQUEST['recharge_intro_dek'] !== "") {
    $recharge_intro_dek = trim($_REQUEST['recharge_intro_dek']);
}
else {
    $recharge_intro_dek = "<strong><em>In this week&rsquo;s <span style='font-style:normal;'>Recharge</span>, we&rsquo;ll focus on the helpers, on acts of kindness, and on efforts to make a community a better place. There&rsquo;s a lot of good going on in the world beyond the headlines</em></strong>.";
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

if(isset($_REQUEST['recharge_sign_off_dek']) && $_REQUEST['recharge_sign_off_dek'] !== "") {
    $recharge_sign_off_dek = trim($_REQUEST['recharge_sign_off_dek']);
}
else {
    $recharge_sign_off_dek = "<p><strong>Recharge <em>is written by me, David Beard, a veteran writer and editor. If you want to share this edition with someone, here&rsquo;s a <a href=\"https://www.motherjones.com/topics/recharge/\">link</a> to these stories and a sign-up form</em></strong>.</p><p><strong><em>Have a tip or a story suggestion? Email us at <a href=\"mailto:recharge@motherjones.com\">recharge@motherjones.com</a></em></strong>.</p>";
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

//newsletter sections
//date formatting
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);
/* use this function to add HTML attributes:
 *
 *  modifyHTML($html_code, $html_tag, $html_attrs, $html_value)
 *
 *  if adding multiple attributes to a single tag, pass associative array in $html_attrs
 *  holding {attribute name}=>{attribute value} and do not pass anything for $html_value
 *  if only modifying single html attributes, pass $html_attrs as attribute name with $html_value
 *  as value for the attribute.
 */
/*Main article section*/
//declare variables for the main section and url style
$main_section = "";
$main_dek_p_styles = "text-align:left;color: #222;font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$url_color = "color:#ff6900;";

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

$recharge_main_dek = modifyHTML($recharge_main_dek, "p", "style", $main_dek_p_styles);
$recharge_main_dek = modifyHTML($recharge_main_dek, "li", "style", $main_dek_p_styles);
$recharge_main_dek = modifyHTML($recharge_main_dek, "a", "style", $url_color);

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

$recharge_title_format = "margin-top: 0;font-size: 16px; line-height: 21px;text-align:left;font-family:Georgia, serif;color:#000;";
//$recharge_intro_dek = modifyHTML($recharge_intro_dek, "p", "style", $recharge_title_format);

//html replacement code
$recharge_p_format_dek = "color: #222; font-family:Georgia, serif;font-size: 16px; line-height: 21px;";
$recharge_bold_format_dek = "font-weight: bold; color: #000;";
$recharge_inline_img["width"] = "540";
$recharge_inline_img["style"] = "width:540px;max-width:540px;";

//check input data and format appropriately
if($recharge1_dek !== "" || $recharge2_dek !== "" || $recharge_intro_dek !== "") {
    //first recharge article
    if($recharge1_dek !== "") {
        $get_last_p = "";
        $get_substr = "";
        //replace HTML entities
        $recharge1_dek = modifyHTML($recharge1_dek, "p", "style", $recharge_p_format_dek);
        $recharge1_dek = modifyHTML($recharge1_dek, "li", "style", $recharge_p_format_dek);
        $recharge1_dek = modifyHTML($recharge1_dek, "strong", "style", $recharge_bold_format_dek);
        $recharge1_dek = modifyHTML($recharge1_dek, "a", "style", $url_color);
        //resize inline images
        $recharge1_dek = modifyHTML($recharge1_dek, "img", $recharge_inline_img);
        
        //for "source" formatting
        //find last instance of a paragraph and insert the source and ital if necessary
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
    
    //second recharge article
    if($recharge2_dek !== "") {
        $get_last_p = "";
        $get_substr = "";
        //replace HTML entities
        $recharge2_dek = modifyHTML($recharge2_dek, "p", "style", $recharge_p_format_dek);
        $recharge2_dek = modifyHTML($recharge2_dek, "li", "style", $recharge_p_format_dek);
        $recharge2_dek = modifyHTML($recharge2_dek, "strong", "style", $recharge_bold_format_dek);
        $recharge2_dek = modifyHTML($recharge2_dek, "a", "style", $url_color);
        //resize inline images
        $recharge2_dek = modifyHTML($recharge2_dek, "img", $recharge_inline_img);
        
        //for "source" formatting
        //find last instance of a paragraph and insert the source and ital if necessary
        $get_last_p = strripos($recharge2_dek, "</p>");
        $get_substr = substr($recharge2_dek, 0, $get_last_p);
        
        if(isset($recharge2_source) && $recharge2_source !== "") {
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
    //$recharge_intro_dek
    //put together html structure of section 1 & 2 above membership ad.
    $recharge_sec1 = $recharge_opener . $recharge1 . $recharge2 . $recharge_closer;
}
//end recharge article 1 & 2 (above ad)

//recharge article 3 & 4 & 5 (below ad)

if($recharge3_dek !== "" || $recharge4_dek !== "" || $recharge5_dek !== "" || $recharge_image_dek !== "" || $recharge_image_credits !== "" || $recharge_sign_off_dek) {
    //third recharge article
    if($recharge3_dek !== "") {
        $get_last_p = "";
        $get_substr = "";
        //replace HTML entities
        $recharge3_dek = modifyHTML($recharge3_dek, "p", "style", $recharge_p_format_dek);
        $recharge3_dek = modifyHTML($recharge3_dek, "li", "style", $recharge_p_format_dek);
        $recharge3_dek = modifyHTML($recharge3_dek, "strong", "style", $recharge_bold_format_dek);
        $recharge3_dek = modifyHTML($recharge3_dek, "a", "style", $url_color);
        //resize inline images
        $recharge3_dek = modifyHTML($recharge3_dek, "img", $recharge_inline_img);
        
        //for "source" formatting
        //find last instance of a paragraph and insert the source and ital if necessary
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
    
    //fourth recharge article
    if($recharge4_dek !== "") {
        $get_last_p = "";
        $get_substr = "";
        //replace HTML entities
        $recharge4_dek = modifyHTML($recharge4_dek, "p", "style", $recharge_p_format_dek);
        $recharge4_dek = modifyHTML($recharge4_dek, "li", "style", $recharge_p_format_dek);
        $recharge4_dek = modifyHTML($recharge4_dek, "strong", "style", $recharge_bold_format_dek);
        $recharge4_dek = modifyHTML($recharge4_dek, "a", "style", $url_color);
        //resize inline images
        $recharge4_dek = modifyHTML($recharge4_dek, "img", $recharge_inline_img);
        
        //for "source" formatting
        //find last instance of a paragraph and insert the source and ital if necessary
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
        //replace HTML entities
        $recharge5_dek = modifyHTML($recharge5_dek, "p", "style", $recharge_p_format_dek);
        $recharge5_dek = modifyHTML($recharge5_dek, "li", "style", $recharge_p_format_dek);
        $recharge5_dek = modifyHTML($recharge5_dek, "strong", "style", $recharge_bold_format_dek);
        $recharge5_dek = modifyHTML($recharge5_dek, "a", "style", $url_color);
        //resize inline images
        $recharge5_dek = modifyHTML($recharge5_dek, "img", $recharge_inline_img);
        
        //for "source" formatting
        //find last instance of a paragraph and insert the source and ital if necessary
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
    
    //sign off section
    if(isset($recharge_sign_off_dek) && $recharge_sign_off_dek !== "") {
        $recharge_so_dek_p = "font-family:Georgia, serif;font-size: 16px; line-height: 21px;color:#000;";
        $recharge_sign_off_dek = modifyHTML($recharge_sign_off_dek, "p", "style", $recharge_so_dek_p);
        $recharge_sign_off_dek = modifyHTML($recharge_sign_off_dek, "li", "style", $recharge_so_dek_p);
        $recharge_sign_off_dek = modifyHTML($recharge_sign_off_dek, "a", "style", $url_color);
    }
    else {
        $recharge_sing_off_dek == "";
    }
    
    //last section after sign off where the image and text goes
    if($recharge_image_dek !== "") {
        $recharge_image_dek = modifyHTML($recharge_image_dek, "p", "style", $recharge_p_format_dek);
        $recharge_image_dek = modifyHTML($recharge_image_dek, "li", "style", $recharge_p_format_dek);
        $recharge_image_dek = modifyHTML($recharge_image_dek, "a", "style", $url_color);
        /*resize inline image code*/
        $recharge_image_dek = modifyHTML($recharge_image_dek, "img", $recharge_inline_img);
    }
    else {
        $recharge_image_dek = "";
    }
    
    //image credits at end of newsletter before newsletter info and footer
    if($recharge_image_credits !== "") {
        $recharge_image_credits = modifyHTML($recharge_image_credits, "p", "style", "text-align:center;font-family:Georgia, serif;font-size: 14px; line-height: 19px;font-style:italic;color: #767676;");
        $recharge_image_credits = modifyHTML($recharge_image_credits, "li", "style", "text-align:center;font-family:Georgia, serif;font-size: 14px; line-height: 19px;font-style:italic;color: #767676;");
        $recharge_image_credits = modifyHTML($recharge_image_credits, "a", "style", $url_color);
    }
    else {
        $recharge_image_credits = "";
    }
    
    $recharge_sec2 = $recharge_opener . $recharge3 . $recharge4 . $recharge5 . $recharge_sign_off_dek . $recharge_image_dek . $recharge_image_credits . $recharge_closer;
    
}
//end recharge article 3 & 4 & 5 (below ad)
//ads
/*blank for now*/

//LiveIntent section
//safe RBT
$safe_rbt = "";

if($liveintent_billboard || $liveintent_banner || $liveintent_billboard2) {
    $safe_rbt = <<<SAFERBT
<table cellpadding="0" cellspacing="0" border="0" width="40" height="6"><tbody><tr><td><img src="http://li.motherjones.com/imp?s=125507500&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507501&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507502&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507503&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507504&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507505&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507506&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507507&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507508&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507509&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507510&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507511&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507512&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507513&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507514&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507515&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507516&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507517&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507518&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=125507519&li=recharge&m={{contact.email | md5}}&p={{campaign.id}}_$timestamp" width="2" height="6" border="0" /></td></tr></tbody></table>
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
								<a href="https://www.motherjones.com"><img src="https://cdn.maropost.com/pro/uploads/account_585/215784/MoJoLoGo.png" style="max-width:145px;width:145px;" width="145"></a>
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
                    <p style="Margin-top:0;Margin-bottom: 16px;color: #000 !important;text-decoration: none !important;text-align:center;font-size: 16px;line-height:19px;font-family:Georgia, serif;font-weight:bold;font-style:italic;" id="date_line">Stories that&rsquo;ll get you through the week. <span style="color: #ff6900;">/</span> <strong>$get_date</strong></p>
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
                  	$billboard_ad2
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
//clean strings for sql queries
$recharge_main_hed = addslashes($recharge_main_hed);
$recharge_main_url = addslashes($recharge_main_url);
$recharge_main_img = addslashes($recharge_main_img);
$recharge_main_dek = addslashes($recharge_main_dek);
$recharge_main_source = addslashes($recharge_main_source);
$recharge_intro_dek = addslashes($recharge_intro_dek);
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
$recharge_sign_off_dek = addslashes($recharge_sign_off_dek);
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
	recharge_intro_dek = '$recharge_intro_dek',
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
	recharge_sign_off_dek = '$recharge_sign_off_dek',
	recharge_image_dek = '$recharge_image_dek',
	recharge_image_credits = '$recharge_image_credits',
	ad_link_bill = '$billboard_url',
	ad_billboard = '$billboard_image',
	ad_name = '$advertiser_name',
	ad_name2 = '$advertiser_name2',
	ad_link_banner = '$billboard_url2',
	ad_banner = '$billboard_image2',
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
    $run_qry = "INSERT INTO recharge(hed_date,subject_line,recharge_main_hed,recharge_main_url,recharge_main_img,recharge_main_dek,recharge_main_source,recharge_main_ital,recharge_intro_dek,recharge1_dek,recharge1_source,recharge1_ital,recharge1_url,recharge2_dek,recharge2_source,recharge2_ital,recharge2_url,recharge3_dek,recharge3_source,recharge3_ital,recharge3_url,recharge4_dek,recharge4_source,recharge4_ital,recharge4_url,recharge5_dek,recharge5_source,recharge5_ital,recharge5_url,recharge_sign_off_dek,recharge_image_dek,recharge_image_credits,ad_name,ad_name2,ad_link_bill,ad_billboard,ad_link_banner,ad_banner,sub_url,sub_image,sub_text,sub_code,lift_note,pixel_tracker,pixel_tracker2)
	VALUES('$headlines_date',
	'$subject_line',
	'$recharge_main_hed',
	'$recharge_main_url',
	'$recharge_main_img',
	'$recharge_main_dek',
	'$recharge_main_source',
	'$recharge_main_ital',
	'$recharge_intro_dek',
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
	'$recharge_sign_off_dek',
	'$recharge_image_dek',
	'$recharge_image_credits',
	'$advertiser_name',
	'$advertiser_name2',
	'$billboard_url',
	'$billboard_image',
	'$billboard_url2',
	'$billboard_image2',
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