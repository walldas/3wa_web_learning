


<?php
require 'utiliti.php';
//prisijungimas prie mysql 
$connection = conect();
//GET prisikiriam prie ID kintamojo
 $id = $_GET['penktadienis'];
//Isvedam is duomenu bazes ID 
$sql = "SELECT * FROM products WHERE productCode= :id"; 
// print $sql;
//Statement yra PDOStatement objektas
// $statement = $connection->query($sql);
$statement = $connection->prepare($sql);
//apatines eilutes reikalingos del saugumo
$statement -> bindValue(':id',$id);
$statement -> execute(); 
//Grazina 1 eilute
$product = $statement->fetch();

include "view.phtml"
?>