<?php

class ControleurAdministration
{


    public function supprimerUtilisateurAction(array $A_parametres = null, array $A_postParams = null){
        $identifiant = $_POST['search'];
        $administrateur = new Administrateur();
        $administrateur->supprimerUtilisateur($identifiant);
    }

}