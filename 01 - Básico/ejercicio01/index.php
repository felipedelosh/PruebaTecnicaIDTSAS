<?php
include("includes/header.php");
include("includes/banner.php");
//insert a number via url arg
$isTouch = isset($_GET["number"]); //comprobate if the user insert number via url param

if($isTouch){
    $number = $_GET["number"];
    try {
        if ((int)$number > 0){
            echo "<h2>".$number."</h2>";
            if (isPrime((int)$number)){
                echo "<h3>Es primo</h3>";
            }else{
                echo "<h3>NO es primo</h3>";
            }
        }else{
            echo "<h3>Error ingreso un valor incorrecto</h3>";
        }

    } catch (Exception $e) {
        echo "<h3>Error<br></h3>".$e;
    }
}else{
    echo "<h3>Error Ingrese el numero por URL</h3>";
    echo '<a href="http://localhost/ejercicio01/?number=10">URL example</a>'; 
}

?>
<!--Functios-->
<?php
/**
 * Enter a int $number
 * retrun true|false if is prime
 */
function isPrime($number){
    if (($number == 1) || ($number > 2 && $number % 2 == 0) || ($number > 3 && $number % 3 == 0) || ($number > 5 && $number % 5 == 0)) {
        return false;
    }elseif ($number == 2 or $number == 3){
        return true;
    }else{
        $cont = 0;
        for ($i = 3; $i <= $number; $i++) {
            if ($number%$i == 0){
                $cont = $cont + 1;

                if ($cont > 1) {
                    return false;
                }
            }
        }
        if ($cont == 1){
            return true;
        }
    }
    return false;
}
include("includes/footer.php");
?>
