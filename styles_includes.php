<?php
// styles
//updated for new headlines 3/25/2015
$main_div = "background-color: #e7e7e7;";
$date_style = "font-size:14px;line-height:18px;text-align:right;color:#767676;text-decoration:none !important;";
$main_table_styles = "Margin:0 auto;width: 640px;max-width:640px;background-color: #fff;";
$news_main_logo = "background-color:#fff;padding: 0 !important;";
$news_title_td = "padding: 10px 20px 0 20px !important;text-transform: uppercase;font-family: Arial,Helvetica,sans-serif;font-size: 2.0em;font-weight: 800;";
$new_tag_line = "color: #969696;font-family: Georgia,Helvetica,Arial,sans-serif;font-size: .50em;font-style: italic;font-weight: 400;text-align: right;";
$section_title = "padding: 10px 20px 10px 20px !important;text-transform: uppercase;font-family: Arial, Helvetica, sans-serif;font-size: 18px;font-weight: 600;color: #FF6900;";
$standard_td = "padding: 10px 40px !important;";
$breaking_nws_td = "padding:10px 20px !important;";
$separator_border = "border:1px solid #e8e8e8;background-color: #f2eeed;width:100%;";
$hed_styles = "font-family: Georgia, serif;font-size: 22px;line-height:24px;font-weight: 900;text-decoration:none;color:#000;";
$hed_styles_main = "font-family: Georgia, serif;font-size: 30px;line-height:30px;font-weight: 900;text-decoration:none;color:#000;";
$hed_styles_brn = "margin:0 2px 10px 2px; font-family: Georgia, serif;font-size: 22px;line-height:24px;font-weight: 900;";
$no_top_pad = "padding: 0;";
$no_top_pad20 = "padding: 0 20px;";
$no_top_pad40 = "padding: 0 40px !important;";
$no_top_pad80 = "padding: 0 80px !important;";
$top_pad20 = "padding: 20px 40px !important;";
$legal_language = "color: #767676;font-family: Georgia,Helvetica,Arial,sans-serif;font-size: 16px;font-style: italic;font-weight: 400;line-height:38px !important;";
$about_ad = "color: #767676;font-family: Georgia,Helvetica,Arial,sans-serif;font-size: 12px;font-style: italic;font-weight: 400;line-height:18px !important;";
$read_more = "margin-bottom:30px;margin-right:10px;color: #FF6900;font-style: italic;font-size: 16px;line-height:34px;text-decoration:none;";
$byline_style = "font-size:12px;color:#767676;font-style:italic;";
$fb_icon_style = "width:30px;max-width:30px;margin-right:10px;margin-top:10px;";
$ttr_icon_style = "width:30px;max-width:30px;margin-top:10px;";
$dek_style = "font-family: Verdana, Helvetica, Arial, sans-serif !important;font-size: 16px !important;line-height:20px !important;color: #767676 !important;";
$dek_lead_style = "font-family: Georgia, Helvetica, Arial, sans-serif;font-size:15px;line-height: 19px;color: #9b0000;font-style: italic;";
$ad_style = "text-align: center;color: #767676;font-size: 12px;font-style:italic;";
$mobile_styles = <<<MOBILE
<style type="text/css">
@media screen and (max-device-width: 480px) {
		#main_background {margin: 0 !important;
	 		padding:0 !important;}
		#table_content {width: 100% !important;}
		#table_content td {width: 100% !important;}
		#main_art_hed {font-size: 43px !important;line-height:44px !important;}
		#dek_font_size {font-size:28px !important; line-height:33px !important;}
		#read_more {font-size: 29px !important;line-height:74px !important;vertical-align: super;}
		#fb_icon_main {width:54px !important;max-width:54px !important;}
		#tt_icon_main {width:54px !important;max-width:54px !important;}
		#fb_icon_foot {width:64px !important;max-width:64px !important;}
		#tt_icon_foot {width:64px !important;max-width:64px !important;}
		#main_article #dek_font_size p {font-family: Verdana, Helvetica, Arial, sans-serif !important;font-size: 28px !important;line-height:33px !important;color: #767676 !important;}
		.nonprofit_language {font-size:25px !important; line-height: 60px !important;}
		.article_hed {font-size: 35px !important;line-height:42px !important;}
		.legal_language {font-size:25px !important;line-height:48px !important;}
		.standard_td {padding: 10px 20px !important;}
		.no_top_pad {padding: 0 10px !important;}
		.news_donate {margin-top:20px;margin-bottom:20px;}
 }
