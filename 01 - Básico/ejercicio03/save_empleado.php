<?php
include("conectionDB.php");


if (isset($_POST['save_empleado'])){
    $nombreEmpleado = $_POST['nombreEmpleado'];
    $correoEmpleado = $_POST['correoEmpleado'];
    $conn = new ConectorDB();

    if ($conn->health()){
        echo "<h2>Conectado a la base de datos.</h2>";
        $conn->saveEmploye($nombreEmpleado, $correoEmpleado);
    }else{
        echo "<h2>Error Fatal no hay conexión a la base de datos.</h2>";
    }



}

?>