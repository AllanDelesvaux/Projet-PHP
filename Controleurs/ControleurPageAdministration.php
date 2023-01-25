<?php

class ControleurPageAdministration
{


    public function supprimerUtilisateurAction(array $A_parametres = null, array $A_postParams = null){
        $identifiant = $_POST['search']; // changer l'id de l'attribut en id utilisateur
        $administrateur = new Administrateur('KingTitou','jesuisleboss123456');
        $administrateur->supprimerUtilisateur($identifiant);
        Vue::montrer('VuePage/pageAdministration');
    }

    /*public function supprimerRecetteAction(array $A_parametres = null, array $A_postParams = null){
        $identifiant = $_POST['search'];  // changer l'id de l'attribut en id recette
        $administrateur = new Administrateur('KingTitou','jesuisleboss123456');
        $administrateur->supprimerRecette($identifiant);
        Vue::montrer('VuePage/pageAdministration');
    }*/

    public function supprimerAppreciationAction(array $A_parametres = null, array $A_postParams = null){
        $identifiant = $_POST['search'];  // changer l'id de l'attribut en id appreciation
        $administrateur = new Administrateur('KingTitou','jesuisleboss123456');
        $administrateur->supprimerAppreciationParId($identifiant);
        Vue::montrer('VuePage/pageAdministration');
    }

}