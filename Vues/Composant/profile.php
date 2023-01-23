<?php
        if (!isset($_SESSION['suid']) ) {
            echo "<div class=\"flex\">";

            Vue::montrer('Composant/inscription');
            Vue::montrer('Composant/connexion');

            echo "</div>";
        }
        else{
            Vue::montrer('Composant/profile');
            Vue::montrer('Composant/deconnexion');
        }

        
?>