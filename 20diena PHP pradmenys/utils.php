<?php
const filename="file.csv";

$day=20;
$title="diena";


function loadTasks():array{
  $r=fopen(filename,"r");
  $all=[];
  while (($row=fgetcsv($r)) !=false){
    $all[]=$row;
    // echo print_r("<li>".$all)[0]."</li>";
  }
  fclose($r);
  return $all;
}

function addTask($vardas,$nu,$textas,$laikas){
  $item=[$vardas,$nu,$textas,$laikas];
  saveTask($item);

}
function saveTask(array $sar){
  // if (count($nu])>0){
    // $sar=[$vardas,$nu,$textas,$laikas];
    $t=fopen(filename,"a");
    fputcsv($t,$sar);
    fclose($t);
  // }
}
function clearTasks(){
  $r=fopen(filename,"w");
  // $all=[];
  // fputcsv($r,$all);
  fclose($r);
}
function removeTask(int $id){
  $tasks=loadTasks();
  // $tasks[$id]=[];
  unset($tasks[$id]);
  clearTasks();
  foreach ($tasks as $row ) {
    saveTask($row);
  }
}
