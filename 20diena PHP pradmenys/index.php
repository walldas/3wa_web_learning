<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once "utils.php";
 // $student="studentas";
// $aa='labas ';
// $skaicius=6;
// $pi=3.14;
// $sarasas=[$aa,$student,$studentas,$pi];//komentaras per viena eilute
// $aras=array($aa,$student,$studentas,$pi,$pi,$pi);# uz teksto galima
/*komentars iki
tike kiek nori iki pat sio simboliu kombinacijso */
/*
echo $aa."<br>";#taskas prijungia
print $student."<br>";
print $skaicius."<br>";
print $pi."<br>";
echo print_r ($sarasas)."<br>";
print_r ($aras)."<br>";
*/
$table=[
  "head"=>["ID","Title"],
  "body"=>[
    [1,"3wa "],
    [2,"seiminiskiu "],
    [3,"gatve "]
  ]
];
/*
foreach ($table["body"] as $col){
  foreach ($col as $row ){
    echo $row;
  }
}
*/

// print_r($_POST);

// if (isset($_POST["vardas"])){
// $vardas=$_POST["vardas"];
// echo $headline="Salyga OK";
// }
// else {
//   $vardas="3wa";
//   echo $headline="NOT OK";
// }
// $t=fopen("file.csv","wra");
// //w -rassik i faila (istrina viska kas buvo)
// //r-nuskaito fann_create_train_from_callback
// //a- append -pridek prie to pacio as yra (w+)
// fputcsv($t,array);//raso i faila csv formatu
// fgetcsv($t);//skaitymo
// fclose($t);//uzdaro faila
if (count($_POST)>0){
  addTask(
    $_POST["vardas"],
    $_POST["nu"],
    $_POST["textas"],
    $_POST["laikas"]
  );
  // $sar=[$_POST["vardas"],$_POST["nu"],$_POST["textas"],$_POST["laikas"]];
  // $t=fopen(filename,"a");
  // fputcsv($t,$sar);
  // fclose($t);
};
$all=loadTasks();
// saveTask();
// if (isset($_POST["vardas"])){
// $sar=[$_POST["vardas"]];
// $t=fopen("file.csv","a");
// fputcsv($t,$sar);
// #echo ("prideta verte prie saraso:".fgetcsv($t)."<br>");
// fclose($t);
//
// $r=fopen(filename,"r");
// $all=[];
// while (($row=fgetcsv($r)) !=false){
//   $all[]=$row;
//   // echo print_r("<li>".$all)[0]."</li>";
// }
// fclose($r);
// loadTasks();

include_once "index.phtml";# abi funkcijos daro tapati tik si neitraukia
require_once "index.phtml";#neinkliudina failo naudosim tada kai naudosim funkcijas is kitu failu

#-------------------------------PHP--END---------------------------
?>
