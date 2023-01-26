<?php if( !isset($_SESSION['isAdmin']) ||   !$_SESSION['isAdmin'])
{
    $msgErreur = 'Vous n\'avez pas les droits pour accéder à cette page';
    Vue::montrer('VuePage/pageErreur', array('msgErreur' => $msgErreur));
} else {
    echo '


<!-- component -->
<div class="w-full bg-gray-800 h-screen">
    <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-gray-900 w-full shadow rounded  p-6  sm:p-6 -mt-72">
        <div class="flex items-start w-full p-0 pb-5">  
        <form action="/PageAccueilAdmin">
                    <button class="font-semibold text-white bg-blue-700 rounded px-3 py-2 ">
                        Retour administration
                    </button>
</form>
            </div>
            <p class="text-3xl font-bold leading-7 text-center text-white">Modification de Recette</p>
            <form action="/modifRecette/confirmation" method="post">
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Nom Recette <?php echo $A_vue[\'erreur\']?> </label>
                        
                        <input name=\'nomRecette\' type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Temps de préparation</label>
                        <input name=\'temps\' type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                </div>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Coût</label>
                        <input name=\'cout\' type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Difficulté</label>
                        <input name=\'difficulte\' type="text" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none text-gray-300">Description/Préparation</label>
                        <textarea name=\'description\' type="text" class="h-40 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-800 border-0 rounded"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded md:ml-6 hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                        Modifier !
                    </button>
                </div>
            </form>';
                    //Vue::montrer('Composant/boutonRecette', array('action' => '/AjoutRecette', 'valeur' => 'Ajouter une recette'));
                echo'
                </div>
            </form>
        </div>
    </div>
</div>
';
}?>