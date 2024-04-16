<?php
/*En la clase Venta:
1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia 
a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados 
a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la 
clase.
5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto 
y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El 
método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final 
de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario.
*/
include './Moto.php';

class Venta
{

    private $numeroVenta;
    private $fechaVenta;
    private $objClienteVenta;
    private $arrayColeccionMoto;
    private $precioFinal;

    //Método constructor de la clase
    public function __construct($numero, $fecha, $cliente, $coleccionMoto, $precio)
    {
        $this->numeroVenta = $numero;
        $this->fechaVenta = $fecha;
        $this->objClienteVenta = $cliente;
        $this->arrayColeccionMoto = $coleccionMoto;
        $this->precioFinal = $precio;
    }

    //Getters de la clase
    public function getNumeroVenta()
    {
        return $this->numeroVenta;
    }
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }
    public function getObjClienteVenta()
    {
        return $this->objClienteVenta;
    }
    public function getArrayColeccionMoto()
    {
        return $this->arrayColeccionMoto;
    }
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    //Setters de la clase
    public function setNumeroVenta($numeroVenta)
    {
        $this->numeroVenta = $numeroVenta;
    }
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;
    }
    public function setObjClienteVenta($cliente)
    {
        $this->objClienteVenta = $cliente;
    }
    public function setArrayColeccionMoto($coleccionMoto)
    {
        $this->arrayColeccionMoto = $coleccionMoto;
    }
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
    }

    public function incorporarMoto($objMoto)
    {
        //Inicialización de variables
        $posibleVentaMoto = $objMoto->getStockMoto();
        $posibleVentaCliente = $this->getObjClienteVenta()->getCondicionCliente();
        $precioDeVenta = $this->getPrecioFinal();
        $precioDeMoto = $objMoto->darPrecioVenta();
        $arregloColMotos = $this->getArrayColeccionMoto();

        //instrucciones
        if ($posibleVentaMoto == true && $posibleVentaCliente == true) {
            array_push($arregloColMotos, $objMoto);
            $precioDeVenta = $precioDeVenta + $precioDeMoto;
            $this->setPrecioFinal($precioDeVenta);
        }
    }

    //Método para utilizar el método _toString del objeto cliente
    public function textoCliente()
    {
        $listadoCliente = $this->getObjClienteVenta();

        //Retorno
        return $listadoCliente->__toString();
    }

    //Método para utilizar el método _toString de los objetos en el arreglo de colecciones de motos
    public function textoMotos()
    {
        //Inicialización de variables
        $arregloMotos = $this->getArrayColeccionMoto();
        $textoDeMoto = "";

        //instrucciones
        foreach ($arregloMotos as $objetoMoto) {
            $textoDeMoto = $textoDeMoto . $objetoMoto->__toString();
        }

        //Retorno
        return $textoDeMoto;
    }

    //Método __toString
    public function __toString()
    {
        return
            "Número de venta: " . $this->getNumeroVenta() . "\n" .
            "Fecha de la venta: " . $this->getFechaVenta() . "\n" .
            "Cliente: " . "\n" . $this->textoCliente() . "\n" .
            "Motos vendidas: \n" . $this->textoMotos() . "\n" .
            "Valor total de la venta: " . $this->getPrecioFinal();
    }
}
