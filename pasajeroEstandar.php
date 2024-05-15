<?php

class PasajeroEstandar extends Pasajero{

    public function __construct($nombre,$numAsiento,$numTicket){
        parent::__construct($nombre,$numAsiento,$numTicket);
    }

    public function darPorcentajeIncremento(){
        $incremento= parent::darPorcentajeIncremento();
        return $incremento;
    }
    
    public function __toString(){
        $cadena="\n". parent::__toString();
        return $cadena;
    }
}