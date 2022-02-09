<?php
function distance($point):float{
    return (sqrt(pow($point[0][0]-$point[1][0]))+(pow($point[1][0]-$point[1][1]) )  );
}
?>