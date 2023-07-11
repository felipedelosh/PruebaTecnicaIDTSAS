<?php
require_once("model/User.php");

class UserController
{
    private $user;

    public function __construct(){
       
    }

    /**
     * Send data to template
     */
    static function index(){
        $user = new User();
        $data = $user->getAllUsers();

        require_once("view/showALLUsers.php");
    }

    /**
     * Render a form to save user
     */
    static function create(){
        require_once("view/createUserForm.php");
    }

    /**
     * Only show a form to search user
     */
    static function getByID(){
        require_once("view/getUserForm.php");
    }

    static function getByIdUser(){
        $id = $_REQUEST["idUser"];
        $user = new User();

        $data = $user->obtenerUsuario($id);
        
        echo "<h3>".$data."</h3>";
    }

    static function saveUser(){

        $nombre = $_REQUEST["nameUser"];
        $correo = $_REQUEST["emailUser"];
        $timeStampCreate = date("d-m-Y h:i:s");
        $timeStampUpdate = date("d-m-Y h:i:s");
        $user = new User();
        $datos = "'".$nombre."', '".$correo."', '".$timeStampCreate."', '".$timeStampUpdate."'";

        if(!$user->crearUsuario($datos)){
            echo "<h2>ERROR INGRESANDO A LA BASE DE DATOS</h2>";
        }else{
            echo "<h2>Enviado a la base de datos</h2>";
        }
    }


    static function delete(){
        require_once("view/deleteUserForm.php");
    }


    static function deleteUser(){
        $id = $_REQUEST["idUser"];

        $user = new User();

        if(!$user->eliminarUsuario($id)){
            echo "<h2>No se eliminó el usuario: ".strval($id)."</h2>";
        }else{
            echo "<h2>EL Usuario: ".strval($id)." Fue eliminado de la base de datos.</h2>";
        }
    }

    static function update(){
        require_once("view/updateUserForm.php");
    }


    static function updateUser(){

        $args = array(
            "idUser" => $_REQUEST["idUser"],
            "nameUser" => $_REQUEST["nameUser"],
            "emailUser" => $_REQUEST["emailUser"],
            "passwordUser" => $_REQUEST["passwordUser"]
        );

        $user = new User();

        if(!$user->actualizarUsuario($_REQUEST["idUser"], $args)){
            echo "<h2>No se edito el usuario: ".$_REQUEST["idUser"]."</h2>";
        }else{
            echo "<h2>datos actualizados usuario: ".$_REQUEST["idUser"]."</h2>";
        }
        
    }

}
?>