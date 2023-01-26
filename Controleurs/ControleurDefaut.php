<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('VuePage/principaleHaut');
        $this->afficherImageAction();

        //Vue::montrer('VuePage/recette', array(''=>''));
        //Vue::montrer('VuePage/recette', array(''=>''));
    }

    public function afficherImageAction(){
        $recette = new Recette();
        $recette->afficherRecetteAleatoire();
        foreach ($recette->afficherRecetteAleatoire() as $element){
           Vue::montrer('VuePage/principale', array('photo'=> $element->photo,'nomRecetteAleatoire' => $element->Nom_recette,'description' => $element->description_prépa ));
        }

    }

}