<?php if( !isset($_SESSION['isAdmin']) ||   !$_SESSION['isAdmin'])
{
    $msgErreur = 'Vous n\'avez pas les droits pour accéder à cette page';
    Vue::montrer('VuePage/pageErreur', array('msgErreur' => $msgErreur));
} else {
    echo '

            <div class ="flex flex-row items-center justify-center" ><h1 class="text-3xl text-black font-bold mb-3"> Bienvenue '.$_SESSION['suid']->getNom().' ! </h1></div>
            <div class ="flex flex-row items-center justify-center">    
                <section class="py-3">
                    <div class="container px-4 mx-auto">
                        <div class="relative p-6 text-center bg-gray-500 rounded-xl">
                            <h4 class="text-xl text-white font-bold mb-3">Modification</h4>
                            <p class="text-gray-300 mb-3">Ici, vous pourrez modifier les recettes déjà existantes.</p>
                            <div class="flex flex-wrap items-center -mx-2">
                                <div class="w-full sm:w-1/2 px-2">
                                    <a href="/"> C\'est parti !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-3">
                <div class="container px-4 mx-auto">
                    <div class="relative p-6 text-center bg-gray-500 rounded-xl">
                        <h4 class="text-xl text-white font-bold mb-3">Ajout</h4>
                        <p class="text-gray-300 mb-3">Créez vos propres recettes et ajoutez les à la base de donnée.</p>
                        <div class="flex flex-wrap items-center -mx-2">
                            <div class="w-full sm:w-1/2 px-2">
                                <a href="/"> C\'est parti !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class ="flex flex-row items-center justify-center">    
                <section class="py-3">
                    <div class="container px-4 mx-auto">
                        <div class="relative p-6 text-center bg-gray-500 rounded-xl">
                            <h4 class="text-xl text-white font-bold mb-3">Administration</h4>
                            <p class="text-gray-300 mb-3">Supprimer des utilisateurs, ou appréciations.</p>
                            <div class="flex flex-wrap items-center -mx-2">
                                <div class="w-full sm:w-1/2 px-2">
                                    <a href="/"> C\'est parti !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            ';
}
?>