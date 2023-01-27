<div class="m-10 container">
    <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
         src="<?php echo $A_vue['photo']; ?>"
         alt=""> <!--photo envoyez par le controleur -->

    <div class="mt-8 w-full inline-block">
        <form action="/pageRecette" method="POST">
            <input type="hidden" name='nomRecette' value='<?php echo $A_vue['nomRecetteAleatoire']; ?>'>
            <input class="mt-4 text-left text-xl font-semibold text-gray-800 dark:text-white" value='<?php echo $A_vue['nomRecetteAleatoire']; ?>' type='submit'>
            </input>
        </form>

        <p class="text-black-500 uppercase"> difficulte : <?php echo $A_vue['note']; ?></p>
        <p class="text-black-500 uppercase"> Temps de préparation :<?php echo $A_vue['tempsPrepa']; ?></p>
    </div>
</div>