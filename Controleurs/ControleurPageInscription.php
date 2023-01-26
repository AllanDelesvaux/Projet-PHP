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
                if(!$_FILES['photo']['name'] == "")
                {
                    $target_file = '/assets/'.time().'_'.basename($_FILES['photo']["name"]);
                    
                    $uploadOk = 1;
                    
                    // Verifie si l'image est bien une image et non un fake
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["photo"]["tmp_name"]);
                        if($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $errorMsg="Le fichier n'est pas une image";
                            $uploadOk = 0;
                        }
                    }
                    
                    //Verifie si la taille du fichier n'est pas trop grande
                    if ($_FILES["photo"]["size"] > 200000) {
                        $errorMsg="Fichier trop volumineux";
                        $uploadOk = 0;
                    }
                    
                    //Check if file already exists
                    if (file_exists(SITE_ROOT.$target_file)) {
                        $errorMsg="Choississez un autre nom pour votre photo car elle existe déja";
                        $uploadOk = 0;
                    }   
                    
                    if ($uploadOk == 0) {
                        Vue::montrer('VuePage/pageInscription', array('error' => $errorMsg));
                        exit();
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["photo"]["tmp_name"], SITE_ROOT.$target_file)){
                            $user->setPhoto($target_file);
                        } else {
                            $errorMsg="Désolé une erreur s'est produite avec votre fichier";
                            session_unset();
                            Vue::montrer('pageInscription', array('error' => $errorMsg));
                        }
                    }
                }
                else{
                    $user->setPhoto('/assets/profil.png');
                }

                $user->getPhoto();
                $user->setId($_login);
                $user->setPremiereCo();
                $user->insertBDD("identifiant , photo, date_premiere_connexion" , "'".$user->getId()."' , '".$user->getPhoto()."' , '".$user->getPremiereCo()."'");
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