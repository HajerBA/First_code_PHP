<?php
//include "zoo/cat.php";
//use zoo as z;
spl_autoload_register(); //remplace les include
use zoo\Cat;

$mycat = new Cat(["white"],"chat orange",true,"Garfield");
var_dump($mycat);
echo "<br>";
$mycat->eat();
echo "<br>";
echo $mycat->get_nblegs(); //affiche la valeur
var_dump($mycat->get_nbeyes()); // affiche le type et la valeur
echo "<br>";
$mycat->hunt();
