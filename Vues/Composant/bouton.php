<?php
// La 1ere variable du composant bouton est l'action (la redirection). Le second parametre valeur est le textequi sera afficher dans le bouton.
echo '<div class="inline-block px-4 ">
    <form action="'.$A_vue['action'].'">
        <input class="py-3 px-5 w-full text-black font-semibold border border-black rounded-xl   transition ease duration-200" type="submit" value="'.$A_vue['valeur'].'" />
    </form>
</div>';

?>