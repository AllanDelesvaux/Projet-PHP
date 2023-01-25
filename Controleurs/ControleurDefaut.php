<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('Composant/principaleHaut');
        Vue::montrer('Composant/principale');
        Vue::montrer('VuePage/recette');
    }

}