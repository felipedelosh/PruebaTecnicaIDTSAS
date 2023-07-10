<?php
include("passwordValidator.php");

if (isset($_POST['password'])){
    echo "<h5>Contraseña enviada satisfactoriamente al servidor...</h5>";
    $password = $_POST['password'];
    $passwordStatus = validatePassword($password);

    if ($passwordStatus){
        //TODO
        //...
        echo "<h3>password status:TRUE</h3>";
    }else{
        echo "<h3>password status:FALSE</h3>";
    }

    

}else{
    echo "<h3>Error Enviando Contraseña al servidor</h3>";
}
?>