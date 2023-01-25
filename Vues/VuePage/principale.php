<section class="bg-white dark:bg-zinc-800">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
            <?php Vue::montrer('Composant/etiquette'); ?>
            <?php Vue::montrer('Composant/etiquette'); ?>
            <?php Vue::montrer('Composant/etiquette'); ?>
        </div>
    </div>

    <section class="container px-2 py-10 mx-auto ">
        <h1 class="font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white mb-5">Categories</h1>
        <?php Vue::montrer('Composant/categories') ?>
    </section>

</section>
