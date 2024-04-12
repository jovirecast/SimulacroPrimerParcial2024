<?php

include './Cliente.php';
include './Empresa.php';
include './Venta.php';
include_once './Moto.php';

$objCliente1 = new Cliente("pepe", "cortisona", true, "DNI", 180);

$objCliente2 = new Cliente("doña", "tremebunda", false, "DNI", 90);

$objMoto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);

$objMoto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);

$objMoto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);

$objEmpresa = new Empresa("Alta Gama", "Av Argentina 123", [$objCliente1,$objCliente2], [$objMoto1,$objMoto2,$objMoto3], []);

$arregloCodigos = [11,12,13];
