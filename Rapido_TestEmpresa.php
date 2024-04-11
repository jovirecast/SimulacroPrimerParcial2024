<?php
include './Cliente.php';
include './Empresa.php';
include './Venta.php';
include_once './Moto.php';
//include './TestEmpresa.php';

$objCliente = new Cliente("pepe", "cortizona",true,"DNI",180);
echo $objCliente;
echo "\n";
$objMoto1 = new Moto(001, 1000, 2022, "yamaha", 10, true);
//echo $objMoto1; 
echo "\n";

$objMoto2 = new Moto(002, 3000, 2020, "honda", 15, false);
//echo $objMoto2;
echo "\n";

$objMoto3 = new Moto(003, 2000, 2021, "kawasaki", 5, true);
//echo $objMoto3;
echo "\n";


$arrayMoto1 = $objMoto1->motoEnArreglo();
/*print_r($arrayMoto1);
echo "\n";*/

/*$arrayMoto2 = $objMoto2->motoEnArreglo();
$arrayMotos = array();
array_push($arrayMotos, $arrayMoto1, $arrayMoto2);
print_r($arrayMotos);
echo "\n";*/

//EL [OBJ, OBJ, OBJ] ES EN EMPRESA Y NO EN VENTAS
$objVenta = new Venta(11,"10/12/2024",null,[$objMoto1, $objMoto2, $objMoto3], 3500);
//$objVenta->incorporarMoto($objMoto3);

echo $objVenta;
/*$booleanoTest= $objVenta->incorporarMoto($objMoto1);
$booleanoTest2= $objVenta->incorporarMoto($objMoto2);
var_dump($booleanoTest);
echo "\n";
var_dump($booleanoTest2);*/


//$objEmpresa = new Empresa("Alta Gama", "Av Argenetina 123", $objMoto1, );


/*
$pruebaBoolMoto = $objVenta->incorporarMoto($objMoto1);

var_dump($pruebaBoolMoto);
echo "\n";

$pruebaBoolMoto2 = $objVenta->incorporarMoto($objMoto2);

var_dump($pruebaBoolMoto2);


/*var_dump($objMoto1);
echo "\n";
var_dump($objMoto2);*/


/*echo $objMoto1->calcularPorcentajeAumento();
echo "\n";
echo $objMoto2->calcularPorcentajeAumento();
echo "\n";
echo $objMoto1->darPrecioVenta();
echo "\n";
echo $objMoto2->darPrecioVenta();*/