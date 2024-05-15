<?php

class PasajeroVip extends Pasajero {
        private $numViajeroFrecuente;
        private $cantidadMillas;

        public function __construct($nombre,$numAsiento,$numTicket,$numViajeroFrecuente,$cantidadMillas){

            parent::__construct($nombre,$numAsiento,$numTicket);
            $this->numViajeroFrecuente=$numViajeroFrecuente;
            $this->cantidadMillas=$cantidadMillas;
        }

        public function getNumViajeroFrecuente(){
                return $this->numViajeroFrecuente;
        }

        public function setNumViajeroFrecuente($numViajeroFrecuente){
                $this->numViajeroFrecuente = $numViajeroFrecuente;

        }

      
        public function getCantidadMillas(){
                return $this->cantidadMillas;
        }

      
        public function setCantidadMillas($cantidadMillas){
                $this->cantidadMillas = $cantidadMillas;

        }

        public function darPorcentajeIncremento(){
            $incremento= parent::darPorcentajeIncremento();

            if($this->getCantidadMillas() > 300){
                $incremento = $incremento + (20/100);
            }
            else {
                $incremento = $incremento + (25/100);
            }

            return $incremento;

        }

        public function __toString(){
            $cadena ="\n".parent::__toString()."\n";
            $cadena .="NUMERO VIAJERO FRECUENTE: ".$this->getNumViajeroFrecuente();
            $cadena .="CANTIDAD DE MILLAS: ".$this->getCantidadMillas();
            return $cadena;
        }
}