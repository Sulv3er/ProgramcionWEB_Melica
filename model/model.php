<?php
class Model{
    var $server = ""; //servidor
    var $host = "localhost"; // Servidor de la base de datos
    var $dbname = "codesprout"; // Nombre base de datos
    var $username = "root"; // Usuario de la base de datos
    var $password = "12345678"; // Contraseña del usuario
    
    var $con; // Variable de conexión

    function __construct(){
        try{
            $this->con = new mysqli($this->server, $this->username, $this->password, $this->dbname);
            //echo "Conexion exitosa";
        }catch(Exception $e){
            //echo ":(";
        }
    }
}
?>