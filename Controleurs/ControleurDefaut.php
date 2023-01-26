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

    public function afficherImageAction(){
        $recette = new Recette();
        $recette->afficherRecetteAleatoire();
        foreach ($recette->afficherRecetteAleatoire() as $element){
           Vue::montrer('Composant/epingleRecette', array('photo' =>$element->photo, 'nomRecetteAleatoire' => $element->Nom_recette, 'note' =>$element->note_moyenne, 'tempsPrepa' =>$element->temps_de_preparation ));
        }
    }
}