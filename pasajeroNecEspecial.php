<?php

class PasajeroNecesidadEspecial extends Pasajero{
    private $cantServicio;

    public function __construct($nombre,$numAsiento,$numTicket,$cantServicio){
        parent::__construct($nombre,$numAsiento,$numTicket);
        $this->cantServicio=$cantServicio;
    }
    

    public function getCantServicio(){
        return $this->cantServicio;
    }

    public function setCantServicio($cantServicio){
        $this->cantServicio = $cantServicio;
    }

    public function darPorcentajeIncremento(){
        $incremento= parent::darPorcentajeIncremento();
        
        if ($this->getCantServicio()==3){
            $incremento = $incremento + (30/100);
        }
        if ($this->getCantServicio() == 2 || $this->getCantServicio()==1){
            $incremento = $incremento + (15/100);
        }

        return $incremento;
    }
    public function __toString(){
        $cadena ="\n".parent::__toString()."\n";
        $cadena .="CANTIDAD DE SERVICIOS: ".$this->getCantServicio();
        return $cadena;
    }
}