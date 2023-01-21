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
        $user = new Utilisateur($login,$password);
        $errorMsg="Identifiant ou mot de passe inccorect";
        if (!(is_null($user->getId()))){
            if (!isset($_SESSION['suid'])) 
                $_SESSION['suid'] = session_id();
            header('Location: /');
            exit();
        } else {
            session_unset();
            Vue::montrer('VuePage/pageConnexion', array('error' => $errorMsg));
        }
    }
}    
?>