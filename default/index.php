<?php
include "zoo/cat.php";
use zoo as z;

$mycat = new z\Cat(["white"],"chat orange",true,"Garfield");
var_dump($mycat);
echo "<br>";
$mycat->eat();
echo "<br>";
echo $mycat->get_nblegs(); //affiche la valeur
var_dump($mycat->get_nbeyes()); // affiche le type et la valeur
echo "<br>";
$mycat->hunt();
