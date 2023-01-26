<?php if( !isset($_SESSION['isAdmin']) ||   !$_SESSION['isAdmin'])
{
    $msgErreur = 'Vous n\'avez pas les droits pour accéder à cette page';
    Vue::montrer('VuePage/pageErreur', array('msgErreur' => $msgErreur));
}
else
    {
    echo '
    <section class="w-full bg-[#C87B00] h-screen">
        <div class="bg-gradient-to-b from-white to-amber-700 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-black w-full shadow rounded p-8 sm:p-12 -mt-72">
            <div class="flex items-start w-full p-0 pb-5">  
            <form action="/PageAccueilAdmin">
                    <button class="font-semibold text-white bg-[#51350D] hover:bg-amber-700 rounded px-3 py-2 ">
                        Retour administration
                    </button>
                    </form>
            </div>
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                    <h1 class="text-4xl font-bold leading-2 text-center text-white">Administration</h1>
                    <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">';
                        Vue::montrer('Composant/blocAdministration',array("titre" => "Utilisateur à supprimer","name" => "Supprimer Utilisateur",'action'=>"/pageAdministration/supprimerUtilisateur"));
                        Vue::montrer('Composant/blocAdministration',array("titre" => "Appreciation à supprimer","name"=> "Supprimer Appreciation",'action'=> "/pageAdministration/supprimerAppreciation"));
                    echo'
                        </div>
                </div>
            </div>
        </div>
    </section>'; 
    }
?>