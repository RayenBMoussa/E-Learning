<?php 
include("searchbar.html");

?>
<?php
	include('connexionbase.php');
	$id=$_GET['id'];
    $sql="SELECT * FROM enseignant WHERE id_ens='$id'";
	$res=mysqli_query($cnx,$sql);
	$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
.field{height: 50px;
}
    </style>
</head>
<body>
    <form action="update_admin.php?id=<?php echo $id; ?>" method="post">
        <fieldset>
            <table>
                <tr>
                   <td><label for="profnom">Nom Enseignant :</label></td> 
                   <td><input type="text" class="field" name="profnom" value="<?php echo $row['firstname']; ?>" ></td>
                </tr>
                <tr>
                    <td><label for="profpre">Prenom Enseignant :</label></td> 
                    <td><input type="text" class="field" name="profpre" value="<?php echo $row['lastname']; ?>"></td>
                 </tr>
                 <tr>
                    <td>
                        <label for="f">Formation :</label></td>
                       <td> 
                        <select name="f" id="f" value="<?php echo $row['formation']; ?>">
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="DevOps">DevOps</option>
                            <option value=Data_Science>Data Science</option>

                        </select>
                    </td>
                 </tr>
                 <tr>
                    <td><label for="nbre">Nombre de places restante :</label></td> 
                    <td><input type="text" class="field" name="nbre" value="<?php echo $row['Nombre_de_place']; ?>"></td>
                 </tr>
            </table>
            <br>
            <button type="submit" name="submit" class="w3-button w3-green w3-hover-light-blue">Confirm</button>
        </fieldset>
    </form>
</body>
</html>