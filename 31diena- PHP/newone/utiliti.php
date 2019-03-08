
<?php

function conect(){
//prisijungimas
$dsn="mysql:dbname=classicmodels;host=127.0.0.1";
$user="root";
$password=NULL;
$connection = new PDO($dsn, $user, $password);
return $connection;
}

?>