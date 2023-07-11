<?php
include("db.php");

class ConectorDB{

    /**
     * Return if the conection of DB is alive
     */
    public function health(){
        $conn = getDBConect();
        return isset($conn);
    }


    function saveEmploye($name, $email){
        $conn = getDBConect();
        $fecha_actual = date("d-m-Y h:i:s");
        
        if (isset($conn)){
            echo "<p>conectando...</p>";
        }

        $query = "insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values ('".$name."', '".$email."', '".$fecha_actual."', '".$fecha_actual."');";
        $result = $conn->query($query) === true;

        if($result){
            echo "<p>Se almacenó correctamente en la base de datos: </p>";
            echo "<br>".$name."<br>".$email;
        }else{
            echo "<p>No se almacenó la información en la base de datos.</p>";
        }

    }

    /**
     * Enter a str letter example: $letter = "A"
     * and return in a order list ["nameEmployed",... "nameEmployed"]
     */
    function getAllUsersToNameStartInLetter($letter){
        $conn = getDBConect();
        $query = "select * from usuarios where nombre like '".$letter."%' order by nombre ASC;";

        $result = $conn->query($query);

        $data = [];

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                array_push($data, $row["nombre"]);
            }
        }
    
        return $data;
    }



}
?>