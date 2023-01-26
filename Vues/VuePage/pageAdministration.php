<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl mb-5">
            <br class="hidden lg:block">
             Administration
        </h1>
        <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
            <?php Vue::montrer('Composant/blocAdministration',array("titre" => "utilisateurAsupprimer","name" => "Supprimer Utilisateur",'action'=>"/pageAdministration/supprimerUtilisateur")) ?>
            <?php Vue::montrer('Composant/blocAdministration',array("titre" => "AppreciationAsupprimer","name"=> "Supprimer Appreciation",'action'=> "/pageAdministration/supprimerAppreciation")) ?>

        </div>
</section>
