<?php

    final class Recette{

        private $_A_list_ingredients;
        private $_A_list_ustensiles;
        private $_A_appreciations;
        private $_B_photographie;
        private $_D_temps_de_preparation;
        private $_E_difficulte;
        private $_E_cout;
        private $_S_type_de_cuisson;
        private $_F_note_moyenne;
        private $_S_nom;


        function __construct($nomRecette){


            $result = array();
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT * from Recette where Nom_recette = '" .$nomRecette."'";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
            $donnee = $result[0];
            $this->_S_nom = $donnee->Nom_recette;
            $this->_F_note_moyenne = $donnee->note_moyenne;
            $this->_B_photographie = $donnee->photo;
            $this->_D_temps_de_preparation = $donnee->temp_de_preparation;
            $this->_S_type_de_cuisson = $donnee->description_prepa;
            $this->_E_cout = $donnee->cout;
            $this->_E_difficulte = $donnee->difficulte;
            $this->_A_list_ingredients = new Ingredient($donnee->ingredients);
            $this->_A_list_ustensiles = new Ustensile($donnee->ustensiles);

            $appre = array();
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT * from Appreciation where Nom_recette = '" .$donnee->Nom_recette."'";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $appre = $O_statement->fetchAll(PDO::FETCH_OBJ);
            $this->_A_appreciations = array();
            foreach($appre as $unique){
                $tmp = new Appreciation($unique->Id_identifiant, $unique->note, $unique->date_appreciation, $unique->commentaire);
                array_push($this->_A_appreciations, $tmp);
            }

        }


        public function photoRecette($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT photo FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'photoRecetteReussie' ;
            }
        }

        public function noteMoyenne($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT noteMoyenne FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'noteMoyenne reussie';
            }
        }


        /*public function ingredient($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT noteMoyenne FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo '<p>  recette supprimé </p>' ;
            }
        }*/

        /*public function ustensiles($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT noteMoyenne FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo '<p>  recette supprimé </p>' ;
            }
        }*/

        public function tempsDePreparation($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT temps_de_preparation FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'temps de preparation reussi' ;
            }
        }


        public function difficulte($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT difficulte FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'recuperation difficulté reussie' ;
            }
        }


        public function cout($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT cout FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'cout reussi' ;
            }
        }

        public function description($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT description_prépa FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'description' ;
            }
        }

        public function afficherRecetteAleatoire(){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT * FROM `Recette` ORDER BY rand() LIMIT 3 ";
            $O_statement = $connection->prepare($requete);
            $O_statement->execute();
            return $O_statement->fetchAll(PDO::FETCH_OBJ);

        }

        /*public function afficherNomRecetteAleatoire(){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT *  FROM `Recette` ORDER BY rand() LIMIT 1 ";
            $O_statement = $connection->prepare($requete);
            $O_statement->execute();
            return $O_statement->fetchAll(PDO::FETCH_OBJ);

        }*/


    }



