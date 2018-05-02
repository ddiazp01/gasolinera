<?php

require_once("gasolinera.php");

$gaso1 = new gasolinera ("Alburquerque","Galp");

$c1 = new Cliente ("Alvaro","07050835R");
$gaso1->altaCliente($c1);

$c2 = new Cliente ("Juan","07050835A");
$gaso1->altaCliente($c2);

$c3 = new Cliente ("Paco","07050835E");
$gaso1->altaCliente($c3);

$e1 = new Empleado ("Raul","1234");
$gaso1->altaEmpleado($e1);

$c1->anadirRepostaje (50, "2018-04-02");

$gaso1->bajaCliente ("07050835A");

$gaso1->bajaEmpleado ("Raul");

$s1 = new SurtidorGasolina (1.40,"95");
$s2 = new SurtidorGasoil (1.15,false);

$gaso1->anadirSurtidor($s1);
$gaso1->anadirSurtidor($s2);

$gaso1->mostrar();


//Mostrar la estructura
echo "<pre>";
print_r ($gaso1);
echo "</pre>";