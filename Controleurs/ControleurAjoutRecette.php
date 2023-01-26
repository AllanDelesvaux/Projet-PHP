<?php

final class ControleurAjoutRecette
{
    public function defautAction()
    {
        Vue::montrer('/VuePage/pageAjoutRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        $recette = $_POST;
        $admin = new Administrateur();
        $admin->ajouterRecette($recette);
        
    }
}    
