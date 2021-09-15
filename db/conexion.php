<?php

    class Conexion{
           private $host= "localhost";
           private $user= "root";
           private $password= "";
           private $db= "api";
           private $conect;

           public function __construct(){
               $connectionString ="mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
               try{
                   $this->connect = new PDO($connectionString,$this->user,$this->password);
                   $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               } catch (Exception $e){
                   $this->conect = 'Error de conexión';
                   echo "ERROR: ". $e->getMessage();
               }          
         }
    }


    $conect = new Conexion();
    
    










?>