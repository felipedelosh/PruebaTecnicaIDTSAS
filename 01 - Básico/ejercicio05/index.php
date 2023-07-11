<?php
  include("getAllEmpelado.php");
  include("includes/header.php");
  include("includes/banner.php");

  $letter = "A";
  $list = getAllUsersToNameStartInLetter($letter);

  if (count($list) == 0){
      echo "<p>No hay nombres en la base de datos que empiezan por:".$letter."</p>";
  }else{
      foreach ($list as $l) {
          echo "<h3>".$l."</h3><br>";
      }
  }

  include("includes/footer.php");
?>
