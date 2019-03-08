<?php
include "helpers.php";


$connection=creatConection();
$page=isset($_GET['page'])?$_GET['page']:1;
$total=getTotalCount();
$limit=4;
$offset=($page-1)*$limit;

if (isset($_GET["btn"])&& $_GET['btn']>0){
	$mi=$_GET["btn"];
	$mdb="Movies with duration less than: ".formatTime($mi);
	$movies=getAllMoviesAsArray ($mi);
}
else if (isset($_GET['title'])){
$movies=getAts($_GET['title']);
$mdb="Searching resolt of: ".$_GET['title'];
$searchTerm=$_GET['title'];

}
else{
	$mi=999;
	$mdb="Movies Data Base";
	$movies=getAllMoviesAsArray ($offset,$limit);
	$searchTerm="";
}

$currentTotal = $offset + $limit;
$pageCount=ceil($total/$limit);
$nextPage=$page+1;
$prePage=$page-1;

$movieColection=array_chunk($movies, 4);//sukapoja po 4 ir grazina
$minlenth=minlen();

include "views/index.view.php";