<?php
include("searchbar.html");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset='utf-8'>
    <title>E-learning</title>
    <style>
        table{border-spacing: 10px;}
    form{background-color: rgb(236, 216, 190);
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
text-align: left;}
.w3-button{text-align: center;
width: 100%;
margin: auto;
padding-left: 10px;
padding-right: 10px;}
        .field{height: 50px;
}
    </style>
</head>
<body>
    <form action="trait_signin.php" method="post">
        <fieldset>
        <legend>Sign in: </legend>
            <table>
                <tr>
                    <td><label for="ufname">First Name :</label></td>
                    <td><input class="field" type="text" name="ufname" id="ufname"size="30" ></td>
                </tr>
                <tr>
                    <td><label for="ulname">Last Name :</label></td>
                    <td><input class="field" type="text" name="ulname" id="ulname"size="30" ></td>
                </tr>
                <tr>
                    <td><label for="role">Rôle:</label></td>
                    <td>
                        <select name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="mail">Email :</label></td>
                    <td><input class="field" type="email" name="mail" id="mail"size="30" ></td>
                </tr>
                <tr>
                    <td><label for="pwd1">Password :</label></td>
                    <td><input class="field" type="password" name="pwd1" id="pwd1"size="30" ></td>
                </tr>
                
            </table>
            <tr>
                    <td><p><button type="submit" name="submit"  class="w3-button w3-green w3-hover-light-blue">Sign in</button></p></td>
                </tr>
                <tr>
                    <td><p><button type="reset" class="w3-button w3-green w3-hover-light-blue">Cancel</button></p></td>
                </tr>
        </fieldset>
    </form>
</body>
</html>