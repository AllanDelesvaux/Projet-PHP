<?php

final class ControleurLogin
{
    public function defautAction()
    {
        Vue::montrer('standard/composant/login');
    }

    public function testformAction(array $A_parametres = null, array $A_postParams = null)
    {
        $login = $_POST['email'];
        $password = $_POST['password'];
        $user = new Utilisateur($login,$password);

        echo $user->getNom();

        /*if (!(empty($result))) {
            echo 'Erreur de requete <br>';
            echo 'Requete: ';
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
        */
    }
}
        
 ?>