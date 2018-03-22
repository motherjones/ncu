<?php 
header("Content-Type: text/html;charset=UTF-8");
include "../incs/credentials.inc";
$today = date("Y-m-d", time());
include "../incs/header.inc"
?>
<header style="width:100%;text-align:center;">
	<p><button onclick="window.close();">Close window/tab</button></p>
	<nav style="margin:0 auto;max-width:760px;display:inline-block;text-align:center;clear:both;">
  		<button id="breaking_news" class="news_btn" onclick="showMe(this.id)">Breaking News</button>
  		<button id="econundrums_new" class="news_btn" onclick="showMe(this.id)">Econundrums</button>
  		<button id="food_for_thought_redesign" class="news_btn" onclick="showMe(this.id)">Food for Thought</button>
  		<button id="in_the_mix_new" class="news_btn" onclick="showMe(this.id)">In the Mix</button>
		<button id="political_mojo_new" class="news_btn" onclick="showMe(this.id)">Politial MoJo</button>
		<button id="trumpocracy" class="news_btn" onclick="showMe(this.id)">The Russian Connection</button>
  	</nav>
</header>
<div id="tmp_container" style="float:left;padding-right:10px;">
<?php 
$econundrums = glob("*econundrums*.html");
rsort($econundrums);
$food = glob("*food_for_thought*.html");
rsort($food);
$inthemix = glob("*in_the_mix*.html");
rsort($inthemix);
$political = glob("*political_mojo*.html");
rsort($political);
$russ_connect = glob("*trumpocracy*.html");
rsort($russ_connect);
$break_news = glob("*breaking_news*.html");
rsort($break_news);

print "<div id='tmp_econ' class='type_container' style='display:none;'>";
for($i = 0; $i < count($econundrums); $i++) {
	print "<p><button onclick=\"window.open('$econundrums[$i]', 'lost_news');\">" . $econundrums[$i] . "</button></p>";
}
print "</div>";

print "<div id='tmp_fft' class='type_container' style='display:none;'>";
for($i = 0; $i < count($food); $i++) {
	print "<p><button onclick=\"window.open('$food[$i]', 'lost_news');\">" . $food[$i] . "</button></p>";
}
print "</div>";

print "<div id='tmp_itm' class='type_container' style='display:none;'>";
for($i = 0; $i < count($inthemix); $i++) {
	print "<p><button onclick=\"window.open('$inthemix[$i]', 'lost_news');\">" . $inthemix[$i] . "</button></p>";
}
print "</div>";

print "<div id='tmp_pol' class='type_container' style='display:none;'>";
for($i = 0; $i < count($political); $i++) {
	print "<p><button onclick=\"window.open('$political[$i]', 'lost_news');\">" . $political[$i] . "</button></p>";
}
print "</div>";

print "<div id='tmp_russ' class='type_container' style='display:none;'>";
for($i = 0; $i < count($russ_connect); $i++) {
	print "<p><button onclick=\"window.open('$russ_connect[$i]', 'lost_news');\">" . $russ_connect[$i] . "</button></p>";
}
print "</div>";

print "<div id='tmp_brnews' class='type_container' style='display:none;'>";
for($i = 0; $i < count($break_news); $i++) {
	print "<p><button onclick=\"window.open('$break_news[$i]', 'lost_news');\">" . $break_news[$i] . "</button></p>";
}
print "</div>";
?>

</div>

<div id="asgaard">

</div>

<!-- <iframe style="width:680px;margin-right:20px;float:left;height:1280px;position:fixed;top:150px;border:none;" name="lost_news"></iframe> -->

<script type="text/javascript">
function showMe(the_div) {
	$(".type_container").hide();
	switch(the_div) {
		case "econundrums_new":
			$("#tmp_econ").show();
			break;
		case "food_for_thought_redesign":
			$("#tmp_fft").show();
			break;
		case "in_the_mix_new":
			$("#tmp_itm").show();
			break;
		case "political_mojo_new":
			$("#tmp_pol").show();
			break;
		case "trumpocracy":
			$("#tmp_russ").show();
			break;
		case "breaking_news":
			$("#tmp_brnews").show();
			break;
		default:
			break;
	}
}
</script>
</body>
</html>