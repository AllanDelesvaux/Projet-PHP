<?php if( !isset($_SESSION['isAdmin']) ||   !$_SESSION['isAdmin'])
{
    $msgErreur = 'Vous n\'avez pas les droits pour accéder à cette page';
    Vue::montrer('VuePage/pageErreur', array('msgErreur' => $msgErreur));
} else {
    echo '

<!-- component -->
<div class="w-full bg-[#C87B00] h-screen">
    <div class="bg-gradient-to-b from-white bg-[#C87B00] h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-black w-full shadow rounded p-8 sm:p-6 -mt-72">
        <div class="flex items-start w-full p-0 pb-5">  
                <form action="/PageAccueilAdmin">
                    <button class="font-semibold text-white bg-[#51350D] hover:bg-amber-700 rounded px-3 py-2 ">
                        Retour administration
                    </button>
                </form>
            </div>
            <p class="text-3xl font-bold leading-7 text-center text-white">Création de Recette</p>
            <form action="/ajoutRecette/confirmation" method="POST">
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Nom Recette</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" required="required" name="nom"/>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Temps de préparation</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" required="required" name="preparation"/>
                     </div>
                </div>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Coût</label>
                        <input type="number" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" required="required" name="cout"/>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Difficulté</label>
                        <input type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded " required="required" name="difficulte"/>
                    </div>
                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none text-gray-300">Description/Préparation</label>
                        <textarea type="text" class="h-40 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded" required="required" name="description"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button type=submit class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-[#51350D] rounded md:ml-6 hover:bg-amber-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none" >
                        Créer ! 
                    </button>
            </form> 
            </div>
        </div>
    </div>
</div>
            ';
}
?>