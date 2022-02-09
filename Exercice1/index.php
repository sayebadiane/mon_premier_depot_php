<?php
include('fonction.php');
define("Val_Max",100);
define("VAL_Min",1);
$cote=rand(VAL_Min,Val_Max);
$per=perimetre($cote);
$sur=surface($cote);
echo "le cote est $cote </br>";
echo "le perimetre est $per </br>";
echo "la surface est $sur";
?>
