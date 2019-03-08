<?php

function dump($what){
	echo "<pre>";
	print_r($what);
	echo "</pre>";

}

function dd($what){
	echo "<pre>";
	print_r($what);
	echo "</pre>";
	die;
}


function formatTime($min){
	$h=floor($min/60);//paima sveikaja dali
	$min=str_pad($min%60,2,"0",STR_PAD_LEFT);//str_pad prideda
	return $h." val ".$min." min";
}



	// function creatConection(){
	// //prisijungimas
	// $dsn="mysql:dbname=classicmodels;host=127.0.0.1";
	// $user="root";
	// $password=NULL;
	// $connection = new PDO($dsn, $user, $password);
	// return $connection;
	// }
function creatConection(){
$pdo = new PDO('mysql:host=localhost;dbname=movies', 'root', null);
return $pdo;
}

// $movies=[];
	// $movie=[
	// 	"id"=>0,
	// 	"img"=>'http://3.bp.blogspot.com/-eP8dk6F26Q0/TgU32bJWqLI/AAAAAAAABSE/AN9h1rdN61U/s1600/RIO+2011+DVD.png',
	// 	"title"=>"Movie tile",
	// 	'year'=>2015,
	// 	"length"=>119,
	// 	];


	// for($i=1;$i<=8;$i++){
	// 	$movie["id"]=$i;
	// 	$movies[]=$movie;
	// }

function getAllMoviesAsArray (int $offset,int $limit){
 	$connection=creatConection();
 	$query=$connection->prepare('SELECT * FROM movies LIMIT :offset, :limit');
 	$query->bindValue(":offset",$offset,PDO::PARAM_INT);
 	$query->bindValue(":limit",$limit,PDO::PARAM_INT);
 	$query->execute();
 	$movies=$query->fetchAll();
 	return ($movies);
}
function getAllMoviesAsArrayByTime($t){
	$connection=creatConection();
 	$query=$connection->prepare('SELECT * FROM movies WHERE length < '.$t);
 	// $query=$connection->prepare('SELECT * FROM movies WHERE length < :$t');
 	// $query->bindValue(':$t',$t,PDO::PARAM_INT);
 	$query->execute();
 	$movies=$query->fetchAll();
 	return ($movies);
}
// *UPDATE movies
// *SET year=2001,
// *length=30
// 	WHERE length=30
// 	ORDER BY length ASC 
// 	LIMIT 5


function minlen(){
	$connection=creatConection();
 	$query=$connection->prepare('SELECT MIN(length) FROM movies');
 	$query->execute();
 	$movies=$query->fetchAll();
 	// dump($movies[0][0]);
 	return ($movies[0][0]);
}


function getMovieById($id){
	$connection=creatConection();
	// print $id;
 	$query = $connection->prepare('SELECT * FROM movies WHERE id= :id LIMIT 1');
 	$query->bindValue(':id',$id,PDO::PARAM_INT);
 	$query->execute();
 	return $query->fetch();
}

function getTotalCount(){
 	$connection=creatConection();
 	$query=$connection->query('SELECT COUNT(*) FROM movies');
 	return $query->fetchColumn();
 }

function getAts(string $find){

	$sql='SELECT * FROM movies WHERE title LIKE :find';
	$find='%'.$find.'%';
	$connection=creatConection();
 	$query=$connection->prepare($sql);
 	$query->bindValue(":find",$find,PDO::PARAM_STR);
 	$query->execute();
 	return $query->fetchAll();
 }

// function getAts($title) : int{
// $connection = createConnection();
// if ($title == null) {
//     $sql = "SELECT count(*) FROM movies";
// } else {
//     $title = '%' . $title . '%';
//     $sql = "SELECT count(*) FROM movies WHERE title LIKE :title";
// }
// $query = $connection->prepare($sql);
// if ($title !== null) {
//     $query->bindValue(':title', $title);
// }
// $query->execute();
// return $query->fetchColumn();
// }