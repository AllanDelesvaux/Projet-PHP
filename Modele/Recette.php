<?php

    final class Recette{

        private $_A_list_ingredients;
        private $_A_list_ustensiles;
        private $_A_particularite;
        private $_A_appreciations;
        private $_B_photographie;
        private $_D_temps_de_preparation;
        private $_E_difficulte;
        private $_E_cout;
        private $_S_type_de_cuisson;
        private $_F_note_moyenne;
        private $_S_nom;


        function __construct($_A_list_ingredients, $_A_list_ustensiles, $_A_particularite, $_A_appreciations, $_B_photographie, $_D_temps_de_preparation, $_E_difficulte, $_E_cout, $_S_type_de_cuisson, $_F_note_moyenne, $_S_nom){

            $this->_A_list_ingredients = $_A_list_ingredients;
            $this->_A_list_ustensiles = $_A_list_ustensiles;
            $this->_A_particularite = $_A_particularite;
            $this->_A_appreciations = $_A_appreciations;
            $this->_B_photographie = $_B_photographie;
            $this->_D_temps_de_preparation = $_D_temps_de_preparation;
            $this->_E_difficulte = $_E_difficulte;
            $this->_E_cout = $_E_cout;
            $this->_S_type_de_cuisson = $_S_type_de_cuisson;
            $this->_F_note_moyenne = $_F_note_moyenne;
            $this->_S_nom = $_S_nom;

        }

        public function photoRecette($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT photo FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'photoRecetteReussi' ;
            }
        }

        public function noteMoyenne($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT noteMoyenne FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'noteMoyenne reussi';
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

        public function tempDePreparation($nomRecette){
            $connection = new ConnectionDatabase();
            $connection = $connection->getConnection();
            $requete = "SELECT temps_de_preparation FROM RECETTE WHERE Nom_recette=?";
            $O_statement = $connection->prepare($requete);
            if($O_statement->execute([$nomRecette])){
                echo 'temp de prepa reussi' ;
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









    }



