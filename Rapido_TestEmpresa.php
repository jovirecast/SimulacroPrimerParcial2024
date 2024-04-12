<?php
include './Cliente.php';
include './Empresa.php';
include './Venta.php';
include_once './Moto.php';
//include './TestEmpresa.php';


$objCliente1 = new Cliente("pepe", "cortisona", true, "DNI", 180);
//echo $objCliente1;
//echo "\n";
$objCliente2 = new Cliente("doña", "tremebunda", false, "DNI", 90);
//echo $objCliente2;
//echo "\n";
$objMoto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);
//echo $objMoto1;
//echo "\n";
$objMoto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);
//echo $objMoto2;
//echo "\n";
$objMoto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);
//echo $objMoto3;
//echo "\n";


$objEmpresa = new Empresa("Alta Gama", "Av Argentina 123", [$objCliente1,$objCliente2], [$objMoto1,$objMoto2,$objMoto3], []);
//echo $objEmpresa;

echo count($objEmpresa->getColeccionMotosEmpresa());
/*
//inicializacion variables
$arregloColeccionMotos = $this->getColeccionMotosEmpresa();
$cantidadColeccionMotos = count($arregloColeccionMotos);
$objVentaFuncion = new Venta(null, null, null, null, null);
$cantidadCodigosMoto = count($colCodigosMoto);
$codigoABuscar = 0;
$codigoBuscado = 0;
$i = 0;
$r = 0;
$motoDisponible = false;
$clienteDisponible = false;
$importeFinalMoto = 0;

//instrucciones
for ($i; $i < $cantidadCodigosMoto; $i++) {
    $colCodigosMoto[$i] = $arregloColeccionMotos[$i]->getCodigoMoto();
    for ($r; $r < $cantidadColeccionMotos; $r++) {
        $codigoBuscado = $arregloColeccionMotos[$r]->getCodigoMoto();
        $motoDisponible = $arregloColeccionMotos[$r]->getStockMoto();
        $clienteDisponible = $objCliente->estadoCliente();
        if ($codigoABuscar == $codigoBuscado && $motoDisponible == true && $clienteDisponible == true) {
            $objVentaFuncion->incorporarMoto($arregloColeccionMotos[$r]);
        }
    }
}

$importeFinalMoto = $objVentaFuncion->getPrecioMoto();

//retorno importe final de la venta
return $importeFinalMoto;
*/


/*$arregloCodigos = [11,12,13];
$punto5 = $objEmpresa->registrarVenta($arregloCodigos, $objCliente1);

var_dump($punto5);
//echo "\n";
echo $punto5;
echo "\n";*/

//print_r($objEmpresa->getColeccionClientesEmpresa());
//echo "\n";
////echo count($objEmpresa->getColeccionClientesEmpresa());
//echo "\n";
//print_r($objEmpresa->getColeccionMotosEmpresa());
//echo "\n";
//echo count($objEmpresa->getColeccionMotosEmpresa());
//echo "\n";
//print_r($objEmpresa->getColeccionVentasEmpresa());
//echo "\n";
//echo count($objEmpresa->getColeccionVentasEmpresa());


//$testVenta = new Venta (1,"12/4/24",$objCliente1,$objMoto1,100);
//echo $testVenta . "\n";
//print_r ($testVenta->incorporarMoto($objMoto3));
//echo $testVenta. "\n";;

//echo $objEmpresa->retornarMoto(1);
//echo $objEmpresa;



/*$objVenta = new Venta(11, "10/12/2024", $objCliente1, $objMoto2, 3500);

echo "\n";*/

//echo $objVenta;

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

var_dump($pruebaBoolMoto2);*/


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