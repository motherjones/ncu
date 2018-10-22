<?php
header("Content-Type: text/html;charset=UTF-8");
include "incs/credentials.inc";
$today = date("Y-m-d", time());
include "incs/header.inc"
?>
<div style="text-align:center;clear:both;">
  <nav id="button_bar">
  	<button id="breaking_news" class="news_btn" onclick="restoreValues(this.id)">Breaking News</button>
  	<button id="econundrums_new" class="news_btn" onclick="restoreValues(this.id)">Econundrums</button>
  	<button id="food_for_thought_redesign" class="news_btn" onclick="restoreValues(this.id)">Food for Thought</button>
  	<button id="in_the_mix_new" class="news_btn" onclick="restoreValues(this.id)">In the Mix</button>
	<button id="political_mojo_new" class="news_btn" onclick="restoreValues(this.id)">Political MoJo</button>
	<button id="recharge" class="news_btn" onclick="restoreValues(this.id)">Re&#x26A1;charge</button>
	<button id="trumpocracy" class="news_btn" onclick="restoreValues(this.id)">The Russian Connection</button>
  </nav>
 </div>

  <div id="archives" class="hide_me"></div>
  <script type="text/javascript">
  	$(document).ready(function() {
		$(".news_btn").click(function() {
			$(".news_btn").css({"background-color" : "", "color" : "", "border" : ""});
			$(this).css({"background-color" : "#fff", "color" : "#c22", "border" : "2px inset #000"});
			$("#archives").hide("slide", {direction:"down"}, 100);
			$("#archives").show("slide", {direction:"up"}, 300);
		});
  	 });
  </script>
</body>
</html>