<?php

class Utilisateur{
    private $_I_id;
    private $_S_mot_de_passe;
    private $_B_photo;
    private $_S_nom_affichage;
    private $_D_date_premiere_connexion;
    private $_D_date_derniere_connexion;

    private $premiere_connexion;

    function __construct(){
      $this->premiere_connexion = true;
    }

    function isExisting($identifiant){
        $result = array();
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT * from Utilisateur where identifiant = '" .$identifiant."'";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        $table = $result[0];
        return !is_null($table->identifiant);
    }

    function connect($identifiant,$mot_de_passe)
    {
        $result = array();
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT * from Utilisateur where identifiant = '" .$identifiant."' AND mot_de_passe = '". $mot_de_passe . "'";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        $table = $result[0];
        $this->_I_id = $table->identifiant;
        $this->_S_mot_de_passe = $table->mot_de_passe;
        $this->_B_photo = $table->photo;
        $this->_S_nom_affichage = $table->nom;
        $this->_D_date_premiere_connexion = $table->date_premiere_connexion;
        $this->_D_date_derniere_connexion = $table->date_derniere_connexion;
    }
  
    function insertBDD($champs,$valeurs){
      $O_conn = new ConnectionDatabase();
      $O_conn = $O_conn->getConnection();
      $_requete = "INSERT INTO Utilisateur (".$champs.") VALUES (". $valeurs.")";
      $O_statement = $O_conn->prepare($_requete);
      $O_statement->execute(); // FETCH_ASSOC
    }

    function updateBDD($champ,$valeur){
      $O_conn = new ConnectionDatabase();
      $O_conn = $O_conn->getConnection();
      $_requete = "UPDATE Utilisateur
      SET ".$champ." = '".$valeur."'
      WHERE identifiant = '".$this->_I_id."'";
      $O_statement = $O_conn->prepare($_requete);
      $O_statement->execute(); // FETCH_ASSOC
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

    function setId($id) {
		$this->_I_id=$id;
    $this->updateBDD("identifiant",$this->_I_id);
	}

    function setMdp($mdp) {
		$this->_S_mot_de_passe = $mdp;
    $this->updateBDD("mot_de_passe",$this->_S_mot_de_passe);
	}

    function setPhoto($photo) {
		$this->_B_photo = $photo;
    $this->updateBDD("photo",$this->_B_photo);
	}

    function setNom($nom) {
		$this->_S_nom_affichage = $nom;
    $this->updateBDD("nom",$this->_S_nom_affichage);
	}

    function setDerniereCo($derniereCo){
    $this->_D_date_derniere_connexion = $derniereCo;
    $this->updateBDD("date_derniere_connexion", $this->_D_date_derniere_connexion);
    }

    function setPremiereCo(){
      if($this->premiere_connexion){
        $this->premiere_connexion = false;
        $this->_D_date_premiere_connexion= date("Y-m-d");
        $this->updateBDD("date_derniere_connexion", $this->_D_date_premiere_connexion);
      }
      }


    }
