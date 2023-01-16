<?php

    final class Recherche{

        function __construct(){}

        function rechercheParNom($_S_nom):Recette // renvoyez plutot un tableau de recette car si pls recette ont le meme nom probleme
        {
           $O_conn = new ConnectionDatabase();
           $O_conn = $O_conn->getConnection();
           $_requete = "select * FROM Recette WHERE nom LIKE %$_S_nom%";
           $O_statement = $O_conn->prepare($_requete);
           $O_statement->execute();
           $O_statement->setFetchMode(PDO::FETCH_OBJ); // FETCH_ASSOC
           return $O_statement->fetch(); // objet recette; // probleme si plusieur recette contiennent le meme nom
        }
    }
    