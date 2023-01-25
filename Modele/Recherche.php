<?php

    final class Recherche{

        function __construct(){}

        function rechercheParNom($_S_nom):array // renvoyez plutot un tableau de recette car si pls recette ont le meme nom probleme
        {
           $O_conn = new ConnectionDatabase();
           $O_conn = $O_conn->getConnection();
           $_requete = "select * FROM Recette WHERE Nom_recette LIKE '%$_S_nom%'";
           $O_statement = $O_conn->prepare($_requete);
           $O_statement->execute();
           return $O_statement->fetchAll(PDO::FETCH_OBJ); // objet recette; // probleme si plusieurs recettes contiennent le meme nom
        }
    }    
?> 