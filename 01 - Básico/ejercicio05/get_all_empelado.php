<?php
include("conectionDB.php");




/**
 * Use a DB conector to get all users with name start in specify letter
 */
function getAllUsersToNameStartInLetter($letter){
    $dbConector = new ConectorDB();
    return $dbConector->getAllUsersToNameStartInLetter($letter);
}

?>