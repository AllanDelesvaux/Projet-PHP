<?php
// La 1ere variable du composant bouton est l'action (la redirection). Le second parametre valeur est le texte qui sera afficher dans le bouton.
echo '<div class="inline-block px-4 ">
    <form action="/'.$A_vue['action'].'">
        <button class=" font-medium after:block after:content['."''".']  after:h-1 after:w-0 after:hover:bg-black after:hover:w-full after:hover:transition   after:duration-500 ">'.$A_vue['valeur'].'</button>
    </form>
</div>';

?>