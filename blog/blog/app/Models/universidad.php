<?php
namespace App\Models;

class Universidad
{
   public $nombre;
   public $edad;
   public $pais;
   public $apodo = "Chino";
   public function mostrarCosasquemeGustan(){
       $gustos = ["Dragon ball", "Videojuegos", "Comics", "Star wars"];
       return $gustos;
   }
   public function CancionesFavoritas(){
       $canciones = ["Welcome to the jungle", "the attack of the dead man", "thriller","Enemy"];
       return $canciones;
   }
   public function DragonBallSeries(){
       $dragon = ["Dragon ball", "Dragon ball Z", "Dragon ball Super", "Dragon ball GT(no es canon)", "Dragon ball heroes(tampoco es canon)"];
       return $dragon;
   }
   public function JuegosFavoritos(){
       $favoritos = ["Spiderman PS4", "star wars battlefront 2", "Tron evolution", "lego batman"];
       return $favoritos;
   }
   public function Consolas(){
       $consola = ["Play station 4", "Xbox one s", "Nintendo switch", "xbox 360", "Super nintendo", "Wii u"];
       return $consola;
   }
}

