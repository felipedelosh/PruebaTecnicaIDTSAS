<h1>Ejercicio 3: PHP + MySQL</h1>
<span>
Crea una tabla llamada "usuarios" en una base de datos MySQL con los siguientes campos:
id (entero, clave primaria)
nombre (cadena de texto)
correo (cadena de texto)
Escribe un script en PHP que inserte un nuevo usuario en la tabla "usuarios" utilizando datos de entrada del usuario. El programa debe solicitar al usuario que ingrese su nombre y correo electrónico, y luego insertar esos valores en la tabla.
<span>
<p>Nota: crear base de datos en mysql: create database empresa;</p>
<p>Nota: crear tabla empleados: empleados(id, nombre, correo)</p>
<hr>
<h2>Ingrese datos del empleado:</h2>
<form action="save_empleado.php" method="POST">
  <input type="text" name="nombreEmpleado" placeholder="NOMBRE EMPLEADO" autofocus>
  <input type="text" name="correoEmpleado" placeholder="CORREO EMPLEADO">
  <input type="submit" name="save_empleado" value="SAVE">
</form> 