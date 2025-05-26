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

        function viewCRUD_Ejemplos(){
            $registros = $this->modelEjemplos->consultarEjemplos();
            include_once("../HTML/CRUD_Ejemplos.php");
        }

        function guardarComentario($REQ){
            $this->modelComentarios->guardarComentario($REQ);
        }
        
        function verEjemplos() {
            $ejemplos = $this->modelEjemplos->consultarEjemplos();
            include_once("../HTML/ejemplos.php");
        }


        function guardarEjemplo($REQ){
            $this->modelEjemplos->guardarEjemplo($REQ);
        }

        function editarEjemplo($id){
            $registro = $this->modelEjemplos->consultarEjemplo($id);
            include_once("../HTML/editarEjemplo.php");
        }

        function modificarEjemplo($REQ){
            $this->modelEjemplos->editarEjemplo($REQ);
            header("Location: controllerHome.php?opcion=CRUD_EJEMPLOS");
            exit();
        }

        function eliminarEjemplo($id){
            $this->modelEjemplos->eliminarEjemplo($id);
            header("Location: controllerHome.php?opcion=CRUD_EJEMPLOS");
            exit();
        }
    }

    $objController = new ControllerHome();

        switch(strtoupper($_REQUEST['opcion'])){
            case 'GUARDAR_COMENTARIO':
                $objController->guardarComentario($_REQUEST);
                header("Location: ../HTML/comunidad2.php");
                exit();
            case 'EJEMPLOS':
                $objController->verEjemplos();
                break;
            case 'CRUD_EJEMPLOS':
            $objController->viewCRUD_Ejemplos();
            break;
            case 'GUARDAR_EJEMPLO':
                $objController->guardarEjemplo($_REQUEST);
                header("Location: controllerHome.php?opcion=CRUD_EJEMPLOS");
                exit();
            case 'EDITAR_EJEMPLO':
                $objController->editarEjemplo($_REQUEST['id']);
                break;
            case 'MODIFICAR_EJEMPLO':
                $objController->modificarEjemplo($_REQUEST);
                break;
            case 'ELIMINAR_EJEMPLO':
                $objController->eliminarEjemplo($_REQUEST['id']);
                break;
            default:
                echo "Opción no válida";
                break;
        }
?>