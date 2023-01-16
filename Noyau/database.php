<?php

$A_config = parse_ini_file('Noyau/data.ini', true);

$S_dsn = $A_config['type'] . ':dbname=patisseriebd_table;host=' . $A_config['adresse_IP'];

$O_conn= new PDO($S_dsn, $A_config['utilisateur'], $A_config['motdepasse']);

$requete = "SELECT * FROM Admin";

if ( ($O_statement = $O_conn->query($requete)) !== false)
{
foreach ($O_statement as $tuple) {
echo '<pre>' . print_r($tuple) . '</pre>';
}
} else {
echo 'mauvaise requete';
}




