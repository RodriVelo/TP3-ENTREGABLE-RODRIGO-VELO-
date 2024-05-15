<?php
include 'pasajero.php';
include 'pasajeroVip.php';
include 'pasajeroEstandar.php';
include 'pasajeroNecEspecial.php';
include 'viaje.php';

// VIAJE
$viaje= new Viaje(15000,"Brasil",9,[]);

// IMPLEMENTAMOS LA FUNCION VENDER PASAJE
$viaje->venderPasaje(new PasajeroEstandar("LIONEL MESSI",1,1));
$viaje->venderPasaje(new PasajeroVip("CRISTIANO RONALDO",2,2,24,250));
$viaje->venderPasaje(new PasajeroNecesidadEspecial("NICOLAS JACKSON",3,3,1));
$viaje->venderPasaje(new PasajeroEstandar("ALEXIS MAC ALISSTER",4,4));
$viaje->venderPasaje(new PasajeroVip("NEYMAR JR",5,5,20,300));

echo $viaje;