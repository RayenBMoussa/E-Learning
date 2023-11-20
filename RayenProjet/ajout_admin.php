<?php

if (isset($_POST['submit']))
{
    
        include("connexionbase.php");
        echo "cnx successful";
        if (!empty($_POST['profnom'] && $_POST['profpre'] && $_POST['f'] ))
        {
            $nom=$_POST['profnom'];
            $prenom=$_POST['profpre'];
            $f=$_POST['f'];
            $sql="INSERT INTO enseignant (firstname,lastname,formation) VALUES ('$nom','$prenom','$f')";
            try{
                mysqli_query($cnx,$sql);
               # $message="Account registred, you can login now";
              
                header("Location:admin.php");
            }
            catch(mysqli_sql_exception)
            {
                echo "could not register user";
                

            }

        }
        else
        {
            echo "donnees vides,Verifier!";
        }
        mysqli_close($cnx);
    
}

?>