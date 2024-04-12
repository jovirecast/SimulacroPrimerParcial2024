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
    private $objColeccionMoto;
    private $precioMoto;

    //Método constructor de la clase
    public function __construct($numero, $fecha, $cliente, $coleccionMoto, $precio)
    {
        $this->numeroVenta = $numero;
        $this->fechaVenta = $fecha;
        $this->objClienteVenta = $cliente;
        $this->objColeccionMoto = $coleccionMoto;
        $this->precioMoto = $precio;
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
    public function getObjColeccionMoto()
    {
        return $this->objColeccionMoto;
    }
    public function getPrecioMoto()
    {
        return $this->precioMoto;
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
    public function setObjColeccionMoto($coleccionMoto)
    {
        $this->objColeccionMoto = $coleccionMoto;
    }
    public function setPrecioMoto($precioMoto)
    {
        $this->precioMoto = $precioMoto;
    }

    //Métdo para incorporar una moto a la coleccion de motos de la venta
    public function incorporarMoto($objMoto)
    {

        //inicialización variable
        $motoPuedeVenderse = $objMoto->motoEnStock();
        $actualizaPrecio = 0;
        $clienteHabilitado = $this->objClienteVenta->estadoCliente();
        $arrayColeccionMotos = $this->getObjColeccionMoto();
        $retornoMotos = array($arrayColeccionMotos);

        //instrucciones
        if ($motoPuedeVenderse == true && $clienteHabilitado == true) {
            $actualizaPrecio = $objMoto->darPrecioVenta();
            $this->setPrecioMoto($actualizaPrecio);
            array_push($retornoMotos, $objMoto);
            $this->setObjColeccionMoto($retornoMotos);
        }


        //retorno
        return $retornoMotos;
    }

    public function recorridoMotos(){
        $arregloMotos = $this->getObjColeccionMoto();
        $cantArregloMotos = count($arregloMotos);
        $mensajeColeccionMoto = "";

        for ($i=0; $i<$cantArregloMotos;$i++){
            $mensajeColeccionMoto = "Codigo: " . $arregloMotos[$i]->getCodigoMoto() . "\n" .
            "Costo: " . $arregloMotos[$i]->getCostoMoto() . "\n" .
            "Año de fabricación: " . $arregloMotos[$i]->getAñoMoto() . "\n" .
            "Descripción: " . $arregloMotos[$i]->getDescripcionMoto() . "\n" .
            "Porcentaje de incremento anual: " . $arregloMotos[$i]->getPorcentajeIncrementoAnualMoto() . " %" . "\n" .
            "Moto disponible: " . $arregloMotos[$i]->motoSiNo();
        }

        return $mensajeColeccionMoto;
    }
    //Método __toString para retornar los atributos
    public function __toString()
    {


        //retorno usando variables de las instrucciones
        return
            "Número de Venta: " . $this->getNumeroVenta() . "\n" .
            "Fecha de venta: " . $this->getFechaVenta() . "\n" .
            "Cliente: \n" . $this->getObjClienteVenta() . "\n" .
            "Moto vendida: \n" . $this->recorridoMotos() . "\n" .
            "Precio de venta: " . $this->getPrecioMoto() . "\n";
    }
}
