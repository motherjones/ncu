<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc"
?>
	<p style="width:115px;margin:0 auto;"><input type="button" value="Newsletter Stats" onclick="window.open('news-stats.html', 'Newsletter Stats', 'toolbar=no,width=1200,scrollbars=yes');" style="width:110px;margin: 5px auto;padding: 5px;text-align:center;color:#fff;background-color:#000;" /></p>
  <nav id="button_bar">
  	<input id="breaking_news" type="button" value="Breaking News" class="news_btn" onclick="restoreValues(this.id)">
  	<input id="econundrums_new" type="button" value="Econundrums" class="news_btn" onclick="restoreValues(this.id)">
  	<input id="food_for_thought_redesign" type="button" value="Food for Thought" class="news_btn" onclick="restoreValues(this.id)">
  	<input id="in_the_mix_new" type="button" value="In the Mix" class="news_btn" onclick="restoreValues(this.id)">
  	<input id="political_mojo_new" type="button" value="Politial MoJo" class="news_btn" onclick="restoreValues(this.id)">
  	<input id="trumpocracy" type="button" value="The Russian Connection" class="news_btn" onclick="restoreValues(this.id)">
  </nav>
  <hr style="width:90%;color:#ccc;">
  <div id="archives" class="hide_me"></div>
</body>
</html>