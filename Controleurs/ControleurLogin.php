<?php
    require_once 'Noyau/ChargementAuto.php';


    final class ControleurLogin extends Controleur
    {
        public function defautAction()
        {
            //$O_helloworld =  new Helloworld();
            //Vue::montrer('helloworld/voir', array('helloworld' =>  $O_helloworld->donneMessage()));

            $login =$_POST['email'];
            $password =$_POST['password'];

            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT identifiant,mot_de_passe from Utilisateur ";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $result = $O_statement->fetchAll(PDO::FETCH_OBJ );
        echo $result;
            if(!(empty($result)))
            {
                echo 'Erreur de requete <br>';
                echo 'Requete: ' . $_requete;
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
        
        }
    
        public function testformAction(Array $A_parametres = null, Array $A_postParams = null)
        {
    
            Vue::montrer('helloworld/testform', array('formData' =>  $A_postParams));
    
        }
    
    }

    

 ?>