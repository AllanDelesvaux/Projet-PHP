<?php

    final class Recette{

        private $_A_list_ingredients;
        private $_A_list_ustensiles;
        private $_A_particularite;
        private $_A_appreciations;
        private $_B_photographie;
        private $_D_temps_de_preparation;
        private $_E_difficulte;
        private $_E_cout;
        private $_S_type_de_cuisson;
        private $_F_note_moyenne;
        private $_S_nom;


        function __construct($_A_list_ingredients, $_A_list_ustensiles, $_A_particularite, $_A_appreciations, $_B_photographie, $_D_temps_de_preparation, $_E_difficulte, $_E_cout, $_S_type_de_cuisson, $_F_note_moyenne, $_S_nom){

            $this->_A_list_ingredients = $_A_list_ingredients;
            $this->_A_list_ustensiles = $_A_list_ustensiles;
            $this->_A_particularite = $_A_particularite;
            $this->_A_appreciations = $_A_appreciations;
            $this->_B_photographie = $_B_photographie;
            $this->_D_temps_de_preparation = $_D_temps_de_preparation;
            $this->_E_difficulte = $_E_difficulte;
            $this->_E_cout = $_E_cout;
            $this->_S_type_de_cuisson = $_S_type_de_cuisson;
            $this->_F_note_moyenne = $_F_note_moyenne;
            $this->_S_nom = $_S_nom;

        }




        /**
         * @return mixed
         */
        public function getAListIngredients()
        {
            return $this->_A_list_ingredients;
        }

        /**
         * @return mixed
         */
        public function getAListUstensiles()
        {
            return $this->_A_list_ustensiles;
        }

        /**
         * @return mixed
         */
        public function getAParticularite()
        {
            return $this->_A_particularite;
        }

        /**
         * @return mixed
         */
        public function getAAppreciations()
        {
            return $this->_A_appreciations;
        }

        /**
         * @return mixed
         */
        public function getBPhotographie()
        {
            return $this->_B_photographie;
        }

        /**
         * @return mixed
         */
        public function getDTempsDePreparation()
        {
            return $this->_D_temps_de_preparation;
        }

        /**
         * @return mixed
         */
        public function getEDifficulte()
        {
            return $this->_E_difficulte;
        }

        /**
         * @return mixed
         */
        public function getECout()
        {
            return $this->_E_cout;
        }

        /**
         * @return mixed
         */
        public function getSTypeDeCuisson()
        {
            return $this->_S_type_de_cuisson;
        }

        /**
         * @return mixed
         */
        public function getFNoteMoyenne()
        {
            return $this->_F_note_moyenne;
        }

        /**
         * @return mixed
         */
        public function getSNom()
        {
            return $this->_S_nom;
        }

    }



