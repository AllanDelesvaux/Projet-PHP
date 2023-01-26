<section class="bg-white dark:bg-zinc-800">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
            <?php Vue::montrer('Composant/etiquette',array('photo'=> $A_vue['photo'],'nomRecetteAleatoire' => $A_vue['nomRecetteAleatoire'],'description' => $A_vue['description'])); ?>
        </div>
    </div>

</section>
