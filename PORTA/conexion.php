<?php 
#conexion a base de datos
$local = "localhost";
$root = "root";
$passward = "";
$BDatos = "clientes";


    #try nos ayudara saber si tenemos fallo en el codigo, en esto caso si tenemos error en la conxion
    try{
        $connx = new PDO("mysql:host=$local; dbname=$BDatos",$root,$passward);
    }catch(PDOException $err){

        die("EXISTE UN ERROR EN: ".$err->getMessage());
        
    }


?>