<?php
include("searchbar.html");
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
    <form action="prof_classe.php" method="post">
    <fieldset>
            <table>
                <tr>
                   <td><label for="pnom">Donner votre nom :</label></td> 
                   <td><input type="text" class="field" name="pnom"></td>
                </tr>
                <tr>
                    <td><label for="lnom">Donner votre prenom :</label></td> 
                    <td><input type="text" class="field" name="lnom"></td>
                 </tr>
            </table>
        <button class="w3-button w3-green w3-hover-light-blue"  type="submit" name="submit">Consulter Votre Classe
            
        </button>
    </fieldset>
    </form>
</body>
</html>