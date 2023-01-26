<?php

final class ControleurModifRecette
{
    public function defautAction()
    {
        Vue::montrer('/VuePage/pageModifRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        $nomRecette = (!empty($_POST['nomRecette'])) ?$_POST['nomRecette'] : null;
        $temps = (!empty($_POST['temps'])) ?$_POST['temps'] : null;
        $cout = (!empty($_POST['cout'])) ?$_POST['cout'] : null;
        $difficulte = (!empty($_POST['difficulte'])) ?$_POST['difficulte'] : null;
        $description = (!empty($_POST['description'])) ?$_POST['description'] : null;
        $admin = new Administrateur();
<<<<<<< HEAD
        $admin->connect('KingTitou','jesuisleboss123456');
        $admin->modifierRecette($nomRecette,$temps,$description,$cout,$difficulte);
=======
        $search = new Recherche();
        if(!empty($search->rechercheParNom($nomRecette))){
            $admin->modifierRecette($nomRecette,$temps,$description,$cout,$difficulte);
        }else{
            Vue::montrer('/VuePage/pageModifRecette', array('erreur'=>'~recette inconnue~'));
        }
>>>>>>> d832e51e82bd9bb2d5b51be71d2f7bc6ce776ec1
    }
}    