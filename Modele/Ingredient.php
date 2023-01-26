<?php

    final class Ingredient{

        private $_S_nom;

        private $_I_id;

        function __construct($identifiant){

            $ingredient = array();
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "SELECT * from Ingredient where Identifiant = '" .$identifiant."'";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $ingredient = $O_statement->fetchAll(PDO::FETCH_OBJ);
            $ingr = $ingredient[0];
            $this-> _I_id = $ingr->Identifiant;
            $this-> _S_nom = $ingr->nom_ingredient;

        }

    }

    