<?php
include("conectionDB.php");

/**
 * GET all products in BD
 * return str description of: the most sell product.
 */
function getMostProductSale(){
    $conn = new ConectorDB();

    if ($conn->health()){
        $bruteData = $conn->getAllProductsXSales(); // {id, [n,v]}
        $noProccesData = array(); //temp dic to sum all sales

        //Keys of dic
        foreach ($bruteData as $key => $value) {
            if (!array_key_exists($value[0], $noProccesData)){ //create a dictionary.key
                $noProccesData[$value[0]]=0; //init 0
            }
            //sum
            $noProccesData[$value[0]]=$noProccesData[$value[0]]+$value[1];
        }

        //GET top with brute force
        $nameTopProduct = "";
        $qtyTopProduct = 0;
        foreach ($noProccesData as $key => $value){
            if ($value > $qtyTopProduct){
                $nameTopProduct = $key;
                $qtyTopProduct = $value;
            }
        }

        return "El producto más vendido es: ".$nameTopProduct." Cantidad total de ventas: ".$qtyTopProduct;
    }else{
        return "NO DATABASE CONECTION";
    }
}

?>