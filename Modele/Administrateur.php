<?php

class Administrateur extends Utilisateur
{



    /*public function ajouterRecette($recette){
        $_requete = 'insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prepa,cout,difficulte) values ()'
    }*/

    public function ajouterRecette($NomRecette,$noteMoyenne,$photo,$tempDePreparation,$descriptionPrepa,$cout,$difficulte){
        $_requete = "insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prépa,cout,difficulte) values (:NomRecette,:noteMoyenne,:NomRecette,:photo,:tempDePreparation,:descriptionPrepa,:cout,:difficulte)";
        /*$O_statement = $O_connexion->prepare($_requete);*/

        /*foreach ($)*/
        /*$O_statement->bindValue(':NomRecette', $NomRecette);
        $O_statement->bindValue(':NomRecette', $NomRecette);
        $O_statement->bindValue(':NomRecette', $NomRecette);
        $O_statement->bindValue(':NomRecette', $NomRecette);*/

    }


    /*public function modifierRecette($NomRecette,$noteMoyenne,$photo,$tempDePreparation,$descriptionPrepa,$cout,$difficulte){


    }*/


    /*public function supprimerRecette($id){

    }*/

    /*public function supprimerUtilisateur($id){

    }*/



}