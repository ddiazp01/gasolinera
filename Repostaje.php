<?php

class Repostaje {
    var $litros;
    var $fecha;

   function __construct($litros,$fecha) {
        $this->litros=$litros;
        $this->fecha=$fecha;
   }

   function getLitros() {
        return $this->litros;
     
    }
    
    function setLtros($litros) { 
        $this->litros=$litros;
    }    
   
    function getFecha() {
        return $this->fecha;
             
    }
   
    function setFecha($fecha) { 
        $this->fecha=$fecha;    
    }

    function mostrar () {
        echo "Litros".$this->getLitros();
        echo"<br>";
        echo "Fech".$this->getFecha();
        echo"<br>";
    }
}

        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->getFechaPoda());
        $diff = $date1->diff($date2); //diferencia entre fechas

        //echo "Hace ".$diff->y." años, ".$diff->m;      
       // echo ($diff->m > 1) ? " meses" : " mes";       
       // echo " y ".$diff->d." días que podaste";
        
        echo "<pre>";
        print_r($diff);
        echo "</pre>";