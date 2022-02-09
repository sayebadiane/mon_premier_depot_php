<?php
function somme($a,$b):int{
    return ($a+$b);
}
function exponentiel($a,$b):int{
    return (pow($a,$b));

}
function difference($a,$b):int{
    return ($a-$b);

}
function produit($a,$b) : int{
    return ($a*$b);
}
function modulo($a,$b):int{
    return ($a%$b);
}
function division($a,$b):void{
    if($b==0){
        echo "b ne peut pas etre null <br>";
    }
    else{
        $div=($a/$b);
        echo "la division est $div <br>";
    }
}
function carre($a,$b):void{
    $carrea=(pow($a,2));
    echo 'le carre de '.$a .' est'.$carrea .'<br>';
    $carreb=($b*$b);
    echo "le carre de $b est $carreb <br>";
}



?>