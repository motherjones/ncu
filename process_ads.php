<?php 
header("Content-Type: text/html;charset=UTF-8");
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "incs/credentials.inc";
include "insert_ads.php";

print "Attempting to add ads to NCU";
$new_ad = new insertAds($_REQUEST);
print "<br>created insert ad object";

$db_connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die ("Can't connect to database");

$query_str = "INSERT INTO newsletter_ads(";
$values = "VALUES(";

foreach($new_ad->getArray() as $key => $value) {
	$query_str .= $key . ",";
	$values .= "'" . $value . "'" . ",";
}

$query_str = rtrim(trim($query_str), ",");
$values = rtrim(trim($values), ",");

$query_str .= ")";
$values .= ");";

$query_str .= $values;

mysqli_query($db_connect, $query_str) or die("Query did not run correctly". mysqli_error($db_connect));
mysqli_close($db_connect);

/*if($new_ad::writeToDB($dbhost, $dbuser, $dbpassword, $dbdb)) {
	print "db write ok.";
}
else {
	print "db write failed.";
}*/
?>