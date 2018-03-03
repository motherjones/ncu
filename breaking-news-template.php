<?php
$allowed_html = "<a><br><b><i><em><strong><span><ol><ul><li><blockquote><sup><sub><img><table><td><tr><p>";

if(isset($_REQUEST['breaking']) && $_REQUEST['breaking'] !== "") {
	$breaking_lead_hed = trim($_REQUEST['breaking']);
}
else {
	$breaking_lead_hed = "";
}

if(isset($_REQUEST['breaking_url']) && $_REQUEST['breaking_url'] !== "") {
	$breaking_lead_url = trim($_REQUEST['breaking_url']);
}
else {
	$breaking_lead_url = "";
}

if(isset($_REQUEST['main_text']) && $_REQUEST['main_text'] !== "") {
	$main_text = trim($_REQUEST['main_text']);
}
else {
	$main_text = "";
}

if(isset($_REQUEST['more_news_title']) && $_REQUEST['more_news_title'] !== "MORE NEWS") {
	$more_news_title= trim($_REQUEST['more_news_title']);
}
else {
	$more_news_title = "MORE NEWS";
}

if(isset($_REQUEST['more_news_1']) && $_REQUEST['more_news_1'] !== "") {
	$more_news_1 = trim($_REQUEST['more_news_1']);
}
else {
	$more_news_1 = "";
}

if(isset($_REQUEST['more_news_1_url']) && $_REQUEST['more_news_1_url'] !== "") {
	$more_news_1_url = trim($_REQUEST['more_news_1_url']);
}
else {
	$more_news_1_url = "";
}

if(isset($_REQUEST['more_news_2']) && $_REQUEST['more_news_2'] !== "") {
	$more_news_2 = trim($_REQUEST['more_news_2']);
}
else {
	$more_news_2 = "";
}

if(isset($_REQUEST['more_news_2_url']) && $_REQUEST['more_news_2_url'] !== "") {
	$more_news_2_url = trim($_REQUEST['more_news_2_url']);
}
else {
	$more_news_2_url = "";
}

if(isset($_REQUEST['more_news_3']) && $_REQUEST['more_news_3'] !== "") {
	$more_news_3 = trim($_REQUEST['more_news_3']);
}
else {
	$more_news_3 = "";
}

if(isset($_REQUEST['more_news_3_url']) && $_REQUEST['more_news_3_url'] !== "") {
	$more_news_3_url = trim($_REQUEST['more_news_3_url']);
}
else {
	$more_news_3_url = "";
}

if(isset($_REQUEST['lift_note']) && $_REQUEST['lift_note'] !== "") {
	$lift_note = trim($_REQUEST['lift_note']);
}
else {
	$lift_note = "";
}

//date portion
$temp_date = strtotime($headlines_date);
$get_date = date("F j, Y", $temp_date);

//lead in section
$breaking_lead_in = "";
$br_ld_url = "<a href=\"$breaking_lead_url\" style=\"text-decoration:none;color:#000;\"><strong>";
$breaking_lead_in = "<h3 style=\"$hed_styles_brn\">" . $br_ld_url . $breaking_lead_hed. "</strong></a></h3>";

//main text section
$main_text_sec = "";
$main_text_p = "<p class=\"main_dek\" style=\"margin:0 2px 10px 2px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;line-height:18px;color:#767676;\">";
$main_text_a = "<a style=\"color:#ff6900;text-decoration:none;\" ";
$main_text = str_replace("<p>", $main_text_p, $main_text);
$main_text = str_replace("<a", $main_text_a, $main_text);
//read more
$read_more = "<p style=\"margin:0 2px 10px 2px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;line-height:18px;\"><a href=\"$breaking_lead_url\" style=\"color: #ff6900;\">Read More</a></p><br />";

$main_text_sec = $main_text . $read_more;

//More News section

$more_news_sec = "";

