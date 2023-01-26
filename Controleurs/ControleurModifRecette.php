<?php

final class ControleurModifRecette
{
    public function defautAction()
    {
        Vue::montrer('/VuePage/pageModifRecette');
    }

    public function confirmationAction(array $A_parametres = null, array $A_postParams = null)
    {
        $admin = new Administrateur();
        $admin->connect('KingTitou','jesuisleboss123456');
        $nomRecette = $_POST['nomRecette'];
        $temps = $_POST['temps'];
        $cout = $_POST['cout'];
        $difficulte = $_POST['difficulte'];
        $description = $_POST['description'];

        $search = new Recherche();
        if(!empty($search->rechercheParNom($nomRecette))){
            $msg = "Les attributs ";
            if(!empty($temps)){
                $admin->modifierRecette($nomRecette,'temps_de_preparation',$temps);
                $msg.= ' temps_de_preparation ';
            }
            if(!empty($cout)){
                $admin->modifierRecette($nomRecette,'cout',$cout);
                $msg.= ' cout ';
            }
            if(!empty($difficulte)){
                $admin->modifierRecette($nomRecette,'difficulte',$difficulte);
                $msg.= ' difficulte ';
            }
            if(!empty($description)){
                $admin->modifierRecette($nomRecette,'description_prepa',$description);
                $msg.= ' description_prepa ';
            }       
            $msg .= " de la recette ".$nomRecette.", ont bien été modifié.";
        }
        else{
            $msg = 'Recette inconnue !';
        }
        $_SESSION['msg'] = $msg;
        header('Location: /ModifRecette');
        exit();
    }
}    