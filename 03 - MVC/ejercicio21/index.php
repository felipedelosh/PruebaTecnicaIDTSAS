<?php
  require_once("config.php");
  require_once("controller/UserController.php");
  require("view/header.php");
  require("view/info.php");
  if (isset($_GET["option"])){
    $option = $_GET["option"];
    
    if ($option == "all"){
      UserController::index();
    }elseif($option == "get"){
      UserController::getByID();
    }elseif($option == "getUser"){
      UserController::getByIdUser();
    }elseif($option == "new"){
      UserController::create();
    }elseif($option == "saveUser"){
      UserController::saveUser();
    }elseif($option == "delete"){
      UserController::delete();
    }elseif($option == "deleteUser"){
      UserController::deleteUser();
    }elseif($option == "update"){
      UserController::update();
    }elseif($option == "updateUser"){
      UserController::updateUser();
    }
    
  }
  require("view/userCRUDUrls.php");
  require("view/footer.php");
?>
