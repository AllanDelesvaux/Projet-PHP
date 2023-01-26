<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('VuePage/principaleHaut');
        Vue::montrer('VuePage/principale', array('section'=>'haut'));
        $this->afficherImageAction();
        Vue::montrer('VuePage/principale', array('section'=>'bas'));
        Vue::montrer('VuePage/pageCatégorie');
    }

    public function afficherImageAction(array $A_parametres = null, array $A_postParams = null){
        $recette = new Recette();
        //$recette->afficherRecetteAleatoire();
        foreach ($recette->afficherRecetteAleatoire() as $element){
           Vue::montrer('Composant/epingleRecette', array('photo' =>$element->photo, 'nomRecetteAleatoire' => $element->Nom_recette, 'note' =>$element->note_moyenne, 'tempsPrepa' =>$element->temps_de_preparation ));
        }
    }

    public function afficherRecetteCliqueAction(array $A_parametres = null, array $A_postParams = null){
        $nom = $_POST["nomRecette"];
        $recette = new Recette();
/*        $recette->afficherRecetteParNom($nom);*/
        foreach ($recette->afficherRecetteParNom($nom) as $element){
            Vue::montrer('Composant/principaleRecette', array('photo'=> $element->photo,'nomRecetteAleatoire' => $element->Nom_recette,'description' => $element->description_prépa ));
        }
    }
}
