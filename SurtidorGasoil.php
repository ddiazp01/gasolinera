<?php
require_once("surtidor.php");
class SurtidorGasoil extends Surtidor{
    var $premium;

   function __construct($precio,$premium) {
       parent::__construct($precio);
       $this->premium=$premium;
   }
   
   function getPremium() {
       return $this->premium;    
   }

   function setPremium($premium) { 
       $this->premium=$premium;

   }
}