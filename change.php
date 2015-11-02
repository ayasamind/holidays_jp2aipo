#!/usr/bin/php
<?php

$data = file_get_contents("php://stdin");
$array = yaml_parse($data);


<<<<<<< HEAD

=======
>>>>>>> 7658ab48ac4ad248e8114694ba0fd009fda5af11
foreach($array as $key => $value){

  $format = "%s,%s\n";
  $hoge = sprintf($format, $value["name"], $value["date"]);
  echo $hoge;
<<<<<<< HEAD

=======
>>>>>>> 7658ab48ac4ad248e8114694ba0fd009fda5af11
}

?>

