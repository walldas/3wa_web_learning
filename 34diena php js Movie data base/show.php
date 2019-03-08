<?php

include "helpers.php";




$id=$_GET['id'];
$movie=getMovieById($id);

include 'views/show.views.php';


