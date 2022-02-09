<?php
/*Exercice 4 : Générer deux nombres puis faire leur permutation.On
affichera les deux nombres avant et après permutations.*/
include('fonction.php');
define("val_a",1);
define("val_b",10);
$x=rand(val_a,val_b);
$y=rand(val_a,val_b);
affiche($x,$y);
permite($x,$y);
?>