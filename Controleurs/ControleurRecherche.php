<?php

class ControleurRecherche
{
    public function defautAction()
    {
        $nom_recette= $_POST['search']; // changer l'id de l'attribut en id utilisateur
        $recherche = new Recherche();
        $resultatsRecherche = $recherche->rechercheParNom($nom_recette);
        Vue::montrer('/VuePage/resultatRecherche', array('resultats'=>$resultatsRecherche));
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