<?php
    require_once 'Noyau/ChargementAuto.php';


    final class ControleurInscription
    {
        public function defautAction()
        {
            Vue::montrer('Inscription', array('' => ''));
        
        }
    
        public function inscrptionAction()
        {
            $_login ='';
            $_password ='';
            $_username ='';
            $_date ='';
    
        }
    
    }

    

 ?>