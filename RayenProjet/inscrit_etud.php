<?php


if (isset($_POST['submit']))
{
    
        include("connexionbase.php");
        echo "cnx successful";
        if (!empty($_POST['nometu'] && $_POST['pre_etu'] && $_POST['f'] && $_POST['nomprof'] && $_POST['preprof'] ))
        {
            $nom=$_POST['nometu'];
            $prenom=$_POST['pre_etu'];
            $f=$_POST['f'];
            $nomp=$_POST['nomprof'];
            $prenomp=$_POST['preprof'];
            $i=19;
            $sql="INSERT INTO etudiant (Nom,Prenom,formation,nomprof,prenomprof) VALUES ('$nom','$prenom','$f','$nomp','$prenomp')";
            
            
            
            try{
                mysqli_query($cnx,$sql);
                $msg=$nom.$prenom;
                header("Location:etud2.php?msg=$msg");
                
              
                
                
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