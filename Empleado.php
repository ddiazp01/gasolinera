<?php

class Empleado extends Persona{
    var $id;

   function __construct($nombre,$id) {
       parent::__construct($nombre);
       $this->id=$id;
   }
   
   function getId() {
       return $this->id;
        
   }
   
   function setId($id) { 
       $this->id=$id;

   }
}