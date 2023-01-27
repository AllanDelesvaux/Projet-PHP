<?php

    final class Appreciations{

        private $Appreciations;

        function __construct($nom_recette){
        $this->Appreciations = array();
            $O_conn = new ConnectionDatabase();
            $O_conn = $O_conn->getConnection();
            $_requete = "
            SELECT U.nom, A.note,	A.date_appreciation,	A.Nom_recette,	A.commentaire , A.Id_identifiant
            from Appreciation A join Utilisateur U on A.Id_identifiant = U.identifiant
            where A.Nom_recette = '" .$nom_recette."'";
            $O_statement = $O_conn->prepare($_requete);
            $O_statement->execute(); // FETCH_ASSOC
            $appre = $O_statement->fetchAll(PDO::FETCH_OBJ);
            foreach ($appre as $unique) {
                $tmp = new Appreciation($unique->nom, $unique->note, $unique->date_appreciation, $unique->commentaire,$unique->Nom_recette,$unique->Id_identifiant);
                array_push($this->Appreciations, $tmp);
            }
        }

        function getAppreciations(){
            return $this->Appreciations;
        }

        function __toString(){
            $result = "";
            foreach($this->Appreciations as $appre){
                $result .= (string) $appre;
            }
            return $result ;
        }
    }
