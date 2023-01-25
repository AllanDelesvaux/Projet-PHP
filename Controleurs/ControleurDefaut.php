<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('VuePage/principaleHaut');
        Vue::montrer('VuePage/principale');
        //Vue::montrer('VuePage/recette', array(''=>''));
        //Vue::montrer('VuePage/recette', array(''=>''));
    }


    public function afficherImageAction(){
        $recette = new Recette();
        $recette->afficherNomRecetteAleatoire();
        Vue::montrer('VuePage/principale');
    }

}