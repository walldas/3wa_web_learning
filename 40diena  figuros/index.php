<?php

include "trikampis.php";
include "apskritimas.php";
include "staciakampis.php";
include "kvadratas.php";
include "rombas.php";

$tin=new Triangle(3,4);
print "Trikampis <br>";
print "A=".$tin->a."<br>";
print "B=".$tin->b."<br>";
print "C=".$tin->c."<br>";
print "S=".$tin->S."<br>";
print "P=".$tin->P."<br>";
print_r($tin);
print "<br><br><br>";



$apskritimas=new Cirkle(5);
print "Apskritimas <br>";
print "r=".$apskritimas->r."<br>";
print "C=".$apskritimas->C."<br>";
print "S=".$apskritimas->S."<br>";
print_r($apskritimas);
print "<br><br><br>";

$st=new staciakampis(3,4);
print "staciakampis <br>";
print "A=".$st->a."<br>";
print "B=".$st->b."<br>";
print "P=".$st->P."<br>";
print "S=".$st->S."<br>";
print_r($st);
print "<br><br><br>";

$kv=new kvadratas(3);
print "kvadratas <br>";
print "A=".$kv->a."<br>";
print "P=".$kv->P."<br>";
print "S=".$kv->S."<br>";
print_r($kv);
print "<br><br><br>";

$ro=new rombas(5, 10);
print "rombas <br>";
print "A=".$ro->a."<br>";
print "h=".$ro->h."<br>";
print "P=".$ro->P."<br>";
print "S=".$ro->S."<br>";
print_r($ro);
print "<br><br><br>";