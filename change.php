#!/usr/bin/php
<?php

$data = file_get_contents("php://stdin");
$array = yaml_parse($data);



$fp = fopen("holidays_default.properties", 'w');
foreach($array as $key => $value){

  $format = "%s,%s\n";
  $hoge = sprintf($format, $value["name"], $value["date"]);
  echo $hoge;

  fwrite($fp, $hoge);
}
//fclose($fp);
?>

