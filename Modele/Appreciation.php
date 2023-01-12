<?php

    final class Appreciation{

        private $_U_nom_Auteur;
        private $_F_note;
        private $_D_Date;
        private $_S_commentaire;

        function __construct($_U_nom_Auteur, $_F_note, $_D_Date, $_S_commentaire){

            $this->_U_nom_Auteur = $_U_nom_Auteur;
            $this->_F_note = $_F_note;
            $this->_D_Date = $_D_Date;
            $this->_S_commentaire = $_S_commentaire;

        }
    }
