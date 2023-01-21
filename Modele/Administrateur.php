<?php

class Administrateur extends Utilisateur
{
    /*public function ajouterRecette($recette){
        $requete = 'insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prepa,cout,difficulte) values ()';
    }*/


    public function __construct()
    {
    }

    public function ajouterRecette($NomRecette,$noteMoyenne,$photo,$tempsDePreparation,$descriptionPrepa,$cout,$difficulte){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prépa,cout,difficulte) values ('".$NomRecette."','".$noteMoyenne."','".$NomRecette."','".$photo."','".$tempsDePreparation."','".$descriptionPrepa."','".$cout."','".$difficulte."')";
        $O_statement = $connection->prepare($requete);
        $O_statement->execute();
    }

    public function modifierRecette($NomRecette,$noteMoyenne,$photo,$tempDePreparation,$descriptionPrepa,$cout,$difficulte){

    }


    public function supprimerRecette($nomRecette){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "DELETE FROM Recette where Nom_recette=".$nomRecette."\'";
        $O_statement = $connection->prepare($requete);
        $O_statement->execute();
    }

    public function supprimerUtilisateur($id){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "DELETE FROM Utilisateur where identifiant=".$id."\'";
        $O_statement = $connection->prepare($requete);
        $O_statement->execute();

    }



}