<?php
/*En la clase Cliente:
0. Se registra la siguiente información: nombre, apellido, si está o no dado de baja, el 
tipo y el número de
documento. 
Si un cliente está dado de baja, no puede registrar compras desde el momento 
de su baja.
1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _toString para que retorne la información de los atributos de la 
clase.*/


class Cliente
{

    private $nombreCliente;
    private $apellidoCliente;
    private $condicionCliente;
    private $tipoDocumentoCliente;
    private $numeroDocumentoCliente;

    //Método constructor de la clase
    public function __construct($nombre, $apellido, $condicion, $tipoDocumento, $numeroDocumento)
    {
        $this->nombreCliente = $nombre;
        $this->apellidoCliente = $apellido;
        $this->condicionCliente = $condicion;
        $this->tipoDocumentoCliente = $tipoDocumento;
        $this->numeroDocumentoCliente = $numeroDocumento;
    }

    //Getters de la clase
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }
    public function getApellidoCliente()
    {
        return $this->apellidoCliente;
    }
    public function getCondicionCliente()
    {
        return $this->condicionCliente;
    }
    public function getTipoDocumentoCliente()
    {
        return $this->tipoDocumentoCliente;
    }
    public function getNumeroDocumentoCliente()
    {
        return $this->numeroDocumentoCliente;
    }

    //Setters de la clase
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    }
    public function setApellidoCliente($apellidoCliente)
    {
        $this->apellidoCliente = $apellidoCliente;
    }
    public function setCondicionCliente($condicionCliente)
    {
        $this->condicionCliente = $condicionCliente;
    }
    public function setTipoDocumentoCliente($tipoDocumentoCliente)
    {
        $this->tipoDocumentoCliente = $tipoDocumentoCliente;
    }
    public function setNumeroDocumentoCliente($numeroDocumentoCliente)
    {
        $this->numeroDocumentoCliente = $numeroDocumentoCliente;
    }

    //Método para mostrar un valor string al booleano de la condición del cliente
    public function textoAltaBaja()
    {
        //Inicialización de variables
        $motoEnStock = $this->getCondicionCliente();
        $mensajeStock = "";

        //instrucciones
        if ($motoEnStock == true) {
            $mensajeStock = "Alta";
        } else {
            $mensajeStock = "Baja";
        }

        //Retorno
        return $mensajeStock;
    }

    //Método __toString
    public function __toString()
    {
        //Retorno
        return
            "Nombre: " . $this->getNombreCliente() . "\n" .
            "Apellido: " . $this->getApellidoCliente() . "\n" .
            "Estado del cliente (Alta/Baja): " . $this->textoAltaBaja() . "\n" .
            "Tipo de documento: " . $this->getTipoDocumentoCliente() . "\n" .
            "Número de documento: " . $this->getNumeroDocumentoCliente() . "\n";
    }
}
