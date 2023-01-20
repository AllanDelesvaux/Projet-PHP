<?php

     class Utilisateur{

        private $_I_id;
        private $_S_mot_de_passe;
        private $_B_photo;
        private $_S_nom_affichage;
        private $_D_date_premiere_connexion;
        private $_D_date_derniere_connexion;

        function __construct($_I_id, $_S_mot_de_passe, $_B_photo, $_S_nom_affichage, $_D_date_premiere_connexion, $_D_date_derniere_connexion){

            $this->_I_id = $_I_id;
            $this->_S_mot_de_passe = $_S_mot_de_passe;
            $this->_B_photo = $_B_photo;
            $this->_S_nom_affichage = $_S_nom_affichage;
            $this->_D_date_premiere_connexion = $_D_date_premiere_connexion;
            $this->_D_date_derniere_connexion = $_D_date_derniere_connexion;
        }

        function getData($params){
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT";
            foreach($params as $param){
                $_requete .=  $param.', ';
            } 
            $_requete .="from Utilisateur ";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            return $O_statement->fetchAll(PDO::FETCH_OBJ);
        }

    }
