<?php
$id=$_GET['id'];
echo $id;
include("connexionbase.php");
$sql="DELETE FROM enseignant WHERE id_ens=$id";
echo $sql;
try
{
    $result=mysqli_query($cnx,$sql);
    echo "Suppression avec succees";
    header("Location:admin.php");
}
catch (exception $e)
{
    echo "erreur supprssion".$e->getMessage();
}
?>