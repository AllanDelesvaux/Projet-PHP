<?php

    final class Ustensile{

        private $_S_nom;

        private $_I_id;

        function __construct($identifiant){

            $ustensile = array();
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT * from Ustensile where Identifiant = '" .$identifiant."'";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $ustensile = $O_statement->fetchAll(PDO::FETCH_OBJ);
            $util = $ustensile[0];
            $this-> _S_nom = $util->nom_ustensile;
            $this-> _I_id = $util->Identifiant;
        }

    }

    