<?php
include('fonction.php');
define("x",1);
define("y",3);
$point=[rand(x,y),rand(x,y)];
$point0=[rand(1,3),rand(1,2)];
$dist=distance($point,$point0);
echo  "la distance etre A($point[0],$point[1]) et B($point0[0],$point0[1] ) est $dist";

?>