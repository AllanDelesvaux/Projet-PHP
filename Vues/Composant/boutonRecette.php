<?php
// La 1ere variable du composant bouton est l'action (la redirection). Le second parametre valeur est le texte qui sera afficher dans le bouton.
echo '<div class="inline-block px-4 ">
    <form action="/'.$A_vue['action'].'">
        <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded md:ml-6 hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">'.$A_vue['valeur'].'</button>
    </form>
</div>';

?>