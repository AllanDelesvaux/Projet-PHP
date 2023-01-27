<section>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center">
                    <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                        <br class="hidden lg:block">
                        <?php echo $A_vue['nomRecette'] ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
        <div class="flex flex-wrap items-center mx-auto max-w-7xl">
            <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                <div>
                    <div class="relative w-full max-w-lg">
                        <div class="absolute top-0 rounded-full bg-violet-300 -left-4 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                        <div class="relative">
                        <img class="object-cover object-center mx-auto rounded-lg shadow-2xl" alt="hero"
                            src="<?php echo $A_vue['photo']; ?>"
                            alt="">
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                <dl class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <?php 
                        Vue::montrer('Composant/blocTextRecette', array('note' => $A_vue['note'], 'tempsPrepa' => $A_vue['tempsPrepa'], 'cout' => $A_vue['cout'], 'difficulte' => $A_vue['difficulte'], 'description' => $A_vue['description']));
                    ?>
                </dl>
            </div>
        </div>
    </div>
</section>

<?php Vue::montrer('Composant/Commentaire') ?>







