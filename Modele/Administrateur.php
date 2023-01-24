<?php

class Administrateur extends Utilisateur
{
    /*public function ajouterRecette($recette){
        $requete = 'insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prepa,cout,difficulte) values ()';
    }*/


    public function __construct($identifiant,$mot_de_passe)
    {
        $result = array();
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT * from Utilisateur where identifiant = '" .$identifiant."' AND mot_de_passe = '". $mot_de_passe . "'";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        $table = $result[0];
        $this->_I_id = $table->identifiant;
        $this->_S_mot_de_passe = $table->mot_de_passe;
        $this->_B_photo = $table->photo;
        $this->_S_nom_affichage = $table->nom;
        $this->_D_date_premiere_connexion = $table->date_premiere_connexion;
        $this->_D_date_derniere_connexion = $table->date_derniere_connexion;   
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