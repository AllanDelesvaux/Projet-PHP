<nav class="flex items-center justify-between flex-wrap bg-white py-4 lg:px-12 shadow border-solid border-t-2 border-blue-700">
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
                    <div class="flex items-center justify-center bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <img src="./assets/bx-search.svg" alt="recherche" class="px-4 py-2 rounded-md"/>
                        <input class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Recherche"/> <!--zone de recherche -->
                    </div>

                </div>
            </div>
        </div>
    </div>






    <!-------------------------------------------------------------------->


    <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
            <span class="font-semibold text-xl tracking-tight">Quaso</span>
        </div>
    </div>

    <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">

        <li class="text-md font-bold text-black lg:flex-grow">
            <a href="#responsive-header"
               class="block mt-4 lg:inline-block lg:mt-0  px-4 py-2 mr-2">
                Menu
            </a> <!-- lien -->
            <button type="button" class="inline-flex w-full justify-center   px-4 py-2   sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal()">
                Recherche
            </button> <!-- lien -->
        </li>

        <div class="flex ">
            <a href="#"
               class="block text-md px-4 py-2 font-bold text-black">Inscription</a>  <!-- lien composant -->
            <a href="#"
               class=" block text-md px-4  ml-2 py-2  font-bold  mt-4  lg:mt-0">Connexion</a>  <!-- lien composant -->
        </div>
    </div>



</nav>

<script>
    function toggleModal(){
        document.getElementById('modal').classList.toggle("hidden");
        document.getElementById('elementFlou').classList.toggle("hidden");
    }
</script>

