<?php
session_start();
if(isset($_POST['ok'])){
    $jour=$_POST['jour'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    jour_suivant($jour,$mois,$annee);

echo "bonjour";
}
echo "bonjour";

?>