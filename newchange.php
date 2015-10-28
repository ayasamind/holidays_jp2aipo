 = file_get_contents("php://stdin");
$array = yaml_parse($data);



foreach($array as $key => $value){

  $format = "%s,%s\n";
  $hoge = sprintf($format, $value["name"], $value["date"]);
  echo $hoge;

}
?>

~
