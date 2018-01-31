<?php
$toto="Premier code PHP";
$week=array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");
$tab2=[["lundi","patates","glace"],["mardi","ss","ch"],["mercredi","xx","cc"],["jeudi","xx","cc"],["vendredi","xx","cc"],["samedi","xx","cc"],["dimanche","xx","cc"]]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style='color:red;'> <?php  echo($toto . "\n" );   ?> </h1>
    <ul>
    <?php
    echo('1er cas-Tableau avec une dimension:  <br/>');
     for ($i=0; $i < count($week); $i++) { 
         # code...
         echo("<li>{$week[$i]}</li>");
     }
    ?>
    </ul>
    
<table border="1" width="400">
<?php
$NbrCol 	= 3; 
$NbrLigne 	= 7;  
?>
<thead>
	<th style="background:#CCCCCC;">Jour</th>
	<th style="background:#CCCCCC;">Plats</th>
	<th style="background:#CCCCCC;">Desserts</th>
    
</thead>

<tbody>
<?php
	for ($i=0; $i < $NbrLigne ; $i++) { 
        echo("<tr>");
        for ($j=0; $j < $NbrCol ; $j++) { 
          echo("<td> {$tab2[$i][$j]}</td>");
        }
        echo("</tr>");
    }
?>
</tbody>
</table>

</body>
</html>