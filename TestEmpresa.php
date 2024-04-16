<?php

include './Cliente.php';
include './Empresa.php';
include './Venta.php';
include_once './Moto.php';

//Primer cliente
$objCliente1 = new Cliente("Homero", "Simpsons", true, "DNI", 12345678);

//Segundo cliente
$objCliente2 = new Cliente("Cosme", "Fulanito", false, "DNI", 32165487);

//Primera moto
$objMoto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);

//Segunda moto
$objMoto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);

//Tercera moto
$objMoto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);

//Creación de empresa
$objEmpresa = new Empresa("Alta Gama", "Av Argentina 123", [$objCliente1,$objCliente2], [$objMoto1,$objMoto2,$objMoto3], []);

$arregloCodigos5 = [11,12,13];
$arregloCodigos6 = [0];
$arregloCodigos7 = [2];

$punto5 = $objEmpresa->registrarVenta($arregloCodigos5, $objCliente2);
echo "resultado del punto 5: " . $punto5 . "\n";

$punto6 = $objEmpresa->registrarVenta($arregloCodigos6, $objCliente2);
echo "\n" . "resultado del punto 6: " . $punto6 . "\n";

$punto7 = $objEmpresa->registrarVenta($arregloCodigos7, $objCliente2);
echo "\n" . "resultado del punto 7: " . $punto7 . "\n";

$punto8 = $objEmpresa->retornarVentasXCliente("DNI", 12345678);

$punto9 = $objEmpresa->retornarVentasXCliente("DNI", 32165487);


echo "\n" . "resultado del punto 10: \n" . $objEmpresa;