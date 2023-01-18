<?php

$connection = new ConnectionDatabase();

$connection = $connection->getConnection();

$requete = "SELECT * FROM Admin";


if ( ($O_statement = $connection->query($requete)) !== false)
{
    echo '<p>' . print_r("ca marche") . '</p>';

    foreach ($O_statement as $tuple) {
        echo '<p>' . print_r($tuple) . '</p>';
    }
} else {
    echo 'mauvaise requete';
}
