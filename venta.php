<?php 

/* En la clase Venta:
1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario  */

class venta { 
    private $numero;
    private $fecha;
    private $referenciaCliente;
    private $arrayReferenciaMoto;
    private $precioFinal;

    public function __construct($numero,$fecha,$referenciaCliente,$arrayReferenciaMoto,$precioFinal){
        $this->numero=$numero;
        $this->fecha=$fecha;
        $this->referenciaCliente=$referenciaCliente;
        $this->arrayReferenciaMoto=$arrayReferenciaMoto;
        $this->precioFinal=$precioFinal;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getReferenciaCliente()
    {
        return $this->referenciaCliente;
    }

    public function setReferenciaCliente($referenciaCliente)
    {
        $this->referenciaCliente = $referenciaCliente;
    }

    public function getArrayReferenciaMoto()
    {
        return $this->arrayReferenciaMoto;
    }

    public function setArrayReferenciaMoto($arrayReferenciaMoto)
    {
        $this->arrayReferenciaMoto = $arrayReferenciaMoto;

    }


    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;

    }

    /* Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario  */

public function incorporarMoto($objMoto){
    $arrayVentas=[];
    if ($objMoto->getActiva()<>false){
        $arrayVentas[]=$objMoto;
        $this->setArrayReferenciaMoto($arrayVentas);
        $precioActual=$this->getPrecioFinal();
        $this->setPrecioFinal($precioActual+($objMoto->darPrecioVenta()));
    }
}

    public function __toString()
    {
        return ( 
                $this->getNumero()."\n".
                $this->getFecha()."\n".
                $this->getReferenciaCliente()."\n".
                $this->getArrayReferenciaMoto()."\n".
                $this->getPrecioFinal()."\n"
        );
    }
}