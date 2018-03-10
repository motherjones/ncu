<?php
header("Content-Type: text/html;charset=UTF-8");
include "../incs/credentials.inc";
$today = date("Y-m-d", time());
include "../incs/header.inc"
?>
   <div id="header">
    <h2 id="head_text">Newsletters Archives (old)</h2>
    <button onclick="location.href='../'">Go to Newsletters Tool</button>
    <button onclick="location.href='../news-stats/'">Archived newsletter stats</button>
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