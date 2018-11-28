<?php 
//temp code to automate switching of newsletter identification language for 2018 year end fundraising
$start_fund_date = "2018-11-26";
$end_fund_date = "2018-12-01";
$start_date_comp = strtotime($start_fund_date);
$end_date_comp = strtotime($end_fund_date);
$head_date_comp = strtotime($headlines_date);
//end temp code

//Newsletter identification language
switch($headlines_type) {
	case "econundrums_new":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	      $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Econundrums</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. So give us some money...please.</p>";  
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Econundrums</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	case "in_the_mix_new":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	        $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>In the Mix</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. Don't get mixed up!</p>";
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>In the Mix</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	case "political_mojo_new":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	        $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Political MoJo</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. The best politics on the interNET!!!</p>";
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\"><em>Political MoJo</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	case "food_for_thought_redesign":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	        $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Food for Thought</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. Give me more food!</p>";
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Food for Thought</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	case "breaking_news":
		$newsletter_info = "<p class=\"ad_text\" style=\"margin: 20px 0 !important; padding: 0; font-family: Verdana, sans-serif; font-size: 14px; color: #000;\">This news alert comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
		break;
	case "trumpocracy":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	        $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. Orange is the new darkness.</p>";
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>The Russian Connection</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	case "recharge":
	    if($head_date_comp >= $start_date_comp && $head_date_comp <= $end_date_comp) {
	        $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Recharge</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976. Don't give up.</p>";
	    }
	    else {
		  $newsletter_info = "<p class=\"ad_text\" style=\"font-family:Georgia, serif; font-size: 12px; color: #000;text-align:center;font-size: 16px; line-height: 21px;\"><em>Recharge</em> comes to you from <em>Mother Jones</em>, an award-winning, investigative journalism outlet that was founded as a nonprofit magazine in 1976.</p>";
	    }
		break;
	default:
		break;
}

/*--- Newsletters footer section ---*/
//Only for The Russian Connection
$trumpocracy_footer = <<<TRUMPFOOT
<table align="center" style="margin:0 auto;width:450px;max-width:450px;">
	<tr>
		<td class="no_top_pad" style="padding: 0;text-align:center;" align="center">
			<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=DON&term_pub=DON&b_country=United+States&list_source=7HEGNF00&term=XX.1.50.00.DON.D.0.7043&a_first_name={{contact.first_name}}&a_last_name={{contact.last_name}}&a_address_1={{contact.street_1}}&a_city={{contact.city}}&a_state={{contact.state_province}}&a_zip={{contact.zip_code}}&a_email={{contact.email}}&account_no={{contact.icn_account_number}}&rel_rec_no={{contact.wk_sub_rel}}"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206932/20180220_donate.png" alt="Donate" style="width:150px;min-width:100px;" width="150" hspace="15" vspace="0" /></a>
		</td>
		<td style="padding: 0;text-align:center;" align="center">
			<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206921/20180220_suscribe_2.png" alt="Subscribe to Mother Jones" style="width:150px;min-width:100px;margin-top: 10px;margin-bottom:10px;" width="150" hspace="15" vspace="0" /></a>
		</td>
	</tr>
	<tr>
		<td align="center" style="margin-top: 15px;text-align:center;" colspan="2">
			<a href="https://www.motherjones.com"><img src="http://assets.motherjones.com/newsletters/newsletter_test/mojo_logo_btm_bw.png" style="width:300px;max-width: 300px;margin: 20px auto;" width="300" /></a>
		</td>
	</tr>
</table>
TRUMPFOOT;

//Global footer for all newsletters except The Russian Connection
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
						<a href="https://secure.motherjones.com/fnx/?action=SUBSCRIPTION&pub_code=MJM&term_pub=MJM&list_source=SEGMN"><img class="news_donate" src="https://cdn.maropost.com/pro/uploads/account_585/206921/20180220_suscribe_2.png" alt="Subscribe to Mother Jones" style="width:150px;min-width:100px;margin-top: 10px;margin-bottom:10px;" width="150" hspace="15" vspace="0" /></a>
					</td>
				</tr>
				<tr>
					<td align="center" style="margin-top: 15px;text-align:center;" colspan="2">
						<a href="https://www.motherjones.com><img src="http://assets.motherjones.com/newsletters/newsletter_test/mojo_logo_btm_bw.png" style="width:300px;max-width: 300px;margin: 10px auto;" width="300" /></a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
FOOTER;
?>