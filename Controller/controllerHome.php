<?php
include_once("../Model/model_comentarios.php");
include_once("../Model/modelEjemplos.php");
include_once("../Model/modelTemaSubtema.php");
include_once("../Model/model_usuario.php");

session_start();

    class ControllerHome{
        var $modelComentarios;
        var $modelEjemplos;
        var $modelTemaSubtema;
        var $modelUsuarios;

        function __construct(){
            $this->modelComentarios = new ModelComentarios();
            $this->modelEjemplos = new ModelEjemplos();
            $this->modelTemaSubtema = new ModelTemaSubtema();
            $this->modelUsuarios = new ModelUsuario();
        }

        // Funciones a vistas
        function viewCRUD_Ejemplos(){
            $registros = $this->modelEjemplos->consultarEjemplos();
            include_once("../HTML/CRUD_Ejemplos.php");
        }

        function viewCRUD_Temas(){
            $registros = $this->modelTemaSubtema->consultarTemas();
            include_once("../HTML/CRUD_Temas.php");
        }

        function viewCRUD_Subtemas(){
            $temas = $this->modelTemaSubtema->consultarTemas();        
            $registros = $this->modelTemaSubtema->consultarSubtemas();  
            include_once("../HTML/CRUD_Subtemas.php");
        }

        function viewVerComentarios(){
            $registros = $this->modelComentarios->consultarComentarios();
            include_once("../HTML/VerComentario.php");
        }

        // Funciones de registro
        function guardarRegistro($REQ){
            $this->modelUsuarios->registrarUsuario($REQ);
            header("Location: ../HTML/login.php");
            exit();
        }

        // Funciones de login
        function validarUsuario($REQ) {
            $email = $REQ['email'] ?? '';
            $contraseña = $REQ['contraseña'] ?? '';

            $usuario = $this->modelUsuarios->verificarUsuario($email, $contraseña);

            if ($usuario) {
                $_SESSION['usuario'] = $usuario;

                if (!empty($usuario['es_admin']) && $usuario['es_admin']) {
                    // Redirigir a interfaz de administrador
                    header("Location: controllerHome.php?opcion=VER_COMENTARIOS");
                } else {
                    // Redirigir a inicio normal
                    header("Location: ../index.php");
                }

                exit();
            } else {
                $_SESSION['error_login'] = "Correo o contraseña incorrectos";
                header("Location: ../HTML/login.php");
                exit();
            }
        }

        function cerrar(){
            session_destroy();
            header('Location: ../index.php');
        }

        // Funciones de perfil
        function editarUsuario($id){
            $registro = $this->modelUsuarios->consultarUsuario($id);
            include_once("../HTML/editarPerfil.php");
        }

        function modificarUsuario($REQ){
            $this->modelUsuarios->editarUsuario($REQ);
            header("Location: controllerHome.php?opcion=VER_COMENTARIOS");
            exit();
        }


        // Funciones de comentarios
        function guardarComentario($REQ){
            $this->modelComentarios->guardarComentario($REQ);
        }

        function verComentarios() {
            $comentarios = $this->modelComentarios->consultarComentarios();
            include_once("../HTML/comunidad.php");
        }

        function verComentarios2() {
            $comentarios = $this->modelComentarios->consultarComentarios();
            include_once("../HTML/comunidad2.php");
        }

        function eliminarComentario($id) {
            $this->modelComentarios->eliminarComentario($id);
            header("Location: controllerHome.php?opcion=VER_COMENTARIOS");
            exit();
        }


        // Funciones de CRUD ejemplos
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

        // Funciones de CRUD Temas
        function guardarTema($REQ){
            $this->modelTemaSubtema->guardarTema($REQ);
            header("Location: controllerHome.php?opcion=CRUD_TEMAS");
            exit();
        }

        function editarTema($id){
            $registro = $this->modelTemaSubtema->consultarTema($id);
            include_once("../HTML/editarEjemplo.php");
        }

        function modificarTema($REQ){
            $this->modelTemaSubtema->editarTema($REQ);
            header("Location: controllerHome.php?opcion=CRUD_TEMAS");
            exit();
        }

        function eliminarTema($id){
            $this->modelTemaSubtema->eliminarTema($id);
            header("Location: controllerHome.php?opcion=CRUD_TEMAS");
            exit();
        }


        // Funciones de CRUD Subtemas
        function guardarSubTema($REQ){
            $this->modelTemaSubtema->guardarSubtema($REQ);
            header("Location: controllerHome.php?opcion=CRUD_SUBTEMAS");
            exit();
        }

        function editarSubtema($id){
            $registro = $this->modelTemaSubtema->consultarSubtema($id);
            include_once("../HTML/editarEjemplo.php");
        }

        function modificarSubtema($REQ){
            $this->modelTemaSubtema->editarSubtema($REQ);
            header("Location: controllerHome.php?opcion=CRUD_SUBTEMAS");
            exit();
        }

        function eliminarSubtema($id){
            $this->modelTemaSubtema->eliminarSubtema($id);
            header("Location: controllerHome.php?opcion=CRUD_SUBTEMAS");
            exit();
        }
    }

    $objController = new ControllerHome();

        switch(strtoupper($_REQUEST['opcion'])){
            case 'GUARDAR_REGISTRO':
                $objController->guardarRegistro($_REQUEST);
                break;
            case 'VALIDAR_USUARIO':
                $objController->validarUsuario($_REQUEST);
                break;
            case 'EDITAR_USUARIO':
                $objController->editarUsuario($_REQUEST['id']);
                break;
            case 'MODIFICAR_USUARIO':
                $objController->modificarUsuario($_REQUEST);
                break;
            case 'COMENTARIOS':
                $objController->verComentarios();
                break;
            case 'COMUNIDAD2':
                $objController->verComentarios2();
                break;
            case 'GUARDAR_COMENTARIO':
                $objController->guardarComentario($_REQUEST);
                header("Location: controllerHome.php?opcion=COMUNIDAD2");
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
            case 'CRUD_TEMAS':
                $objController->viewCRUD_Temas();
                break;
            case 'GUARDAR_TEMA':
                $objController->guardarTema($_REQUEST);
                header("Location: controllerHome.php?opcion=CRUD_TEMAS");
                break;
            case 'EDITAR_TEMA':
                $objController->editarTema($_REQUEST['id']);
                break;
            case 'MODIFICAR_TEMA':
                $objController->modificarTema($_REQUEST);
                break;
            case 'ELIMINAR_TEMA':
                $objController->eliminarTema($_REQUEST['id']);
                break;
            case 'CRUD_SUBTEMAS':
                $objController->viewCRUD_Subtemas();
                break;
            case 'GUARDAR_SUBTEMA':
                $objController->guardarSubtema($_REQUEST);
                header("Location: controllerHome.php?opcion=CRUD_SUBTEMAS");
                break;
            case 'EDITAR_SUBTEMA':
                $objController->editarSubtema($_REQUEST['id']);
                break;
            case 'MODIFICAR_SUBTEMA':
                $objController->modificarSubtema($_REQUEST);
                break;
            case 'ELIMINAR_SUBTEMA':
                $objController->eliminarSubtema($_REQUEST['id']);
                break;
            case 'VER_COMENTARIOS':
                $objController->viewVerComentarios();
                break;
            case 'ELIMINAR_COMENTARIO':
                $objController->eliminarComentario($_REQUEST['id']);
                break;
            Case 'CERRAR_SESION':
                $objController->cerrar();
                break;
            default:
                echo "Opción no válida";
                break;
        }
?>