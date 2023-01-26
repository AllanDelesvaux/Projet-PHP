

<figure class="flex flex-col justify-start items-center p-8 text-center bg-gray-50 md:p-12 dark:bg-gray-800 md:ml-6 dark:border-gray-700">
    <h2 class="text-lg font-bold leading-none tracking-tighter text-white pb-5 "><?php echo $A_vue["titre"] ;?></h2>
    <form class="mt-8 space-y-6" action="<?php echo $A_vue['action'];?>" method="POST">
    <?php Vue::montrer("Composant/zoneDeRecherche") ?>
        <button type="submit" class="group relative flex justify-center rounded-md border border-transparent bg-[#51350D] py-2 px-4 text-sm font-medium text-white hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Valider
        </button>
    </form>    
</figure>

