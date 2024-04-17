<?php 
/*En la clase Moto:
1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para la
venta y false en caso contrario).
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase.
5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
la venta, el método realiza el siguiente cálculo:
$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo de la moto.
anio: cantidad de años transcurridos desde que se fabricó la moto.
por_inc_anual: porcentaje de incremento anual de la moto*/ 

class moto {
    private $codigoMoto;
    private $costoMoto;
    private $añoFabricacionMoto;
    private $descripcionMoto;
    private $porcentajeIncrementoAnual;
    private $activa;

    public function __construct($codigoMoto,$costoMoto,$añoFabricacionMoto,$descripcionMoto,$porcentajeIncrementoAnual,$activa){
        $this->codigoMoto=$codigoMoto;
        $this->costoMoto=$costoMoto;
        $this->añoFabricacionMoto=$añoFabricacionMoto;
        $this->descripcionMoto=$descripcionMoto;
        $this->porcentajeIncrementoAnual=$porcentajeIncrementoAnual;
        $this->activa=$activa;
    }


    public function getCodigoMoto(){
        return $this->codigoMoto;
    }

    public function setCodigoMoto($codigoMoto)
    {
        $this->codigoMoto = $codigoMoto;

     
    }

    public function getCostoMoto()
    {
        return $this->costoMoto;
    }

    public function setCostoMoto($costoMoto)
    {
        $this->costoMoto = $costoMoto;

        return $this;
    }

    
    public function getAñoFabricacionMoto()
    {
        return $this->añoFabricacionMoto;
    }

    public function setAñoFabricacionMoto($añoFabricacionMoto)
    {
        $this->añoFabricacionMoto = $añoFabricacionMoto;

    }

    public function getDescripcionMoto()
    {
        return $this->descripcionMoto;
    }

  
    public function setDescripcionMoto($descripcionMoto)
    {
        $this->descripcionMoto = $descripcionMoto;

    }

    public function getPorcentajeIncrementoAnual()
    {
        return $this->porcentajeIncrementoAnual;
    }

    public function setPorcentajeIncrementoAnual($porcentajeIncrementoAnual)
    {
        $this->porcentajeIncrementoAnual = $porcentajeIncrementoAnual;

    }

    public function getActiva()
    {
        return $this->activa;
    }

    public function setActiva($activa)
    {
        $this->activa = $activa;

    }

    /*5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
la venta, el método realiza el siguiente cálculo:
$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo de la moto.
anio: cantidad de años transcurridos desde que se fabricó la moto.
por_inc_anual: porcentaje de incremento anual de la moto*/ 

public function darPrecioVenta(){
    $venta=-1;
    if($this->getActiva()<> false){
        $venta= ($this->getCostoMoto())  +  ($this->getCostoMoto())  *  ((date("Y")-$this->getAñoFabricacionMoto()) *$this->getPorcentajeIncrementoAnual());
    }
    return $venta;
}

public function __toString(){
    return ( 
            $this->getCodigoMoto()."\n".
            $this->getCostoMoto()."\n".
            $this->getAñoFabricacionMoto()."\n".
            $this->getDescripcionMoto()."\n".
            $this->getPorcentajeIncrementoAnual()."\n".
            $this->getActiva()."\n"
    );
    
}
}