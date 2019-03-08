<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once "utils.php";


$anglonas=[
  "labas"=>"hi",
  "ugnis"=>"fire",
  "vienas"=>"one",
  "kate"=>"cat",
  "sou"=>"dog"
];
print_r ($anglonas);


if(count($_GET)>0){
  $fraze=$_GET["fraze"];
  $kalba=$_GET["kalba"];
  if ("EN"==$kalba){
    if (isset($anglonas[$fraze])) {
      $zodis=$anglonas[$fraze];
    } else {
      $zodis = null;
    }

  }
  else if ("LT"==$kalba){
    $zodis=array_search($fraze,$anglonas);
  }
  if($zodis==null || $zodis==false){
  $zodis="zodis nerastas";
}
}
include_once "index.phtml";
?>
