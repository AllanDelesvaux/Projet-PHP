<section class="w-full bg-gray-800 h-screen">
    <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-gray-900 w-full shadow rounded p-8 sm:p-12 -mt-72">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                <h1 class="text-4xl font-bold leading-2 text-center text-white">Administration</h1>
                <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
                    <?php Vue::montrer('Composant/blocAdministration',array("titre" => "Utilisateur à supprimer","name" => "Supprimer Utilisateur",'action'=>"/pageAdministration/supprimerUtilisateur")) ?>
                    <?php Vue::montrer('Composant/blocAdministration',array("titre" => "Appreciation à supprimer","name"=> "Supprimer Appreciation",'action'=> "/pageAdministration/supprimerAppreciation")) ?>
                </div>
            </div>
        </div>
    </div>
</section>
