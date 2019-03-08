<?php

include "helpers.php";

$id=$_GET['id'];

$connection=creatConection();
	// print $id;
 $query = $connection->prepare('DELETE FROM movies WHERE id= :id');
 $query->bindValue(':id',$id,PDO::PARAM_INT);
 $query->execute();

header("Location: http://localhost/34diena/index.php");
exit;