<?php include_once "header.phtml";?>
<?php include_once "utils.php";?>
<?php
$id=$_GET["id"];
$ff=fopen("file.csv","r");
$line=0;
while ($row=fgetcsv($ff)){
  if($line==$id){
    $data=$row;
    break;
  }
  $line++;
}
fclose($ff);
include_once "komentaras.phtml";

 ?>
<?php include_once "footer.phtml"; ?>
