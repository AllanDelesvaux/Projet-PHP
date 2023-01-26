<?php

final class ControleurPageConnexion
{
    public function defautAction()
    {
        Vue::montrer('VuePage/pageConnexion');
    }

    public function connexionAction(array $A_parametres = null, array $A_postParams = null)
    {
        $login = $_POST['email'];
        $password = $_POST['password'];
        $utilisateur = new Utilisateur();
        $utilisateur->connect($login,$password);
        $errorMsg="Identifiant ou mot de passe inccorect";
        if (!(is_null($utilisateur->getId()))){
            if (!isset($_SESSION['suid'])) {
                $_SESSION['suid'] = $utilisateur;
                $_SESSION['isAdmin'] = false;
            }
            $utilisateur->setDerniereCo(date("Y-m-d"));
            header('Location: /');
            exit();
        } else {
            $admin = new Administrateur();
            $admin->connect($login, $password);
            echo $admin->getId();
            if (!(is_null($admin->getId()))) {
                if (!isset($_SESSION['suid'])){
                    $_SESSION['suid'] = $admin;
                    $_SESSION['isAdmin'] = true;
                }
                $admin->setDerniereCo(date("Y-m-d"));
                header('Location: /');
                exit();
            }            
            session_unset();
            Vue::montrer('VuePage/pageConnexion', array('error' => $errorMsg));
        }
    }
}    
?>