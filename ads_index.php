<?php 
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
include "incs/header.inc";
?>

<div id="head_row">
	<div style="width:100%;margin:5px auto;text-align:center;">
		<header>
			<button onclick="location.href='./'">Back to Main</button>
		</header>
	</div>
</div>
<div style="text-align:center;clear:both;">
  <nav id="button_bar">
  	<button id="ads_ads" class="news_btn" onclick="getAllAds('ads')">Get All Ads</button>
  	<button id="membership_regular" class="news_btn" onclick="getAllAds('membership')">Get All Regular Membership Ads</button>
  	<button id="membership_default" class="news_btn" onclick="getAllAds('membership_d')">Get All Membership Default Ads</button>
  </nav>
</div>
<h3 style="text-align:center;">Ads Index</h3>
<div id="ads_mssg"></div>
<div id="archive_container"></div>