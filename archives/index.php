<?php
header("Content-Type: text/html;charset=UTF-8");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Newsletter Archives</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <style type="text/css">
    #header {margin: 5px auto;
    	width:680px;
    	text-align:center;
    	background-color: #ccc;
    	padding: 5px 0;
    	border: 3px outset #fff;}
    p {border:2px outset #ccc;
    	font-size: 14px;}
    p a {font-weight: bold;
    	color: #000;
    	text-decoration: none;}
    p a:hover {color:#0099fa;}
    span {font-size: 14px;
    	font-weight: bold;
    	color:#ffff66;}
    td {border: 3px inset #000;}
    td#breaking_news {background-color: #aa9979;}
    td#econundrums {background-color: #33ce08;}
    td#food, td#fft_red {background-color: #69ccff;}
    td#politics {background-color: #cfb999;}
    td#in_the_mix {background-color: #ffb999;}
    h3 {color: #fff;
    	text-shadow: 3px 3px 4px black;}
    p.current_style {margin:3px 0 10px 0;
    	padding:4px 2px;
    	background-color:#969696;
    	font-weight:bold;
    	text-align:center;
    	text-decoration:none;}
    p.current_style a {color:#88ffff;}
    p.normal_style {margin:3px 0 0 0;
    	padding:2px 2px;
    	text-align:center;
    	text-decoration:none;
    	color: #000;
    	background-color: #fff;}
    p.test, p.test a {margin:3px 0 0 0;
    	padding:2px 2px;
    	text-align: center;
    	text-decoration:none;
    	background-color: #000 !important;
    	color: #fff !important;}
  </style>
</head>
<body style="background-color:#000;">
   <div id="header">
    <h2 id="head_text">Newsletters Archives</h2>
    <img src="../logo_inside.gif" border="0" style="border: 2px outset #ddd;" />
    <br />
    <input style="clear:both;margin:20px auto;" type="button" value="Go to Newsletters Tool" onclick="location.href='../'" />&nbsp;&nbsp;<input style="clear:both;margin:20px auto;" type="button" value="Go to archived newsletter stats" onclick="location.href='../news-stats/'" />
  </div>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$econundrum = glob("*econundrum*.html");
$food = glob("*food_for_thought_new.html");
$fft_red = glob("*food_for_thought_redesign.html");
$inthemix = glob("*in_the_mix*.html");
$politics = glob("*political*.html");
$breaking = glob("*breaking_news*.html");
$trumpocracy = glob("*trumpocracy*.html");

$count_eco = count($econundrum);
$count_food = count($food);
$count_fft = count($fft_red);
$count_wt = count($inthemix);
$count_pol = count($politics);
$count_br = count($breaking);
$count_trump = count($trumpocracy);

$econundrum = array_reverse($econundrum);
$food = array_reverse($food);
$fft_red = array_reverse($fft_red);
$inthemix = array_reverse($inthemix);
$politics = array_reverse($politics);
$breaking = array_reverse($breaking);
$trumpocracy = array_reverse($trumpocracy);

$cur_styles = "current_style";
$norms_styles = "normal_style";
$test_styles = "test";
$apply_style = "";

$print_bn = "<td id='breaking_news' width='170' valign='top'><h3 style='border-bottom:1px #fff dashed;text-align:center;font-size:20px;'>Breaking News</h3>";
for($i = 0; $i < $count_br; $i++) {
	if($i == 0) {
		$new = "<span>Current:</span>&nbsp;";
		$apply_style = $cur_styles;
	}
	else {
		if (stripos($breaking[$i], "1492") === false) {
			$new = "";
			$apply_style = $norms_styles;
		}
		else {
			$new = "";
			$apply_style = $test_styles;
		}
	}
	$f_index = stripos($breaking[$i], "breaking_news") - 1;
	$display_date = substr($breaking[$i], 0, $f_index);
	
	$print_bn .= "<p class=\"$apply_style\">$new<a href=\"" . $breaking[$i] . "\">" . $display_date . "</a></p>";
}
$print_bn .= "</td>";

$print_eco = "<td id='econundrums' width='170' valign='top'><h3 style='border-bottom:1px #fff dashed;text-align:center;font-size:20px;'>Econundrums</h3>";
for($i = 0; $i < $count_eco; $i++) {
  if($i == 0) {
    $new = "<span>Current: </span>";
    $apply_style = $cur_styles;
  }
  else {
  	if (stripos($econundrum[$i], "1492") === false) {
  		$new = "";
  		$apply_style = $norms_styles;
  	}
  	else {
  		$new = "";
  		$apply_style = $test_styles;
  	}
  }
  $f_index = stripos($econundrum[$i], "econundrums") - 1;
  $display_date = substr($econundrum[$i], 0, $f_index);
  
  $print_eco .= "<p class=\"$apply_style\">$new<a href=\"" . $econundrum[$i] . "\">" . $display_date . "</a></p>";
}
$print_eco .= "</td>";

$print_trump = "<td id='food' width='170' valign='top'><h3 style='border-bottom:1px #fff dashed;text-align:center;font-size:18px;'>The Russian Connection</h3>";
for($i = 0; $i < $count_trump; $i++) {
  if($i == 0) {
    $new = "<span>Current: </span>";
    $apply_style = $cur_styles;
  }
  else {
  	if (stripos($trumpocracy[$i], "1492") === false) {
  		$new = "";
  		$apply_style = $norms_styles;
  	}
  	else {
  		$new = "";
  		$apply_style = $test_styles;
  	}
  }
  $f_index = stripos($trumpocracy[$i], "trumpocracy") - 1;
  $display_date = substr($trumpocracy[$i], 0, $f_index);
  
  $print_trump .= "<p class=\"$apply_style\">$new<a href=\"" . $trumpocracy[$i] . "\">" . $display_date . "</a></p>";
}
$print_trump .= "</td>";

$print_fft_red = "<td id='fft_red' width='185' valign='top'><h3 style='border-bottom:1px #fff dashed; text-align:center;font-size:18px;'>Food for Thought Redesign</h3>";
for($i = 0; $i < $count_fft; $i++) {
	if($i == 0) {
	  $new = "<span>Current: </span>";
	  $apply_style = $cur_styles;
	}
	else {
	  if (stripos($fft_red[$i], "1492") === false) {
	  	$new = "";
		$apply_style = $norms_styles;
	  }
	  else {
	  	$new = "";
	  	$apply_style = $test_styles;
	  }
	}
	$f_index = stripos($fft_red[$i], "food_for_thought_redesign") - 1;
	$display_date = substr($fft_red[$i], 0, $f_index);
	
	$print_fft_red .= "<p class=\"$apply_style\">$new<a href=\"" . $fft_red[$i] . "\">" . $display_date . "</a></p>";
}
$print_fft_red .= "</td>";

$print_politics = "<td id='politics' width='170' valign='top'><h3 style='border-bottom:1px #fff dashed;text-align:center;font-size:20px;'>Political Mojo</h3>";
for($i = 0; $i < $count_pol; $i++) {
  if($i == 0) {
    $new = "<span>Current: </span>";
    $apply_style = $cur_styles;
  }
  else {
  	if (stripos($politics[$i], "1492") === false) {
  		$new = "";
  		$apply_style = $norms_styles;
  	}
  	else {
  		$new = "";
  		$apply_style = $test_styles;
  	}
  }
  $f_index = stripos($politics[$i], "political") - 1;
  $display_date = substr($politics[$i], 0, $f_index);
  
  $print_politics .= "<p class=\"$apply_style\">$new<a href=\"" . $politics[$i] . "\">" . $display_date . "</a></p>";
}
$print_politics .= "</td>";

$print_wt = "<td id='in_the_mix' width='170' valign='top'><h3 style='border-bottom:1px #fff dashed;text-align:center;font-size:20px;'>In the Mix</h3>";
for($i = 0; $i < $count_wt; $i++) {
  if($i == 0) {
    $new = "<span>Current: </span>";
    $apply_style = $cur_styles;
  }
  else {
  	if (stripos($inthemix[$i], "1492") === false) {
  		$new = "";
  		$apply_style = $norms_styles;
  	}
  	else {
  		$new = "";
  		$apply_style = $test_styles;
  	}
  }
  $f_index = stripos($inthemix[$i], "in_the_mix") - 1;
  $display_date = substr($inthemix[$i], 0, $f_index);
  
  $print_wt .= "<p class=\"$apply_style\">$new<a href=\"" . $inthemix[$i] . "\">" . $display_date . "</a></p>";
}
$print_wt .= "</td>";

print "<table width=\"980\" cellpadding=\"3\" align=\"center\">";
print "<tr>";
print $print_eco;
print $print_fft_red;
print $print_wt;
print $print_politics;
print $print_trump;
print $print_bn;
print "</tr>";
print "</table>";
?>
</body>
</html>