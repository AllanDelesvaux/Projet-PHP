<?php

final class ControleurAjoutRecette
{
    public function defautAction()
    {
        Vue::montrer('VuePage/pageAjoutRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        $administrateur = new Administrateur('KingTitou','jesuisleboss123456');
        $administrateur->ajouterRecette($_POST);
        
    }
}    
