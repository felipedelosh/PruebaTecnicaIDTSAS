<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Ejercicio 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ejemplo plantilla HTML"/>
  <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3"/>
  <meta name="author" content="FelipedelosH" />
  <meta name="copyright" content="FelipedelosH" />
  <meta name="robots" content="/"/>
</head>
<body>
  <h1>Ejercicio 1: PHP Basics</h1>
  <p>Escribe un programa en PHP que tome un número entero como entrada y determine si es un número primo. El programa debe imprimir "Es primo" si el número es primo, y "No es primo" si no lo es.</p>
  <br>
  <p>Nota: el numero debe de ingresarse por url.<br>ejemplo:<br><br> http://localhost/ejercicio01/?number=555</p> 
  <hr>
  <!--Main Code-->
  <?php
    //insert a number via url arg
    $number = $_GET["number"];
    $isTouch = isset($number);

    if($isTouch){
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
  ?>
</body>
</html>
