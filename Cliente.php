<?php

require_once("persona.php");


class Cliente extends Persona{
    var $cif;
    var $repostaje;
    function __construct($nombre,$cif) {
        parent::__construct($nombre);
        $this->cif=$cif;
        $this->repostaje= array();
    }    
    function getCif() {
       return $this->cif;
        
   }
   function setCif($cif) { 
       $this->cif=$cif;
    
   }  
   
   function anadirRepostaje($litros, $fecha) {
       $aux = new Repostaje ($litros,$fecha);
       $this->repostaje[]=$aux;

    }
    function mostrar () {
    parent::mostrar();
    echo "<br>Cif".$this->getCif();
    
      
            
        }


    }












  
 
 