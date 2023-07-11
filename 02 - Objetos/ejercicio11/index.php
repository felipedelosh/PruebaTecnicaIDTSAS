<?php
  include("employed.php");
  include("includes/header.php");
  include("includes/banner.php");

  $empleado = new Empleado("Felipe", 2000000, "Ingeniero");

  echo "<h3>".$empleado->stringToString()."</h3>";

  include("includes/footer.php");
?>
