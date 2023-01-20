<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('Vue/recette');
    }

}