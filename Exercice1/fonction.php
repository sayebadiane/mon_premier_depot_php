<?php 
function perimetre(int $cote) :int{
    return $cote*4;

}
function surface(int $cote){
    return $cote*$cote;
}
function diagonal(int $cote) :int{
    return sqrt(pow($cote,2));
}



?>