<?php
 
 require_once("cliente.php");
 require_once("empleado.php");
 require_once("SurtidorGasolina.php");
 require_once("SurtidorGasoil.php");




class Gasolinera {
        var $ciudad;
        var $marca;
        var $cliente;
        var $empleado;
        var $surtidor;

        
        function __construct ($ciudad,$marca){
            $this->ciudad = $ciudad;
            $this->marca = $marca;
            $this->cliente = array();
            $this->empleado = array();
            $this->surtidor = array();

            
        }
    
        function getCiudad (){
            return $this->ciudad;
        }
    
        function setCiudad ($ciudad){
            $this->ciudad = $ciudad;
        }


        function getMarca() {
            return $this->marca;            
        }
       
        function setMarca($marca) { 
            $this->marca=$marca;      
        }     
    


        function altaCliente($cliente) {
            $this->clientes[] = $cliente;
        }    

        function bajaCliente($cif){
            $enc = false;
            for ($i = 0; $i < count ($this->cliente) && ($enc == false); $i++){
                if ($this->clientes[$i]->getCif() == $cif){
                    $this->clientes[$i] = null;
                    $enc = true;
                }
            }
        }

 
        function altaEmpleado($empleado) {
            $this->empleado[] = $empleado;
        }
        
        function bajaEmpleado($Nombreempleado){
            $enc = false;
                 for ($i = 0; $i < count ($this->empleados) && ($enc == false); $i++){
                        if ($this->empleados[$i]->getNombre() == $Nombreempleado){
                            $this->empleados[$i] = null;
                                $enc = true;
                }
            }
        }
    
       function anadirSurtidor($surtidores) {
            $this->surtidores[] = $surtidor;

    }





        function mostrar() {
            echo "Ciudad".$this->getCiudad();
            echo "Marca".$this->getMarca();
                for($i=0;$i < count($this->clientes); $i++){
                    $this->clientes[$i]->mostrar();
                }
                

        }
}

 //Falta recorrer vector empleados
 //Falta recorrer vector surtidores