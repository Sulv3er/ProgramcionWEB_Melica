<?php
include_once("../Model/model_comentarios.php");

    class ControllerHome{
        var $modelComentarios;

        function __construct(){
            $this->modelComentarios = new ModelComentarios();
        }

        function guardarComentario($REQ){
            $this->modelComentarios->guardarComentario($REQ);
        }
        
    }

    $objController = new ControllerHome();

        switch(strtoupper($_REQUEST['opcion'])){
            case 'GUARDAR_COMENTARIO':
                $objController->guardarComentario($_REQUEST);
                break;
            default:
                echo "Opción no válida";
                break;
        }
?>