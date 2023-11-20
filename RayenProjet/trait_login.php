<?php
if(isset($_POST['submit']))
{   
    include("connexionbase.php");
    if(empty($_POST['uname'] && $_POST['pwd']))
    {
        echo "Données vides!!";
    } 
    else
    {
        $name=$_POST['uname'];
        $pw=$_POST['pwd'];
        $sql="SELECT firstname,password,role FROM users WHERE firstname='$name' AND password='$pw'";
        $result=mysqli_query($cnx,$sql);
        if ($result)
        {
            $rows=mysqli_num_rows($result);
            if ($rows>0)
            {
                $log=mysqli_fetch_assoc($result);
                if ($log['role']=="admin")
                {
                    header("location:admin.php");
                }
                else if ($log['role']=="enseignant")
                {
                    header("location:enseignant.php");
                }
                else if ($log['role']=="etudiant")
                {
                    header("location:etudiant.php");
                }
                echo "Hello". $log['firstname']." u logged in";
               
            }
            else
            {
                $msg="user not found";
                header("Location:loginpage.php?msg=$msg");
            }
            mysqli_close($cnx);
        }
        else
        {
            echo "Erreur rqyt: ".mysqli_error($cnx);
        }

    }
}
?>