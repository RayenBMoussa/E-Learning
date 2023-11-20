<?php 
$hote="localhost";
$user="root";
$pw="";
$base="projetbd";
$cnx=mysqli_connect($hote,$user,$pw) or die("Erreur connexion serveur");
mysqli_select_db($cnx,$base) or die('Erreur connexion base'.mysqli_error($cnx));
//if($cnx)
//{echo "u are connected";}
?>