if($more_news_1 !== "" || $more_news_2 !== "" || $more_news_3 !== "") {
	$more_news_1_s = "";
	$mn_1_url = "";
	$more_news_2_s = "";
	$mn_2_url = "";
	$more_news_3_s = "";
	$mn_3_url = "";
	$more_news_title_sec = "<tr>\n<td style=\"$section_title\">\n<br />\n<p class=\"headers_text\" style=\"margin-top: 0;font-family: Verdana, sans-serif; color: #ff6900;font-size: 12px; line-height: 16px;font-weight: bold;text-transform: uppercase;text-align:left;\"><strong>$more_news_title</strong></p>\n</td>\n</tr>\n";
	
	if($more_news_1 !== "") {
		$insert_bottom_margin = "";
		$insert_bottom_margin2 = "";
		if($more_news_2 === "" && $more_news_3 === "") {
			$insert_bottom_margin = "border-bottom:1px solid #ccc;";
			$insert_bottom_margin2 = "<br /><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
		}
		$mn_1_url = "<a class=\"article_hed\" href=\"$more_news_1_url\" style=\"$hed_styles\">";
		$more_news_1_s = "<tr>\n<td style=\"$breaking_nws_td$insert_bottom_margin\">\n<p>$mn_1_url" . $more_news_1 . "</a></p>\n$insert_bottom_margin2</td>\n</tr>\n";
	}
	
	if($more_news_2 !== "") {
		$insert_bottom_margin = "";
		if($more_news_3 === "") {
			$insert_bottom_margin = "border-bottom:1px solid #ccc;";
			$insert_bottom_margin2 = "<br /><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
		}
		$mn_2_url = "<a class=\"article_hed\" href=\"$more_news_2_url\" style=\"$hed_styles\">";
		$more_news_2_s = "<tr>\n<td style=\"$breaking_nws_td$insert_bottom_margin\">\n<p>$mn_2_url" . $more_news_2 . "</a></p>\n$insert_bottom_margin2</td>\n</tr>\n";
	}
	
	if($more_news_3 !== "") {
		$insert_bottom_margin = "border-bottom:1px solid #ccc;";
		$insert_bottom_margin2 = "<br /><!--[if (gte mso 9)|(IE)]><br /><![endif]-->";
		$mn_3_url = "<a class=\"article_hed\" href=\"$more_news_3_url\" style=\"$hed_styles\">";
		$more_news_3_s = "<tr>\n<td style=\"$breaking_nws_td$insert_bottom_margin\">\n<p>$mn_3_url" . $more_news_3 . "</a></p>\n$insert_bottom_margin2</td>\n</tr>\n";
	}
	
	$more_news_sec = $more_news_title_sec . $more_news_1_s . $more_news_2_s . $more_news_3_s;
}
else {
	$more_news_sec = "";
}

//lift note section
$lift_note_section = "";
if(isset($lift_note) && $lift_note !== "") {
	$search_this = "<p>";
	$replace_code = '<p style="font-family: Verdana, Helvetica, Arial, sans-serif !important;font-size: 16px !important;line-height:20px !important;color: #767676 !important;margin: 10px 20px;">';
	$lift_note = str_ireplace($search_this, $replace_code, $lift_note);
	$lift_note_section = "<tr><td class=\"standard_td\" style=\"padding: 10px 20px !important;\">" . $lift_note . "<hr style=\"border:1px solid #e8e8e8;background-color: #f2eeed;width:100%;\" /></td></tr>";
}

//saferbt
$saferbt = <<<SAFERBT
<table cellpadding="0" cellspacing="0" border="0" width="40" height="6"><tbody><tr><td><img src="http://li.motherjones.com/imp?s=124877300&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877301&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877302&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877303&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877304&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877305&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877306&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877307&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877308&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877309&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877310&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877311&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877312&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877313&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877314&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877315&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877316&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877317&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877318&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td><td><img src="http://li.motherjones.com/imp?s=124877319&sz=2x1&li=breaking-news&e={{contact.email}}&p={{campaign.id}}$timestamp" width="2" height="6" border="0" /></td></tr></tbody></table>
SAFERBT;

$breaking_news = <<<BREAKINGNEWS
<div>
	<style>
		@media screen and (max-width: 480px) {
			p {
			font-size: 22px !important;
			line-height: 26px !important;
			}
			.headers_text {
			font-size: 16px !important;
			line-height: 20px !important;
			}
			h3 {
				font-size: 36px !important;
				line-height: 40px !important;
			}
		}
	</style>
	
	<table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin: 0;padding:0;background-color: #ccc;">
		<tr>
			<td>
				<table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0;max-width: 100%;background-color:#fff;border-collapse: collapse;" border="0" width="600">
					<tbody>
					$lift_note_section
						<tr>
							<td><a href="http://www.motherjones.com"><img alt="Mother Jones" src="http://assets.motherjones.com/newsletters/images/breaking-news-header.png" width="600" border="0" style="max-width:600px;width:100%;" /></a></td>
						</tr>
						<tr>
							<td>
								<table align="center" cellpadding="15" cellspacing="0" style="margin:0 auto;max-width:100%;" width="540">
									<tr>
										<td style="margin:0 2px 10px 2px; font-family:Verdana, Arial, Helvetica, sans-serif;border-bottom: 1px solid #ccc;" valign="top">
											<p class="headers_text" style="margin-top: 10px;font-family: Verdana, sans-serif; color: #ff6900;font-size: 12px; line-height: 16px;font-weight: bold;text-transform: uppercase;text-align:left;"><strong>BREAKING NEWS</strong></p>
											$breaking_lead_in
											$main_text_sec
										</td>
									</tr>
									<tr>
										<td align="center" style="border-bottom:1px solid #ccc;">
											<span style="text-align: center;color: #767676;font-size: 12px;font-style:italic;">&#8212;Advertisement&#8212;</span>
											$billboard_ad
										</td>
									</tr>
										$more_news_sec
									<tr>
										<td align="center">
											<!--[if (gte mso 9)|(IE)]><br /><![endif]-->
												<p class="ad_text" style="margin: 10px auto !important; font-family: Verdana, sans-serif; font-size: 14px; color: #000;">This news alert comes to you from <em>Mother Jones</em>, an award-winning, nonprofit investigative journalism organization.</p>
										</td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" style="margin:0 auto;width:450px;max-width:450px;">
												<tr>
													<td style="padding: 0;text-align:center;" align="center">
														<a href="https://secure.motherjones.com/fnp/?action=SUBSCRIPTION&list_source=7GNWSF&extra_don=1&abver=A&a_first_name={{contact.first_name}}&a_last_name={{contact.last_name}}&a_address_1={{contact.street_1}}&a_city={{contact.city}}&a_state={{contact.state_province}}&a_zip={{contact.zip_code}}&a_email={{contact.email}}&account_no={{contact.icn_account_number}}&rel_rec_no={{contact.wk_sub_rel}}"><img class="news_donate" src="http://assets.motherjones.com/newsletters/images/donate_btn_orange_240.png" alt="Donate" style="width:150px;min-width:100px;"  width="150" hspace="15" vspace="0" /></a>
													</td>
													<td style="padding: 0;text-align:center;" align="center">
														<a href="http://store.motherjones.com/?utm_source=motherjones&utm_campaign=october_launch&utm_medium=newsletter&utm_content=footerbutton"><img class="news_donate" src="http://assets.motherjones.com/newsletters/images/mojo-store_btn_newsletter.png" alt="Mother Jones Store" style="width:150px;min-width:100px;margin-top: 10px;margin-bottom:10px;" width="150" hspace="15" vspace="0" /></a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td align="center" style="margin: 0 auto;text-align:center;">
											<img src="http://assets.motherjones.com/newsletters/newsletter_test/mojo_logo_btm_bw.png" style="width:300px;max-width: 300px;margin: 10px auto;" width="300" />
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								$saferbt
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</table>
</div>
BREAKINGNEWS;

