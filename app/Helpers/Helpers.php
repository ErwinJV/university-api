<?php 
namespace App\Helpers;

class Helpers {
     public static function get_version()
     {
          return "Version 8.3.12";
     }

     public static function get_name(string $nombre)
     {
         return 'nombre: '. $nombre;
     }
}