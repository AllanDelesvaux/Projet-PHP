<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('VuePage/principaleHaut');
        Vue::montrer('VuePage/principale');
        Vue::montrer('VuePage/recette');
        //Vue::montrer('VuePage/recette', array(''=>''));
        //Vue::montrer('VuePage/recette', array(''=>''));
    }

}