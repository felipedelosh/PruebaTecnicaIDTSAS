<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Pagina</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ejemplo plantilla HTML"/>
  <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3"/>
  <meta name="author" content="FelipedelosH" />
  <meta name="copyright" content="FelipedelosH" />
  <meta name="robots" content="/"/>
</head>
<body>
  <h1>Ejercicio 5: PHP + MySQL</h1>
  <p>Escribe una consulta en PHP para seleccionar todos los usuarios de la tabla "usuarios" cuyo nombre comienza con la letra "A" y ordenarlos alfabéticamente de forma ascendente. Imprime los resultados en forma de una lista ordenada.</p>
  <hr>
  <?php
    include("getAllEmpelado.php");

    $letter = "A";
    $list = getAllUsersToNameStartInLetter($letter);

    if (count($list) == 0){
        echo "<p>No hay nombres en la base de datos que empiezan por:".$letter."</p>";
    }else{
        foreach ($list as $l) {
            echo "<h3>".$l."</h3><br>";
        }
    }
  ?>
</body>
</html>