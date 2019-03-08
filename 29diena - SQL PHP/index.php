<?php

$dsn="mysql:dbname=classicmodels;host=127.0.0.1";
$user="root";
$password=NULL;


try {
    $connection = new PDO($dsn, $user, $password);
    echo "prisijungiau <br><br>";

    $sql = 'SELECT * FROM customers LIMIT 20';
    foreach ($connection->query($sql) as $row) {
        print($row)["customerName"]."<br>";
        print($row)["phone"]."<br>";
     }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}






  ?>