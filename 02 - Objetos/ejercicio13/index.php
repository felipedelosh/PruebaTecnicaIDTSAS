<?php
  include("sales.controller.php");
  include("includes/header.php");
  include("includes/banner.php");
  $salesData = getMostProductSale();
  echo "<h2>".$salesData."</h2>";
  include("includes/footer.php");
?>