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

    /**
     * Make a SQLquery and return dic [id, [productName, QuatityOfSales]]
     */
    function getAllProductsXSales(){
        $conn = getDBConect();
        $query = "select p.nombre as nombre, v.cantidad as cantidad from productos p inner JOIN ventas v on p.id = v.producto_id;";

        $result = $conn->query($query);
        
        $data = array(); // {id: [name, qty]}
        $count = 0;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $data[$count] = [];
                array_push($data[$count], $row["nombre"]);
                array_push($data[$count], $row["cantidad"]);
                $count = $count + 1;
            }
        }

        return $data;
    }

}
?>