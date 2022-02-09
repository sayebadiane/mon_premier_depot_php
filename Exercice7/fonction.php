<?php
session_start();
function bissextil($an):bool{
    if(($anmod4==0 && $anmod100!=0) || ($anmod100==0 && $anmod400==0)){
        return vrai;
    }
}
function jour_suivant($jour,$mois,$an):void{
    if($mois==2){
        if(bissextil($an)){
            if($jour<29){
                $jour=$jour+1;
            }
            elseif($jour==29){
                $jour=1;
                $mois=3;
            }
        }
        else{
            if($jour<28){
                $jour=$jour+1;
            }
            elseif($jour==28){
                $jour=1;
                $mois=3;
            }

        }
    }
    elseif($mois==4 || $mois==6 || $mois==9 || $mois==11){
        if($jour<30){
            $jour=$jour+1;
        }
        elseif($jour=30){
            $jour=1;
            $mois=$mois+1;
        }

    }
    else{
        if($jour<31){
            $jour=$jour+1;
        }
        elseif($jour==31 && $mois==12){
            $jour=1;
            $mois=1;
            $an=$an+1;


        }
    }

    echo "le jour suivant est $jour,$mois,$an";

}
?>
