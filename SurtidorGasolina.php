<?php
require_once("surtidor.php");
class SurtidorGasolina extends Surtidor{
    var $ogtanaje;

   function __construct($precio,$ogtanaje) {
       parent::__construct($precio);
       $this->ogtanaje=$ogtanaje;
   }

   function getOgtanaje() {
       return $this->ogtanaje;        
   }

   function setOgtanaje($ogtanaje) { 
       $this->ogtanaje=$ogtanaje;

   }
}

