<?php
include('fonction.php');
define("val_a",1);
define("val_b",10);

$x=rand(val_a,val_b);
$y=rand(val_b,val_b);
$som=somme($x,$y);
echo " les valeurs de a et b sont $x et $y <br>";
echo "la somme est $som <br>";
$expo=exponentiel($x,$y);
echo 'l \'exponentiel est'.$expo .'<br>';
$dif=difference($x,$y);
echo "la diference est $dif <br>";
$pro=produit($x,$y);
echo "le produit est $pro <br>";
$mod=modulo($x,$y);
echo "le modulo est $mod <br>";
division($x,$y) ;

carre($x,$y);


?>