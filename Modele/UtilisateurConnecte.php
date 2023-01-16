<?php

class UtilisateurConnecte extends Utilisateur
{


    public function laisserAppreciation($note,$commentaire){
        date_default_timezone_set('Europe/Paris');
        $date = date('d-m-y h:i:s');
        $appreciation = new Appreciation($this,$note,$date,$commentaire);
/*        $requete = "INSERT INTO appreciation VALUES()"*/ // a voir avec la bd

    }


}