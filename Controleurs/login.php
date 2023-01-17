<?php
    include "../Noyau/ConnectionDatabase.php";

    $login =$_POST['email'];
    $password =$_POST['password'];

    $O_conn = new ConnectionDatabase();
    $O_conn = $O_conn->getConnection();
    $_requete = "SELECT identifiant,mot_de_passe from Utilisateur ";
    $O_statement = $O_conn->prepare($_requete);
    $O_statement->execute();
    $O_statement->setFetchMode(PDO::FETCH_ASSOC); // FETCH_ASSOC
    $result = $O_statement->fetch();

    if(!(empty($result)))
    {
        echo 'Erreur de requete <br>';
        echo 'Requete: ' . $requete;
        exit();
    }
    else{
    for ($i = 0; $i < sizeof($result); ++$i)
        {
            if($result[$i]['identifiant']===$login && $result[$i]['mdp']===$password)
            {
                $_SESSION['suid'] = session_id();
                
                //redirection vers page connecté
                exit();
            }    

        }
        $_SESSION['error'] = 1;
        var_dump($_SESSION['error']);
        //header(' Location: /Vues/standard/composant/formulaire.php');
    }

 ?>