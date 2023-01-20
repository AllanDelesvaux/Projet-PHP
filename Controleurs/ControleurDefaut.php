<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('VuePage/recette');
    }

}