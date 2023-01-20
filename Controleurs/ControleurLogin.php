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
        echo $user->getId();

        if (!(is_null($user->getId()))){
            Vue::montrer('index');
        } else {
            session_start();
            $_SESSION['error'] = 1;
            //Vue::montrer('standard/composant/login');
        }
    }
}
        
 ?>