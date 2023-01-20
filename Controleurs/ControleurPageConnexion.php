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
        
        
        if (!(is_null($user->getId()))){
            session_start();
            $_SESSION['suid'] = session_id();
            header('Location: /');
            exit();
        } else {
            Vue::montrer('VuePage/pageConnexion');
        }
    }
}    
?>