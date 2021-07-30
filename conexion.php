<?php
    class ConexBD
    {
    	public function get_conexion()
    {
    	 if(strtoupper(substr(PHP_OS,0,3)) == "WIN")
    	 {
    	 	$user = "admin";
    	 	$pass = "";
    	 	$host = "localhost";
    	 	$bd = "paw";
    	 }
         else
         {
         	$user = "admin";
         	$pass = "";
         	$host = "";
         	$bd = "";
         }

         $conexion = new PDO("mysql:host=$host")
    }

    }
?>