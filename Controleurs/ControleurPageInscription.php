<?php

final class ControleurPageInscription
{
    public function defautAction()
    {
        Vue::montrer('Vue/pageInscription');
    }

    public function testformAction(array $A_parametres = null, array $A_postParams = null)
    {
        $login = $_POST['email'];
        $password = $_POST['password'];

        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT identifiant,mot_de_passe from Utilisateur ";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        if (!(empty($result))) {
            echo 'Erreur de requete <br>';
            echo 'Requete: ' . $_requete;
            exit();
        } else {
            for ($i = 0; $i < sizeof($result); ++$i) {


                if ($result[$i]['identifiant'] === $login && $result[$i]['mdp'] === $password) {
                    $_SESSION['suid'] = session_id();

                    //redirection vers page connecté
                    exit();
                }

            }
            $_SESSION['error'] = 1;
            //header(' Location: /Vues/standard/composant/formulaire.php');
        }
    }
}    
?>