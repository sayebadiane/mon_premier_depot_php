<?php
function valide_numb($nbr,String $key,array &$taberror ):void{
    if(estvide($nbr)){
        $taberror[$key]="veillez entrez un nombre";

    }
    elseif(!estnombre($nbr)){
        $taberror[$key]="veillez saisir un nombre";
    }
}
function estnombre($nbr):bool{
    return (is_numeric($nbr));
           
}
function estvide($nbr):bool{
    return  empty($nbr);
}
function equation(int $a,int $b,int $c):void{
    $delta=(pow($b,2)-(4*$a*$c));
    if($delta==0){
        $x=-1*$b/(2*$a);
        echo "la solution de l' equation est $x";
    }
    elseif($delta>0){

        $x1=((-$b-sqrt($delta))/2*$a );
        $x2=(-$b+sqrt($delta))/2*$a;
        echo "la solution de l'equation est <br> x1=$x1 et x2=$x2";


    }
    else{
        echo"l' equation n'a pas de solution";
    }
 
}
?>