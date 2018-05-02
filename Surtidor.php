<?php

class Surtidor {
    var $precio;
    
    function __construct ($precio){
        $this->precio = $precio;
        
    }

    function getprecio (){
        return $this->precio;
    }

    function setprecio ($precio){
        $this->nommbre = $precio;        
    }
}