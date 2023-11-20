<?php
include("searchbar.html")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <form action="form_admin.php" method="post">
        <fieldset>
            <table>
            <tr>
            <th>|</th>
            <th>Nom</th>
            <th>|</th>
            <th>Prenom</th>
            <th>|</th>
            <th>Formation</th>
            <th>|</th>
            <th>Nombre De Place</th>
            <th>|</th>
            <th colspan="2">Action</th>
            <th>|</th>
        </tr>
<?php

try{
include("connexionbase.php");
$sql="SELECT * FROM enseignant";
    $result=mysqli_query($cnx,$sql);
    if ($result)
    {
        
        $nrows=mysqli_num_rows($result);
        if ($nrows!=0)
        {
            echo "il y a $nrows ligne";
            
            while($ens=mysqli_fetch_array($result))
        {  $id=$ens[0];
            
            echo "<tr>
           
            <td>|</td><td>$ens[1]</td>
            <td>|</td><td>$ens[2]</td>
            <td>|</td><td>$ens[3]</td>
            <td>|</td><td>$ens[4]</td>
            <td>|</td>
            <td><a href='edit_in_admin.php?id=$id'>Edit</td>
            <td><a href='delete_in_admin.php?id=$id'>Delete</a></td><td>|</td>
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
?>


            </table>
            <br><br><br>
            <button type="submit" name="submit" class="w3-button w3-green w3-hover-light-blue">Assigner enseignant et formation</button>
        </fieldset>
    </form>
    
</body>
</html>