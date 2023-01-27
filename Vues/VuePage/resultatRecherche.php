

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
