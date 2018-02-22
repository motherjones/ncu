<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

include "credentials.inc";

class getDBConnect {
  private $dbConnect = "";

  public function __construct($dbhost, $dbuser, $dbpassword, $dbdb) {
    $dbConnect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdb) or die("can't connect to db");
    return $dbConnect;
  }

  public function closeDB() {
    mysqli::close();
  }
}

class Headlines {
  private $heds;
  private $deks;
  private $urls;

  public function __construct($setheds, $seturls, $setdeks) {
    try {
      $this->setHeds($setheds);
      $this->setUrls($seturls);
      $this->setDeks($setdeks);
      //throw new Exception("can't set private variables<br />");
    }
    catch(Exception $e) {
      print "threw an exception in the class";
      print $e->getMessage();
    }
  }
//getter functions
  public function getHeds() {
    return $this->heds;
  }
  public function getDeks() {
    return $this->deks;
  }
  public function getUrls() {
    return $this->urls;
  }

//setter functions
  private function setHeds($setheds) {
    $this->heds = $setheds;
  }
  private function  setDeks($setdeks) {
    $this->deks = $setdeks;
  }
  private function setUrls($seturls) {
    $this->urls = $seturls;
  }
}

class HeadlinesWrapper {
  private $main_div;
  private $div_close;

  public function __construct() {
    $this->setTable("<table id='main' style='margin:5px auto;width:640px;border:2px #cccccc solid;'>");
    $this->setCloseTable("</table>");
  }

  private function setTable($main_div_code){
    $this->main_div = $main_div_code;
  }

  private function setCloseTable($close_div) {
    $this->div_close = $close_div;
  }

  public function getTable() {
    return $this->main_div;
  }

  public function getCloseTable() {
    return $this->div_close;
  }

  public function getCloseTr() {
    return "</tr>";
  }

  public function getCloseTd() {
    return "</td>";
  }

  public function getOpenTr() {
    return "<tr>";
  }

  public function getOpenTd() {
    return "<td>";
  }

  public function getHeaderSection() {
    $header_sect = "<div style='width:638px;margin:0 0 5px 0;'>";
    return $header_sect;
  }

  public function getSectionDiv() {
    $sect_div = "<div style='width:319px;padding:0 10px;'>";
    return $sect_div;
  }

  public function getCloseSection() {
    $close_sect = "</div>";
    return $close_sect;
  }
}
?>