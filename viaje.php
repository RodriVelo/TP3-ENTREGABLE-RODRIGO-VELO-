<?php

/*
La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
 De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de 
dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información
 correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita 
cargar la información del viaje, modificar y ver sus datos.

Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido,
 numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.
  También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree 
  una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido.
   La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
 Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información 
 del responsable del viaje.

 modificado
*/
class Viaje{

    private $costoViaje;
    private $destino;
    private $cantidadMaxima;
    private $colPasajeros;
    private $sumaCostosAbonados;
   
   

    public function __construct($costoV, $destinoV, $cantidadMaximaV, $colPasajerosV){

        $this -> costoViaje = $costoV;
        $this -> destino = $destinoV;
        $this -> cantidadMaxima = $cantidadMaximaV;
        $this -> colPasajeros = $colPasajerosV;
        $this->sumaCostosAbonados=0;
    }
    
   
    public function getCostoViaje(){
        return $this->costoViaje;
    }

    public function setCostoViaje($costoViaje){
        $this->costoViaje = $costoViaje;

    }

    public function getDestino(){
        return $this->destino;
    }


    public function setDestino($destino){
        $this->destino = $destino;

    }


    public function getCantidadMaxima(){
        return $this->cantidadMaxima;
    }

 
    public function setCantidadMaxima($cantidadMaxima){
        $this->cantidadMaxima = $cantidadMaxima;

    }


    public function getColPasajeros(){
        return $this->colPasajeros;
    }

    public function setColPasajeros($colPasajeros){
        $this->colPasajeros = $colPasajeros;

    }

    public function getSumaCostosAbonados(){
        return $this->sumaCostosAbonados;
    }

    public function setSumaCostosAbonados($sumaCostosAbonados){
        $this->sumaCostosAbonados = $sumaCostosAbonados;

    }

    public function hayPasajesDisponible(){
        $colPasajeros=count ( $this->getColPasajeros());
        $valor=false;
        if($colPasajeros<$this->getCantidadMaxima()){
            $valor=true;
        }
        return $valor;
    }


    public function venderPasaje($objPasajero){
        $colPasajeros=$this->getColPasajeros();
        $costo=0;
        $disponibilidad= $this->hayPasajesDisponible();

        if ($disponibilidad == true){
            $incremento= $objPasajero->darPorcentajeIncremento();
            $costo= $this->getCostoViaje()+($this->getCostoViaje()*$incremento);
            $colPasajeros[]=$objPasajero;
            $this->setColPasajeros($colPasajeros);
            $sumaCostosAbonados=$this->getSumaCostosAbonados()+$costo;
            $this->setSumaCostosAbonados($sumaCostosAbonados);
        }
    
        return $costo;




    }

    public function mostrarPasajeros(){
        $mostrar="";
        foreach ($this->getColPasajeros() as $pasajero){
            $mostrar .="\n NOMBRE: " . $pasajero->getNombre() . "\n".
                    "NUMERO ASIENTO: " . $pasajero->getNumAsiento() . "\n".
                    "NUMERO TICKET: " . $pasajero->getNumTicket() . "\n" .
                    "------------------------\n";
        }
        return $mostrar;
           
    }

    public function __toString(){  
        $cadena="\n COSTO DEL VIAJE: ".$this->getCostoViaje()."\n";
        $cadena .="DESTINO: ".$this->getDestino()."\n";
        $cadena .="CANTIDAD MAXIMA: ".$this->getCantidadMaxima()."\n";
        $cadena .="SUMA DE COSTOS: $".$this->getSumaCostosAbonados()."\n";
        $cadena .="------------ \n";
        $cadena .= $this->mostrarPasajeros();

        return $cadena;
    }
}

?>