<?php

class ControleurPageRecette
{
    public function defautAction()
    {
        $nom_recette= $_POST['nomRecette']; // changer l'id de l'attribut en id utilisateur
        $recherche = new Recherche();
        $resultatsRecherche = $recherche->rechercheParNom($nom_recette)[0];
        $Appreciations = new Appreciations($resultatsRecherche->Nom_recette);
        Vue::montrer('/VuePage/pageRecette', array('nomRecette'=>$resultatsRecherche->Nom_recette, 'photo'=>$resultatsRecherche->photo,  'note'=>$resultatsRecherche->note_moyenne, 'tempsPrepa'=>$resultatsRecherche->temps_de_preparation, 'cout'=>$resultatsRecherche->cout, 'difficulte'=>$resultatsRecherche->difficulte, 'description'=>$resultatsRecherche->description_prepa, 'Appreciations'=>$Appreciations));
    }

}