<?php
include("lib/db.php");

class User{
    private $id; 
    private $nombre;
    private $correo;
    private $timeStampCreate; 
    private $timeStampUpdate;
    private $db; 

    //Simulate method overload
    public function __construct(){
        $funcion_constructor = '__construct'.func_num_args();

        if(method_exists($this,$funcion_constructor)){
            $params = func_get_args();
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }

    
    public function __construct4($nombre, $correo, $timeStampCreate, $timeStampUpdate){
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->timeStampCreate = $timeStampCreate;
        $this->timeStampUpdate = $timeStampUpdate;
    }


    public function crearUsuario($datos){
        $db = getDBConect();
        $query = "insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values (".$datos.");";
        
        if (!isset($db)){
            return false;
        }else{
            $result = $db->query($query);
            if(!$result){
                return false;
            }
            return true;
        }
    }

    public function obtenerUsuario($id){

        $data = "";
        $db = getDBConect();

        if (!isset($db)){
            $data = "No conection DB";
        }else{
            $query = "select * from usuarios where id=".$id;
            $result = $db->query($query);

            $register = $result->fetch_assoc();

            if(!$register){
                $data = "No info DB >".$id;
            }else{
                $data = "El Usuario con ID: ".$register["id"]."<br>Nombre:".$register["nombre"]."<br>Correo:".$register["correo"];
            }
        }

        return $data;
    }

    public function getAllUsers(){
        $data = [];
        $db = getDBConect();
        if (!isset($db)){
            array_push($data, "No conection DB");
        }else{
            $query = "select * from usuarios";
            $result = $db->query($query);

            $data = [];

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $userData = "ID: ".$row["id"].", nombre: ".$row["nombre"].", correo:".$row["correo"];
                    array_push($data, $userData);
                }
            }

        }
        return $data;
    }


    public function actualizarUsuario($id, $datos){
        $db = getDBConect();

        if(!isset($db)){
            return false;
        }else{

            $query = "UPDATE usuarios SET ";
            $updateControl = []; # Save all cols to edit



            if(isset($datos["nameUser"])){
                array_push($updateControl, "nombre = '".$datos["nameUser"]."'");
            }

            if(isset($datos["emailUser"])){
                array_push($updateControl, "correo = '".$datos["emailUser"]."'");
            }

            foreach ($updateControl as $i){
                $query = $query.$i.",";
            }

            //erase last comma
            $query[strlen($query)-1] = " ";

            //add condition
            $query = $query." where id = ". $datos["idUser"].";";

            $result = $db->query($query);

            return $result;
        }
    }

    public function eliminarUsuario($id){
        $db = getDBConect();
        

        if(!isset($db)){
            return false;
        }else{
            $query = "DELETE FROM usuarios where id=".$id.";";
            $result = $db->query($query);
            return $result;
        }
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function setCorreo($correo){
        $this->correo = $correo;
    }


    public function setTimeStampCreate($timeStampCreate){
        $this->timeStampCreate = $timeStampCreate;
    }


    public function setTimeStampUpdate($timeStampUpdate){
        $this->timeStampUpdate = $timeStampUpdate;
    }


    public function getId(){
        return $this->id;
    }


    public function getNombre(){
        return $this->nombre;
    }


    public function getCorreo(){
        return $this->correo;
    }


    public function getTimeStampCreate(){
        return $this->timeStampCreate;
    }


    public function getTimeStampUpdate(){
        return $this->timeStampUpdate;
    }

}
?>