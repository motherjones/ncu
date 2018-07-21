<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc";
?>
<div style="text-align:center;clear:both;">
  <nav id="button_bar">
  	<button id="ads" class="ads_btn" onclick="getAllAds();">Get Ads</button>
  </nav>
 </div>

  <div id="ads_archives"></div>
  <script type="text/javascript">
  	//getAllAds();
  </script>
</body>
</html>