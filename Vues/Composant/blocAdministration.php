<figure class="flex flex-col justify-start items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
    <h2 class="text-lg font-bold leading-none tracking-tighter text-neutral-600 pb-5 ">Supprimer un Utilisateur</h2>
    <form class="mt-8 space-y-6" action="/pageAdministration/supprimerUtilisateur" method="POST">
    <?php Vue::montrer('Composant/zoneDeRecherche') ?>
        <button type="submit" class="group relative flex justify-center rounded-md border border-transparent bg-black py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Valider
        </button>
</figure>
