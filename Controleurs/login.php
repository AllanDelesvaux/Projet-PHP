<?php
    $_SESSION['error'] = 1;
    $action =$_POST['action'];
    $login =$_POST['login'];
    $password =$_POST['password'];

   // Connexion avec la bd

    $query = "SELECT identifiant,mot_de_passe from Utilisateur ";
    $dbResult;

    if(!($dbResult = mysqli_query($dbLink,$query)))
    {
        echo 'Erreur de requete <br>';
        echo 'Erreur : ' . mysqli_error($dbLink);
        echo 'Requete: ' . $query;
        exit();
    }
    else{
        while($dbRow = mysqli_fetch_assoc($dbResult))
        {
            if($dbRow['identifiant']===$login && $dbRow['mdp']===$password)
            {
                $_SESSION['error'] = 0;
                $_SESSION['suid'] = session_id();
                
                //redirection vers page connecté
                exit();
            }    

        }
        //Affichage d'un msg d'erreur de connexion
    }

 ?>