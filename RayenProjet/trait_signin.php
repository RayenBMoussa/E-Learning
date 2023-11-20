<?php

if (isset($_POST['submit']))
{
    
        include("connexionbase.php");
        echo "cnx successful";
        if (!empty($_POST['ufname'] && $_POST['ulname'] && $_POST['mail'] && $_POST['pwd1'] && $_POST['role']))
        {
            $fname=$_POST['ufname'];
            $lname=$_POST['ulname'];
            $mail=$_POST['mail'];
            $pwd1=$_POST['pwd1'];
            $rl=$_POST['role'];
            $sql="INSERT INTO users (firstname,lastname,email,password,role) VALUES ('$fname','$lname','$mail','$pwd1','$rl')";
            try{
                mysqli_query($cnx,$sql);
                $message="Account registred, you can login now";
              
                header("Location:loginpage.php");
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