<?php

/* 

En la clase Empresa:
1. Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
motos y la colección de ventas realizadas.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase
5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.
6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
para registrar una venta en un momento determinado.
El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
venta.
7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.

*/

class empresa {

    private $denominacion;
    private $direccion;
    private $arrayColeccionClientes;
    private $arrayColeccionMotos;
    private $arrayVentasRealizas;
    
    public function __construct($denominacion,$direccion,$arrayColeccionClientes,$arrayColeccionMotos,$arrayVentasRealizas){
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->arrayColeccionClientes=$direccion;
        $this->arrayColeccionMotos=$direccion;
        $this->arrayVentasRealizas=$arrayVentasRealizas;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;

    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;

    }

    public function getArrayColeccionClientes(){
        return $this->arrayColeccionClientes;
    }

    public function setArrayColeccionClientes($arrayColeccionClientes){
        $this->arrayColeccionClientes = $arrayColeccionClientes;

    }

    public function getArrayColeccionMotos(){
        return $this->arrayColeccionMotos;
    }

    public function setArrayColeccionMotos($arrayColeccionMotos){
        $this->arrayColeccionMotos = $arrayColeccionMotos;

    }

    public function getArrayVentasRealizas(){
        return $this->arrayVentasRealizas;
    }

    public function setArrayVentasRealizas($arrayVentasRealizas){
        $this->arrayVentasRealizas = $arrayVentasRealizas;

    }

    /* 5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
        retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro. */

    public function retornarMoto($codigoMoto){
        $i=0;
        $banderita=false;
        $arrayMotos=$this->getArrayColeccionMotos();
        while ($i<(count($arrayMotos)) && $banderita<>false){
            $objMotoInd = $arrayMotos[$i];
            if (($objMotoInd->getCodigoMoto())==$codigoMoto){
                $banderita=true;
            }
            $i++;
        }
        
        return $i;
    }

            /* 6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
        parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
        se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
        Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
        para registrar una venta en un momento determinado.
        El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
        venta.   */

    public function registrarVenta($colCodigosMoto,$objCliente){
        $i=0;
        $banderita=false;
        $arrayColeccionMotosEmpresa= $this->getArrayColeccionMotos();
        foreach ($colCodigosMoto as $moto){
            if($objCliente->getEstadoDeBaja()==true){
                 if($moto==$arrayColeccionMotosEmpresa[$i]){
            
                 }
            }
            $i++;
        }

        }
    

    public function __toString(){
        return (
                $this->getDenominacion()."\n".
                $this->getDireccion()."\n".
                $this->getArrayColeccionClientes()."\n".
                $this->getArrayColeccionMotos()."\n".
                $this->getArrayVentasRealizas()."\n"
        );
        
    }
}