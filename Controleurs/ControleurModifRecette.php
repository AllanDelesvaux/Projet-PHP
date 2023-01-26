<?php

final class ControleurModifRecette
{
    public function defautAction()
    {
        Vue::montrer('VuePage/pageModifRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        
        }
}    