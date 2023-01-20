<?php

class Utilisateur{

    function __construct(){

    }
    
    function fillData(){
        $O_conn = new ConnectionDatabase();
        $O_conn = $O_conn->getConnection();
        $_requete = "SELECT * from Utilisateur ";
        $O_statement = $O_conn->prepare($_requete);
        $O_statement->execute(); // FETCH_ASSOC
        $result = $O_statement->fetchAll(PDO::FETCH_OBJ);
        $this->_I_id = $result[0];
        $this->_S_mot_de_passe = $result [1];
        $this->_B_photo = $result[2];
        $this->_S_nom_affichage = $result[3];
        $this->_D_date_premiere_connexion = $result[4];
        $this->_D_date_derniere_connexion = $result[5];
    }

    private $_I_id;
    private $_S_mot_de_passe;
    private $_B_photo;
    private $_S_nom_affichage;
    private $_D_date_premiere_connexion;
    private $_D_date_derniere_connexion;

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

   
    function getDreniereCo() {
		return $this->_D_date_derniere_connexion;
	}

    function setId($id) {
		$this->_I_id=$id;
	}

    function setMdp($mdp) {
		$this->_S_mot_de_passe = $mdp;
	}

    function setPhoto($photo) {
		$this->_B_photo = $photo;
	}

    function setNom($nom) {
		$this->_S_nom_affichage = $nom;
	}

    function setDerniereCo($derniereCo){
        $this->_D_date_derniere_connexion = $derniereCo;
    }

	



    }
