<?php
/*En la clase Moto:
1. Se registra la siguiente información: código, costo, año fabricación, descripción, 
porcentaje
incremento anual, activa (atributo que va a contener un valor true, si la moto está 
disponible para la
venta y false en caso contrario).
2. Método constructor que recibe como parámetros los valores iniciales para los atributos 
definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la 
clase.
5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser 
vendida una moto.
Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está 
disponible para
la venta, el método realiza el siguiente cálculo:
$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo de la moto.
anio: cantidad de años transcurridos desde que se fabricó la moto.
por_inc_anual: porcentaje de incremento anual de la moto.
*/

class Moto
{

    private $codigoMoto;
    private $costoMoto;
    private $añoMoto;
    private $descripcionMoto;
    private $porcentajeIncrementoAnualMoto;
    private $stockMoto;

    //Método constructor de la clase
    public function __construct($codigo, $costo, $año, $descripcion, $porcentajeIncrementoAnual, $stock)
    {
        $this->codigoMoto = $codigo;
        $this->costoMoto = $costo;
        $this->añoMoto = $año;
        $this->descripcionMoto = $descripcion;
        $this->porcentajeIncrementoAnualMoto = $porcentajeIncrementoAnual;
        $this->stockMoto = $stock;
    }

    //Getters de la clase
    public function getCodigoMoto()
    {
        return $this->codigoMoto;
    }
    public function getCostoMoto()
    {
        return $this->costoMoto;
    }
    public function getAñoMoto()
    {
        return $this->añoMoto;
    }
    public function getDescripcionMoto()
    {
        return $this->descripcionMoto;
    }
    public function getPorcentajeIncrementoAnualMoto()
    {
        return $this->porcentajeIncrementoAnualMoto;
    }
    public function getStockMoto()
    {
        return $this->stockMoto;
    }


    //Setters de la clase
    public function setCodigoMoto($codigoMoto)
    {
        $this->codigoMoto = $codigoMoto;
    }
    public function setCostoMoto($costoMoto)
    {
        $this->costoMoto = $costoMoto;
    }
    public function setAñoMoto($añoMoto)
    {
        $this->añoMoto = $añoMoto;
    }
    public function setDescripcionMoto($descripcionMoto)
    {
        $this->descripcionMoto = $descripcionMoto;
    }
    public function setPorcentajeIncrementoAnualMoto($porcentajeIncrementoAnualMoto)
    {
        $this->porcentajeIncrementoAnualMoto = $porcentajeIncrementoAnualMoto;
    }
    public function setStockMoto($stockMoto)
    {
        $this->stockMoto = $stockMoto;
    }

    public function darPrecioVenta()
    {

        //ini
        $compraMoto = $this->getCostoMoto();
        $añoModeloMoto = $this->getAñoMoto();
        $porIncAnual = ($this->getPorcentajeIncrementoAnualMoto() / 100);
        $motoDisponible = $this->getStockMoto();
        $fechaAcutal = date("Y");
        $fechaVenta = $fechaAcutal - $añoModeloMoto;

        if ($motoDisponible == true) {
            $valorDeVenta = $compraMoto + $compraMoto * ($fechaVenta * $porIncAnual);
        } else {
            $valorDeVenta = -1;
        }

        return $valorDeVenta;
    }

    public function textoStock(){
        $motoEnStock = $this->getStockMoto();
        $mensajeStock = "";

        if ($motoEnStock == true){
            $mensajeStock = "Si";
        } else {
            $mensajeStock = "No";
        }

        return $mensajeStock;
    }

    public function __toString()
    {
        return
            "Código: ".$this->getCodigoMoto() . "\n" .
            "Costo: ". $this->getCostoMoto() . "\n" .
            "Año: ".$this->getAñoMoto() . "\n" .
            "Descripción: ".$this->getDescripcionMoto() . "\n" .
            "Porcentaje de incremento anual: ". $this->getPorcentajeIncrementoAnualMoto() . "\n" .
            "Moto en stock: ".$this->textoStock(). "\n";
    }
}
