<?php
function perimetre($longes,$larg) :int{
    return (($longes+$larg)*2);
    
}
function surface($longes,$larg) :int{
    return ($longes*$larg);
}
function diagonale($longes,$larg) :float{
    return sqrt(pow($longes+$larg,2));
}

?>