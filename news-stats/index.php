<?php
header("Content-Type: text/html;charset=UTF-8");
include "../incs/credentials.inc";
$today = date("Y-m-d", time());
include "../incs/header.inc"
?>
<header>
	<button onclick="location.href='../'" style="text-align:center;">Go to Newsletter Tool</button>
	<button onclick="location.href='../archives'" style="text-align:center;">Go to Newsletter Archives</button>
</header>

<h2>Archived Newsletter Statistics</h2>

<div id="stats_sect">
	<p><button onclick="window.open('news-stats-2017.html', 'Newsletter Stats', 'toolbar=no,width=1200,scrollbars=yes');">2017 Newsletter Stats</button></p>
</div>
	</body>
</html>