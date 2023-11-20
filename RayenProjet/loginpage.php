<?php 
include("searchbar.html");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>E-Learning</title>
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
.field{height: 50px;
}
#p1{text-align: center;}
      
    </style>
</head>
<body>
    <form>
<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
    
}

?>
    </form>





    <form name="f1" action="trait_login.php" method="post">
        <fieldset>
        <legend id="leg1">Login: </legend>
            <table>
                <tr>
                    <td><label for="uname">Username :</label></td>
                    <td><input class="field" type="text" name="uname" id="uname" size="30" ></td>
                </tr>
                <tr>
                    <td><label for="pwd">Password :</label></td>
                    <td><input class="field" type="password" name="pwd" id="pwd" size="30"></td>
                </tr>
               
            </table>
            <tr>
                    <td><p><button type="submit" name="submit" class="w3-button w3-green w3-hover-light-blue">Log in</button></p></td>
                </tr>
                <tr>
                    <td><p><button class="w3-button w3-green w3-hover-light-blue">Cancel</button></p></td>
                </tr>
                <p id="p1">Or</p>
                <tr>
                    <td><p><button  class="w3-button w3-green w3-hover-light-blue" onclick="f1.action='signinpage.php'">Sign in</button></p></td>
                </tr>
        </fieldset>
    
    </form>
    
  
   
    
   

</body>
</html>
