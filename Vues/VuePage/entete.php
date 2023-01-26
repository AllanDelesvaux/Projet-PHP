<nav class="bg-white">


    <!--modal-->
    <div class="relative z-10" id="principal">
        <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" id="elementFlou"></div>
        <div class="hidden fixed inset-0 z-10 overflow-y-auto" id="modal">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 ">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg bg-500-yellow">
                    <div class=" px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <form action="/">
                            <button type="submit" class="inline-flex w-full justify-center   px-4 py-2   sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal">
                                <img src="./assets/bx-x.svg" alt="quitter"/>
                            </button>
                        </form>

                        <div class="flex items-center justify-center bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <img src="./assets/bx-search.svg" alt="recherche" class="px-4 py-2 rounded-md"/>
                            <form action="/Recherche" method="POST"> <!--wrapper -->
                            <input class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Recherche"/> <!--zone de recherche -->
                                <button type="submit" class=" font-medium after:block after:content['']  after:h-1 after:w-0 after:bg-black hover:after:w-full hover:after:transition after:duration-500 ">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------->
    <div class="container mx-auto overflow-hidden bg-white">
        <div class="flex items-center justify-between px-4 py-4 bg-blueGray-50">
                <div class="flex  items-center  w-1/5   ">
                        <a href="/">
                            <img src="/assets/cake.svg" alt="" class="h-14">
                        </a>

                        <section class="flex flex-row w-full justify-around ">
                            <?php Vue::montrer('Composant/bouton', array('action' => '/', 'valeur' => 'Menu')); ?>
                            <button  onclick="toggleModal()" class=" font-medium after:block after:content['']  after:h-1 after:w-0 after:bg-black hover:after:w-full hover:after:transition after:duration-500 ">Recherche</button>
                        </section>
                </div>
            <div class="w-2/5">
                <div class="flex items-center flex-row">
                    <?php
                        if (!isset($_SESSION['suid']) ) {
                            
                            Vue::montrer('Composant/bouton', array('action' => 'pageInscription', 'valeur' => 'Inscription'));
                            Vue::montrer('Composant/bouton', array('action' => 'pageConnexion', 'valeur' => 'Connexion'));

                        }
                        else{
                            
                            Vue::montrer('Composant/profil'); //icone de l'utilisateur
                            Vue::montrer('Composant/bouton', array('action' => 'Deconnexion', 'valeur' => 'Déconnexion'));
                        }
                    ?>

                </div>
            </div>
        </div>
</nav>

<script src="/Vues/ScriptJS/modal.js"></script>
