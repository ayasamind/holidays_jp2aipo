#!/usr/local/bin/php
<?php

$data = file_get_contents("php://stdin");
$array = yaml_parse($data);
$fp = fopen("holidays.properties", 'w');
foreach($array as $key => $value){

  $format = "%s,%s\n";
  $hoge = sprintf($format, $value["name"], $value["date"]);
  echo $hoge;
//fwrite($fp, $value["name"]);
//fwrite($fp, $value["date"]."\n"); 

  fwrite($fp, $hoge);
}
fclose($fp);
?>

