<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc";
?>
<div style="text-align:center;clear:both;">
  <nav id="button_bar">
  	<button id="ads" class="ads_btn" onclick="">Get Ads</button>
  </nav>
 </div>

  <div id="ads_archives" class="hide_me"></div>
  <script type="text/javascript">
  	$(document).ready(function() {
		$(".news_btn").click(function() {
			$(".news_btn").css({"background-color" : "", "color" : "", "border" : ""});
			$(this).css({"background-color" : "#fff", "color" : "#c22", "border" : "2px inset #000"});
		});
  	 });
  </script>
</body>
</html>