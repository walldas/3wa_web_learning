<?php


$dsn="mysql:dbname=classicmodels;host=127.0.0.1";
$user="root";
$password=NULL;

try {
    $connection = new PDO($dsn, $user, $password);
    echo "prisijungiau <br><br>";
	// $limit=$total<$limit? $total:$limit;
    $staitment=$connection->query('SELECT COUNT(*)  FROM products');
    $total = $staitment->fetchColumn(); //grazina eilute /stulpeli

    
	if (isset($_GET['limit'])){
		$limit=$_GET['limit'] > $total || $_GET['limit'] < 0 ? $total : $_GET['limit'];//trumpintas if'as
	}
	else{
		$limit=10;
	}



	// print($sort);
	if ($_GET["sort"]=="1"){
		$by="buyPrice ASC";
		$sql = 'SELECT productName,productCode, buyPrice ,MSRP  FROM products ORDER BY '.$by.' Limit '.$limit;
	}
	else if($_GET["sort"]=="2"){
		$by="buyPrice DESC";
		$sql = 'SELECT productName,productCode, buyPrice ,MSRP  FROM products ORDER BY '.$by.' Limit '.$limit;
		
	}
	else if($_GET['sort']=="3"){
		$by="productCode";
		$sql = 'SELECT productName,productCode, buyPrice ,MSRP  FROM products ORDER BY '.$by.' Limit '.$limit;

	}
	else{
    $sql = 'SELECT productName,productCode, buyPrice ,MSRP  FROM products ORDER BY buyPrice DESC  Limit '.$limit;
		
	}



    
// print $sql;
    $productsStaitment=$connection->query($sql);
    $products=$productsStaitment->fetchAll();//grazina masyva







} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

include 'index.phtml';
 ?>