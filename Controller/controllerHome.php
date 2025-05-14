<?php
include_once("../Model/model_comentarios.php");
include_once("../Model/modelEjemplos.php");

    class ControllerHome{
        var $modelComentarios;
        var $modelEjemplos;

        function __construct(){
            $this->modelComentarios = new ModelComentarios();
            $this->modelEjemplos = new ModelEjemplos();
        }

        function guardarComentario($REQ){
            $this->modelComentarios->guardarComentario($REQ);
        }
        
        function guardarEjemplo($REQ){
            $this->modelEjemplos->guardarEjemplo($REQ);
        }
    }

    $objController = new ControllerHome();

        switch(strtoupper($_REQUEST['opcion'])){
            case 'GUARDAR_COMENTARIO':
                $objController->guardarComentario($_REQUEST);
                header("Location: ../HTML/comunidad2.php");
                exit();
            case 'GUARDAR_EJEMPLO':
                $objController->guardarEjemplo($_REQUEST);
                header("Location: ../HTML/comunidad2.php");
                exit();
            default:
                echo "Opción no válida";
                break;
        }
?>