</style>
MOBILE;

$trump_mobile = <<<TRUMPMOBILE
  <style>
  body, .wrapper {
    background-color: #ccc;
  }
  .layout {
    Margin: 0 auto;
    width:620px !important;
    max-width: 620px !important;
    background-color: #fff;
  }
  .spacing {
    Margin: 0 auto;
    width:85%;
    }
  .narrow {
    width: 33% !important;
    }
  .wide {
    Margin-left: 10px !important;
    width: 65% !important;
    }
  .headers_text {
    font-size: 10px;
    line-height: 14px;
  }
  #date_line {
    font-size: 12px;
    line-height: 16px;
  }
  p, h3 {
    Margin: 15px 0;
  }
  h3 {
    font-size: 33px;
    line-height: 38px;
  }
  p {
    font-size: 16px;
    line-height: 21px;
  }
  #membership-call-box {
    padding:10px 10px;
  }
  #logo {
    Margin: 10px auto;
    width: 100%;
    max-width: 300px;
  }

  @media screen and (max-width: 480px) {
    body, .wrapper {background-color: #fff !important;
    Margin: 0 auto !important;
    padding: 0;
    }
    .layout {
    background-color: #fff;
    Margin: 0 auto;
    width: 100% !important;
    }
    .spacing {
    Margin: 0 auto !important;
    width: 85% !important;
    }
    .wide, .narrow, .even_left, .even_right {
    width: 100% !important;
    max-width: 100% !important;
    }
    .even_left {
	margin-top: 0 !important;
    border-bottom: 1px solid #767676;
    border-right: none !important;
    }
	.even_right {
	margin-top: 20px !important;
	}
    p {
    font-size: 24px !important;
    line-height: 28px !important;
    }
    .headers_text {
    font-size: 12px !important;
    line-height: 16px !important;
    }
    #date_line {
    font-size: 14px !important;
    line-height: 18px !important;
    }
    }

  @media yahoo {
    p {margin: 10px 0;}
    .layout {margin: 0 auto;}
    }
  </style>
TRUMPMOBILE;
//end styles
$recharge_mobile = <<<RECHARGEMOBILE
<style>
  body, .wrapper {
    background-color: #E9E9E9;
  }
  .layout {
    Margin: 0 auto;
    width:620px !important;
    max-width: 620px !important;
    background-color: #fff;
  }
  .spacing {
    Margin: 0 auto;
    width:85%;
    }
  .narrow {
    width: 33% !important;
    }
  .wide {
    Margin-left: 10px !important;
    width: 65% !important;
    }
  .headers_text {
    font-size: 10px;
    line-height: 14px;
  }
  p, h3 {
		font-family: Georgia, serif;
    Margin: 15px 0;
  }
  h3 {
    font-size: 33px;
    line-height: 38px;
  }
  p {
    font-size: 16px;
    line-height: 21px;
  }
  #membership-call-box {
    padding:10px 10px;
  }
  #logo {
    Margin: 10px auto;
    width: 100%;
    max-width: 300px;
  }

  @media screen and (max-width: 480px) {
    body, .wrapper {background-color: #fff !important;
    Margin: 0 auto !important;
    padding: 0;
    }
    .layout {
    background-color: #fff;
    Margin: 0 auto;
    width: 100% !important;
    }
    .spacing {
    Margin: 0 auto !important;
    width: 85% !important;
    }
    .wide, .narrow, .even_left, .even_right {
    width: 100% !important;
    max-width: 100% !important;
    }
    .even_left {
	margin-top: 0 !important;
    border-bottom: 1px solid #767676;
    border-right: none !important;
    }
	.even_right {
	margin-top: 20px !important;
	}
    p {
    font-size: 24px !important;
    line-height: 28px !important;
    }
    .headers_text {
    font-size: 12px !important;
    line-height: 16px !important;
    }
    }

  @media yahoo {
    p {margin: 10px 0;}
    .layout {margin: 0 auto;}
    }
  </style>
RECHARGEMOBILE;
?>