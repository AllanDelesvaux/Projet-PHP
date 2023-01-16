<?php

final class ControleurRecherche
{
    public function defautAction($_S_value)
    {
        $recherche =  new Recherche();
        Vue::montrer('standard/resultatRecherche', array('recette' =>  $recherche->rechercheParNom($_S_value)));
        // resultat sera une page avec des liens qui renverront vers une recette

    }
}