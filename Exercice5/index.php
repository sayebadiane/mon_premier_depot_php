<?php
include('fonction.php');
define("x",1);
define("y",3);

$point =[
[
    'x'=>rand(x,y),
    'y'=>rand(x,y)
    ],
    [
        'x1'=>rand(x,y),
        'y1'=>rand(x,y)
        
        ]
        ];
    $dist=distance($point);
    echo "$dist";
 ?>