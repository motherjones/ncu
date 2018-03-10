<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc"
?>
	<p style="width:300px;margin:0 auto;"><input type="button" value="Newsletter Stats" onclick="window.open('news-stats.html', 'Newsletter Stats', 'toolbar=no,width=1200,scrollbars=yes');" style="width:110px;margin: 5px auto;padding: 5px;text-align:center;color:#fff;background-color:#000;" /> &nbsp; | &nbsp; <input type="button" value="Archived newsletter stats" onclick="location.href='news-stats/'" style="width:160px;margin: 5px auto;padding: 5px;text-align:center;color:#fff;background-color:#000;" /></p>
  <nav id="button_bar">
  	<button id="breaking_news" class="news_btn" onclick="restoreValues(this.id)">Breaking News</button>
  	<button id="econundrums_new" class="news_btn" onclick="restoreValues(this.id)">Econundrums</button>
  	<button id="food_for_thought_redesign" class="news_btn" onclick="restoreValues(this.id)">Food for Thought</button>
  	<button id="in_the_mix_new" class="news_btn" onclick="restoreValues(this.id)">In the Mix</button>
	<button id="political_mojo_new" class="news_btn" onclick="restoreValues(this.id)">Politial MoJo</button>
	<button id="trumpocracy" class="news_btn" onclick="restoreValues(this.id)">The Russian Connection</button>
  </nav>
  <hr style="width:90%;color:#ccc;">
  <div id="archives" class="hide_me"></div>
  <script type="text/javascript">
  	$(document).ready(function() {
		$("#breaking_news").click(function() {
			$("#breaking_news").addClass(".news_btn_selected");
			$("#breaking_news").removeClass("news_btn");
		});
  	 });
  </script>
</body>
</html>