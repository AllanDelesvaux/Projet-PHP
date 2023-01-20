<nav class="flex items-start justify-start bg-white py-4 lg:px-12 shadow border-solid border-t-2">
<!--modal-->

    <div class="relative z-10" id="principal">
        <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" id="elementFlou"></div>
        <div class="hidden fixed inset-0 z-10 overflow-y-auto" id="modal">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 ">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg bg-500-yellow">
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center   px-4 py-2   sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal()">
                            <img src="./assets/bx-x.svg" alt="quitter"/>
                        </button>
                    </div>
                    <?php Vue::montrer('standard/composant/zoneDeRecherche'); ?>

                </div>
            </div>
        </div>
    </div>






    <!-------------------------------------------------------------------->


    <div class="flex justify-between w-full  pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0 lg:border-b-0 lg:w-auto bg-red-400">
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-2">
            <span class="font-semibold text-xl tracking-tight">Quaso</span>
        </div>

        <li class="list-none text-md font-bold text-black grow-0 lg:flex-grow">
            <a href="#responsive-header"
               class="block  lg:inline-block lg:mt-0  px-4 py-2 mr-2">
                Menu
            </a> <!-- lien -->
            <button type="button" class="inline-flex w-full justify-center   px-4 py-2   sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal()">
                Recherche
            </button> <!-- lien -->
        </li>


    </div>


    <div class="flex  w-full  lg:flex lg:items-center lg:block lg:w-auto lg:px-3 px-8 bg-emerald-200">



        <div class="flex ">

            <?php Vue::montrer('standard/composant/inscription'); ?>
            <?php Vue::montrer('standard/composant/connexion'); ?>
        
        </div>
    </div>

</nav>

<script src="/Vues/ScriptJS/modal.js"></script>
    


