<?php

class ControleurPageRecette
{

    public function afficherNomRecetteAction(array $A_parametres = null, array $A_postParams = null){
        $nom_recette= $_POST['search']; // changer l'id de l'attribut en id utilisateur
        echo "hello";
        echo $nom_recette;
    }
    public function afficherPhotoRecetteAction(){


    }

    public function afficherNoteMoyenneAction(){

    }

    public function afficherIngredientAction(){

    }

    public function afficherListeUstensilesAction(){

    }

    public function afficherTempsDePreparationAction(){

    }

    public function afficherDifficulteAction(){

    }

    public function afficherCoutAction(){

    }

    public function afficherDescriptionPreparationAction(){

    }

    /*----optionelle----*/


    public function afficherTypeDeCuissonAction(){

    }

    public function afficherListeParticularitesAction(){

    }

    public function afficherAppreciationAction(){

    }

}