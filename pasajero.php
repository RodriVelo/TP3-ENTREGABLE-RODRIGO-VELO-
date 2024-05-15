<?php

class Pasajero {
    private $nombre;
    private $numAsiento;
    private $numTicket;

    public function __construct($nombre,$numAsiento,$numTicket){
        $this->nombre=$nombre;
        $this->numAsiento=$numAsiento;
        $this->numTicket=$numTicket;
    }

    
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

    }

    public function getNumAsiento(){
        return $this->numAsiento;
    }

    public function setNumAsiento($numAsiento){
        $this->numAsiento = $numAsiento;

    }

    public function getNumTicket(){
        return $this->numTicket;
    }

    public function setNumTicket($numTicket){
        $this->numTicket = $numTicket;

    }

    public function darPorcentajeIncremento(){
        $incremento= 10/100;
        return $incremento;
    }

    public function __toString(){
        $cadena="";
        $cadena .="NOMBRE: ".$this->getNombre()."\n";
        $cadena .="NUMERO DE ASIENTO: ".$this->getNumAsiento()."\n";
        $cadena .="NUMERO DE TICKET: ".$this->getNumTicket()."\n";
        return $cadena;
    }
    
}