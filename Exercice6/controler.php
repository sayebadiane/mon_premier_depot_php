<?php
session_start();
ini_set('display_errors', 'on'); 
include_once('fonction.php');
if(isset($_POST['ok'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $_SESSION['post']=$_POST;
    $taberror=[];
     
   valide_numb($a,"a",$taberror);
   valide_numb($b,"b",$taberror);
   valide_numb($c,"c",$taberror);

    if(count($taberror)==0){
        equation($a,$b,$c);
    }
    else{
         $_SESSION['error']=$taberror;
         header ('location:index.php');
    }
}

else{
     //Redirection
     header('location:index.php');
     exit();
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <a href="index.php">retour</a>
</body>
</html>