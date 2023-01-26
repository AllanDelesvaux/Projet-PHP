<section class="bg-white dark:bg-zinc-800 ">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-rows-1 md:grid-cols-3 xl:grid-cols-3">
            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                     src="<?php echo $A_vue['photo']; ?>"
                     alt=""> <!--photo envoyez par le controleur -->

                <div class="mt-8">
                    <span class="text-blue-500 uppercase"><?php echo $A_vue['nomRecetteAleatoire']; ?></span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                        <?php echo $A_vue['nomRecetteAleatoire']; ?>
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        <?php echo $A_vue['description'];?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