print $breaking_news;

//db section
$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("Can't connect to database");

$breaking_lead_hed = strip_tags(addslashes($breaking_lead_hed), $allowed_html);
$breaking_lead_url = addslashes($breaking_lead_url);
$main_text = strip_tags(addslashes($main_text), $allowed_html);
$more_news_1 = strip_tags(addslashes($more_news_1), $allowed_html);
$more_news_1_url = strip_tags(addslashes($more_news_1_url), $allowed_html);
$more_news_2 = strip_tags(addslashes($more_news_2), $allowed_html);
$more_news_2_url = strip_tags(addslashes($more_news_2_url), $allowed_html);
$more_news_3 = strip_tags(addslashes($more_news_3), $allowed_html);
$more_news_3_url = strip_tags(addslashes($more_news_3_url), $allowed_html);
$lift_note = addslashes($lift_note);

$check_existing = "SELECT id, hed_date FROM breaking_news WHERE hed_date='$headlines_date'";
$existing_qry = mysqli_query($db_connect, $check_existing) or die("Can't run query now");
if(mysqli_num_rows($existing_qry) > 0) {
	$exists = true;
}
else {
	$exists = false;
}

if($exists) {
	$run_qry = "UPDATE breaking_news
	SET hed_date = '$headlines_date',
	breaking = '$breaking_lead_hed',
	breaking_url = '$breaking_lead_url',
	main_text = '$main_text',
	subject_line = '$subject_line',
	more_news_1 = '$more_news_1',
	more_news_1_url = '$more_news_1_url',
	more_news_2 = '$more_news_2',
	more_news_2_url = '$more_news_2_url',
	more_news_3 = '$more_news_3',
	more_news_3_url = '$more_news_3_url',
	ad_link_bill='$billboard_url',
	ad_billboard='$billboard_image',
	ad_name='$advertiser_name',
	ad_link_banner='$billboard_url2',
	ad_banner='$billboard_image2',
	ad_name2='$advertiser_name2',
	sub_url = '$sub_url',
	sub_image = '$sub_image',
	sub_text = '$sub_text',
	sub_code = '$sub_code',
	lift_note = '$lift_note'
	WHERE hed_date='$headlines_date'";
}
else {
	$run_qry = "INSERT INTO breaking_news(hed_date,subject_line, breaking, breaking_url, main_text,more_news_1,more_news_1_url,more_news_2,more_news_2_url,more_news_3,more_news_3_url, ad_link_bill, ad_billboard, ad_link_banner, ad_name, ad_banner, ad_name2, sub_url, sub_image, sub_text, sub_code, lift_note)
	VALUES('$headlines_date',
	'$subject_line',
	'$breaking_lead_hed',
	'$breaking_lead_url',
	'$main_text',
	'$more_news_1',
	'$more_news_1_url',
	'$more_news_2',
	'$more_news_2_url',
	'$more_news_3',
	'$more_news_3_url',
	'$billboard_url',
	'$billboard_image',
	'$advertiser_name',
	'$billboard_url2',
	'$billboard_image2',
	'$advertiser_name2',
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