<nav class="flex items-start justify-start bg-black py-4 lg:px-12 shadow border-solid border-t-2">

    <div class="relative z-10" id="principal">
        <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" id="elementFlou"></div>
        <div class="hidden fixed inset-0 z-10 overflow-y-auto" id="modal">
            <div class="flex min-h-full items-end justify-center text-center sm:items-center sm:p-0 ">
                <div class="relative transform overflow-hidden rounded-lg bg-black text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg bg-500-yellow">
                    <div class="bg-white px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center px-8 py-2 sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal()">
                            <img src="./assets/bx-x.svg" alt="quitter"/>
                        </button>
                        <?php Vue::montrer('Composant/zoneDeRecherche'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------->


    <div class="flex justify-between w-full  pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0 lg:border-b-0 lg:w-auto bg-red-400">
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-2">
            <span class="font-semibold text-xl tracking-tight">Quaso</span>
        </div>

        <div class="list-none text-md font-bold text-black grow-0 lg:flex-grow">
        <?php Vue::montrer('Composant/menu'); ?>
        <?php Vue::montrer('Composant/recherche'); ?>
        </div>


    </div>


    <div class="flex  w-full  lg:flex lg:items-center lg:block lg:w-auto lg:px-3 px-8 bg-emerald-200">
    <?php
        if (!isset($_SESSION['suid']) ) {
            echo "<div class=\"flex\">";

            Vue::montrer('Composant/inscription');
            Vue::montrer('Composant/connexion');

            echo "</div>";
        }
        else{

            echo "<div class=\"flex\">";
            Vue::montrer('Composant/profile');
            Vue::montrer('Composant/deconnexion');
            echo "</div>";
        }

        
?>

    </div>

</nav>

<script src="/Vues/ScriptJS/modal.js"></script>




    


