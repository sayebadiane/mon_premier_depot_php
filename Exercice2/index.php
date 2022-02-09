<?php
include('fonction.php');
 define("min",1);
 define("max",100);
 $l=rand(min,max);
 $la=rand(min,max);
 $per=perimetre($l,$la);
 $surf=surface($l,$la);
 $diag=diagonale($l,$la);
 echo "la longueur est $l <br> ";
 echo "la largeur est $la <br>";
 echo "le perimetre est $per <br>";
 echo "la surface est $surf <br>";
 echo "le diagonal est $diag ";
?>