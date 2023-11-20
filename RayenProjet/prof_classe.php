<?php
include('searchbar.html');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <style>
        table{border-spacing: 10px;}
        form{
background-color: rgb(236, 216, 190);
width: 40%;
height: auto;
background-size: cover;
background-attachment: fixed;
text-align: center;
margin: auto;
padding: 2px; 
padding-left: 7px;
padding-right: 7px;
position: relative;
margin-top: 20px;
text-align: left;
}
.w3-button{text-align: center;
width: 100%;
margin: auto;
padding-left: 10px;
padding-right: 10px;}
    </style>
    
</head>
<body>
<form >
        <fieldset>
            <table>
            <tr>
            <th>|</th>
            <th colspan="2">Nom & prenom</th>
            <th>|</th>
           
        </tr>
<?php
if(isset($_POST['submit']))
{ include("connexionbase.php");
    if(empty($_POST['pnom'] && $_POST['lnom']))
    {
        echo "Données vides!!";
    } 
    else
    {
   
try{
include("connexionbase.php");
$nom=$_POST['pnom'];
$prenom=$_POST['lnom'];
$sql="SELECT * FROM etudiant WHERE nomprof='$nom' AND prenomprof='$prenom' ";
    $result=mysqli_query($cnx,$sql);
    if ($result)
    {
        
        $nrows=mysqli_num_rows($result);
        if ($nrows!=0)
        {
            echo "il y a $nrows ligne";
            
            while($etu=mysqli_fetch_array($result))
        {  $id=$etu[0];
            
            echo "<tr>
           
            <td>|</td><td>$etu[1]</td>
            <td>$etu[2]</td>
           
            <td>|</td>
          
            </tr>";
            
            
        }
        }
        else{
            echo "tab vide";
        }
        
    }
    else
    {
        echo "Erreur rqte :".mysqli_error($cnx);
    }
}
catch(exception $e)
{
    echo "Erreur Connexion".$e->getMessage();
    

}
}
}
?>


            </table>
        </fieldset>
    </form>
</body>
</html>