<?php

class Administrateur extends Utilisateur
{
    /*public function ajouterRecette($recette){
        $requete = 'insert into Recette(Nom_recette,note_moyenne,photo,temp_de_preparation,description_prepa,cout,difficulte) values ()';
    }*/
    private $_I_id;
    private $_S_mot_de_passe;
    private $_B_photo;
    private $_S_nom_affichage;
    private $_D_date_premiere_connexion;
    private $_D_date_derniere_connexion;

    public function __construct()
    {
        $this->premiere_connexion = true;
    }

    function connect($identifiant,$mot_de_passe)
    {
        $result = array();
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT * from ". 'Admin' ." where identifiant = '" .$identifiant."' AND mot_de_passe = '". $mot_de_passe . "'";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        $donnee = $result[0];
        $this->_I_id = $donnee->identifiant;
        $this->_S_mot_de_passe = $donnee->mot_de_passe;
        $this->_B_photo = $donnee->photo;
        $this->_S_nom_affichage = $donnee->nom;
        $this->_D_date_premiere_connexion = $donnee->date_premiere_connexion;
        $this->_D_date_derniere_connexion = $donnee->date_derniere_connexion;
    }

    public function ajouterRecette($valeurs){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "insert into Recette(Nom_recette,temps_de_preparation,description_prépa,cout,difficulte) values (?,?,?,?,?)";
        $O_statement = $connection->prepare($requete);
        $O_statement->execute(
            array(
                $valeurs['nom'],
                $valeurs['preparation'],
                $valeurs['description'],
                $valeurs['cout'],
                $valeurs['difficulte']
            )
        );
    }
    function insertBDD($champs,$valeurs){
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "INSERT INTO Admin (".$champs.") VALUES (". $valeurs.")";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
      }

      function updateBDD($champ,$valeur){
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "UPDATE Admin
        SET ".$champ." = '".$valeur."'
        WHERE identifiant = '".$this->_I_id."'";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
      }

    public function modifierRecette($nom_recette,$champ,$valeur){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "UPDATE Recette SET ".$champ." = '".$valeur."' where Nom_recette='".$nom_recette."'";
        $O_statement = $connection->prepare($requete);
        return $O_statement->execute();
    }


    public function supprimerRecette($nomRecette){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "DELETE FROM Recette where Nom_recette=?";
        $O_statement = $connection->prepare($requete);
        if($O_statement->execute(array($nomRecette))){
            echo '<p>  recette supprimé </p>' ;
        }
    }


    public function supprimerUtilisateur($id){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $requete = "DELETE FROM Utilisateur where identifiant=?";
        $O_statement = $connection->prepare($requete);
        if($O_statement->execute(array($id))){
            echo '<script>
                alert("Utilisateur supprimé" );
                </script>' ;
        }

    }

    public function supprimerAppreciationParId($_I_identifiant){
        $connection = new ConnectionDatabase();
        $connection = $connection->getConnection();
        $S_requete = "DELETE FROM Appreciation WHERE ID_appreciation=?";
        $O_statement = $connection->prepare($S_requete);
        if($O_statement->execute(array($_I_identifiant))){
            echo '<script>
                alert("Appreciation supprimé" );
                </script>' ;
        }
    }

    function getId() {
		return $this->_I_id;
	}

    function getMdp() {
		return $this->_S_mot_de_passe;
	}

    function getPhoto() {
		return $this->_B_photo;
	}

    function getNom() {
		return $this->_S_nom_affichage;
	}

    function getPremiereCo() {
		return $this->_D_date_premiere_connexion;
	}

   
    function getDeniereCo() {
		return $this->_D_date_derniere_connexion;
	}

    function setPremiereCo(){
        if($this->premiere_connexion){
          $this->premiere_connexion = false;
          $this->_D_date_premiere_connexion= date("Y-m-d");
        }
      }
}