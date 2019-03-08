<?php
include "utils.php";
echo $_GET['id'];
if(isset($_GET['id'])){
  removeTask($_GET['id']);
}else{
  clearTasks();
}
header("location:/index.php");
exit;
 ?>
