<?php
/*
En la clase Empresa:
1. Se registra la siguiente información: denominación, dirección, la colección de 
clientes, colección de
motos y la colección de ventas realizadas.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos 
de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la 
clase.
5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de 
la Empresa y
retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.
6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe 
por
parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de 
la colección
se busca el objeto moto correspondiente al código y se incorpora a la colección de motos 
de la instancia
Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están 
disponibles
para registrar una venta en un momento determinado.
El método debe setear los variables instancias de venta que corresponda y retornar el 
importe final de la
venta.
7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro 
el tipo y
número de documento de un Cliente y retorna una colección con las ventas realizadas al 
cliente.*/

class Empresa {

    private $denominacionEmpresa;
    private $direccionEmpresa;
    private $coleccionClientesEmpresa;
    private $coleccionMotosEmpresa;
    private $coleccionVentasEmpresa;

    //Método constructor de la clase
    public function __construct($denominacion, $direccion, $coleccionClientes, $coleccionMotos, $coleccionVentas)
    {
        $this->denominacionEmpresa = $denominacion;
        $this->direccionEmpresa = $direccion;
        $this->coleccionClientesEmpresa = $coleccionClientes;
        $this->coleccionMotosEmpresa = $coleccionMotos;
        $this->coleccionVentasEmpresa = $coleccionVentas;
    }

    //Getters de la clase
    public function getDenominacionEmpresa()
    {
        return $this->denominacionEmpresa;
    }
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }
    public function getColeccionClientesEmpresa()
    {
        return $this->coleccionClientesEmpresa;
    }
    public function getColeccionMotosEmpresa()
    {
        return $this->coleccionMotosEmpresa;
    }
    public function getColeccionVentasEmpresa()
    {
        return $this->coleccionVentasEmpresa;
    }

    //Setters de la clase
    public function setDenominacionEmpresa($denominacionEmpresa)
    {
        $this->denominacionEmpresa = $denominacionEmpresa;
    }
    public function setDireccionEmpresa($direccionEmpresa)
    {
        $this->direccionEmpresa = $direccionEmpresa;
    }
    public function setColeccionClientesEmpresa($coleccionClientesEmpresa)
    {
        $this->coleccionClientesEmpresa = $coleccionClientesEmpresa;
    }
    public function setColeccionMotosEmpresa($coleccionMotosEmpresa)
    {
        $this->coleccionMotosEmpresa = $coleccionMotosEmpresa;
    }
    public function setColeccionVentasEmpresa($coleccionVentasEmpresa)
    {
        $this->coleccionVentasEmpresa = $coleccionVentasEmpresa;
    }

}