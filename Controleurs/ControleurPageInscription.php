<?php

final class ControleurPageInscription
{
    public function defautAction()
    {
        Vue::montrer('VuePage/pageInscription');
    }

    public function inscriptionAction(array $A_parametres = null, array $A_postParams = null)
    {
        $_username = $_POST['Nom'];
        $_login = $_POST['email'];
        $_password = $_POST['password'];
        $_password_confirm = $_POST['password-confirm'];

        if($_password != $_password_confirm){
            $errorMsg="Mot de passe et confirmation de mot de passe non-identique";
            session_unset();
            Vue::montrer('VuePage/pageInscription', array('error' => $errorMsg));
        }
        else{
            $user = new Utilisateur();
            if ($user->isExisting($_login)){
                $errorMsg="Un compte existe déjà avec cet e-mail";
                session_unset();
                Vue::montrer('VuePage/pageInscription', array('error' => $errorMsg));
            }
            else{
                $user->setId($_login);
                echo 'toto';
                $user->setPremiereCo();
                $user->insertBDD("identifiant , date_premiere_connexion" , "'".$_login."' , '".$user->getPremiereCo()."'");
                //'identifiant	, mot_de_passe , photo , nom , date_premiere_connexion , date_derniere_connexion'
                $user->setMdp($_password);
                $user->setNom($_username);
                $user->setDerniereCo(date("Y-m-d"));
                $_SESSION['suid'] = $user;
                $_SESSION['isAdmin'] = false;
                header('Location: /');
                exit();
            }
        }
    }
}    
?>