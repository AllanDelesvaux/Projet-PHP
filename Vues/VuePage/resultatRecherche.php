<div class="flex flex-col container max-w-md mt-10 mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">

<?php 
    $resultatsRecherche = $A_vue['resultats'];
    if((empty($resultatsRecherche))){
        Vue::montrer('/VuePage/vide');
    }else{
        for ($i = 0; $i < sizeof($resultatsRecherche); ++$i) {
            Vue::montrer('/Composant/epingleRecette', array('photo' => $resultatsRecherche[$i]->photo, 'nomRecetteAleatoire' => $resultatsRecherche[$i]->Nom_recette, 'note' => $resultatsRecherche[$i]->note_moyenne, 'tempsPrepa' => $resultatsRecherche[$i]->temps_de_preparation));
        }
    }
?>
</div>
