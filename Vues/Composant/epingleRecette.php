<div class="m-10 container">
    <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
         src="<?php echo $A_vue['photo']; ?>"
         alt=""> <!--photo envoyez par le controleur -->

    <div class="mt-8 inline-block">
        <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
            <?php echo $A_vue['nomRecetteAleatoire']; ?>
        </h1>
        <p class="text-black-500 uppercase"> difficulte : <?php echo $A_vue['note']; ?></p>
        <p class="text-black-500 uppercase"> Temps de préparation :<?php echo $A_vue['tempsPrepa']; ?></p>
    </div>
</div>