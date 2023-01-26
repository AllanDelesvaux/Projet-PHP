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
