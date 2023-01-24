<section class="bg-blueGray-50">
    <div class="container mx-auto overflow-hidden">
        <div class="flex items-start justify-between px-4 py-5 bg-blueGray-50">
                <div class="flex  items-center  w-1/5   ">
                        <a href="#">
                            <img src="/assets/cake.svg" alt="" class="h-14">
                        </a>

                        <ul class="flex flex-row w-full justify-around ">
                            <li class=" font-medium after:block after:content['']  after:h-1 after:w-0 after:hover:bg-black after:hover:w-full after:hover:transition   after:duration-500 "><a href="#">Menu</a></li>
                            <li class=" font-medium after:block after:content['']  after:h-1 after:w-0 after:bg-black hover:after:w-full hover:after:transition after:duration-500 "><a href="#">Recherche</a></li>
                        </ul>
                </div>
            <div class="w-auto">
                <div class="flex flex-wrap items-center">
                   <div class="w-auto hidden lg:block">
                        <div class="inline-block">
                            <?php Vue::montrer('Composant/profil'); ?> <!-- icone de l'utilisateur -->
                        </div>

                        <div class="inline-block">
                            <?php Vue::montrer('Composant/inscription'); ?>
                            
                        </div>
                       <div class="inline-block">
                           <?php Vue::montrer('Composant/connexion'); ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>

</section>
