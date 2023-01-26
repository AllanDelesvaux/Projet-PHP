<?php

final class ControleurModifRecette
{
    public function defautAction()
    {
        Vue::montrer('VuePage/pageModifRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        $nomRecette = $_POST['nomRecette'];
        $temps = $_POST['temps'];
        $cout = $_POST['cout'];
        $difficulte = $_POST['difficulte'];
        $description = $_POST['description'];
    }
}    