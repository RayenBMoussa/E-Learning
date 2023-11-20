<?php
	include('connexionbase.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['profnom'];
	$lastname=$_POST['profpre'];
    $f=$_POST['f'];
    $nbre=$_POST['nbre'];
    $sql="UPDATE enseignant set firstname='$firstname', lastname='$lastname' , formation='$f' , Nombre_de_place='$nbre' where id_ens='$id'";
	mysqli_query($cnx,$sql);
	header('location:admin.php');
?>