<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('/VuePage/principaleHaut');
        Vue::montrer('/VuePage/principale', array('section'=>'haut'));
        $this->afficherImageAction();
        Vue::montrer('/VuePage/principale', array('section'=>'bas'));
    }

    public function afficherImageAction(){
        $recette = new Recette();
        $recette->afficherRecetteAleatoire();
        foreach ($recette->afficherRecetteAleatoire() as $element){
           Vue::montrer('Composant/principaleRecette', array('photo'=> $element->photo,'nomRecetteAleatoire' => $element->Nom_recette,'description' => $element->description_prépa ));
        }
    }
}