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

        function __toString(){
            $result = 
            '<div class="text-white border-b-4 border-white p-3 m4 ">
                <div class="text-white text-xl">'
                .(string) $this->_U_nom_Auteur.', '
                .(string) $this->_F_note.'/10 , '
                .(string) $this->_D_Date.'</div>
                <div class="text-black text-xl bg-white rounded p-3">'
                .(string) $this->_S_commentaire.'</div>
                </div>';
            return $result ;
        }

        function ajoutAppréciation($valeurs){
            $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "insert into Appreciation( note, date_appreciation, Nom_recette, commentaire, Id_identifiant) values (?,?,?,?,?)";
        $O_statement = $connection->prepare($requete);
        $O_statement->execute(
            array(
                $valeurs['note'],
                date('Y-m-j'),
                $valeurs['difficulte'],
                $valeurs['message'],
                $valeurs['difficulte'],
            )
        );
        
        }
    }
