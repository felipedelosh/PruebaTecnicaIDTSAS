<?php
    function getDBConect(){
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'empresa'
        );
        return $conn;
    }
?>