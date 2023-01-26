<?php

class ControleurPageRecette
{
    public function defautAction()
    {
        Vue::montrer('/VuePage/recette');
    }

    public function afficherNomRecetteAction(array $A_parametres = null, array $A_postParams = null){
        $nom_recette= $_POST['search']; // changer l'id de l'attribut en id utilisateur
        $recherche = new Recherche();
        $resultatsRecherche = $recherche->rechercheParNom($nom_recette);

        if((empty($resultatsRecherche))){
            Vue::montrer('/VuePage/vide');
        }else{
            for ($i = 0; $i < sizeof($resultatsRecherche); ++$i) {
                Vue::montrer('/Composant/etiquette', array('photo' => $resultatsRecherche[$i]->photo, 'nomRecetteAleatoire' => $resultatsRecherche[$i]->Nom_recette, 'note' => $resultatsRecherche[$i]->note_moyenne, 'tempsPrepa' => $resultatsRecherche[$i]->temps_de_preparation));
            }
        }
        //echo $nom_recette;
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