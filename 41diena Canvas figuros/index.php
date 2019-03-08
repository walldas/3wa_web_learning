<?php

include "point.class.php";
include "shape.class.php";

include "trikampis.class.php";
include "staciakampis.class.php";
include "kvadratas.class.php";
include "elipse.class.php";
include "circle.class.php";


$circle=new Circle();
$circle->setLocation(350,250);
$circle->setOpacity(0.5);
$circle->setColor("red");
$circle->setRadius(90);
$circle->setText("bla bla bla");

$staciakampis=new Staciakampis();
$staciakampis->setLocation(350,275);
$staciakampis->setOpacity(0.5);
$staciakampis->setColor("blue");
$staciakampis->setA(100);
$staciakampis->setB(350);

$kvadratas=new Kvadratas();
$kvadratas->setLocation(400,200);
$kvadratas->setOpacity(0.5);
$kvadratas->setColor("green");
$kvadratas->setA(150);

$elipse=new Elipse();
$elipse->setLocation(400,150);
$elipse->setOpacity(0.8);
$elipse->setColor("yellow");
$elipse->setA(150);
$elipse->setB(50);
$elipse->setText("cia elipse");

$trikampis=new Trikampis();
$trikampis->setOpacity(0.8);
$trikampis->setColor("black");
$trikampis->setPoints(350,50,50,350,350,350);



?>






<!DOCTYPE HTML>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> 40diena</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="diena.css"/>
</head>
<body>


<svg height="500" width="800">
<?= $circle->draw()?>
<?= $staciakampis->draw()?>
<?= $kvadratas->draw()?>
<?= $elipse->draw()?>
<?= $trikampis->draw()?>
</svg>




</body>
</html>






