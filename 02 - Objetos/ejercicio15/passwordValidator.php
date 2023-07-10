<?php
function validatePassword($pass){
    $errors = 0;

    define("EXPRaz", "/[a-z]/");
    define("EXPRAZ", "/[A-Z]/");
    define("EXPR09", "/[0-9]/");

    if (strlen($pass) < 8){
        $errors = $errors + 1;
    }else{
        if(!preg_match(EXPRaz, $pass)){
            $errors = $errors + 1;
        }
        if(!preg_match(EXPRAZ, $pass)){
            $errors = $errors + 1;
        }
        if(!preg_match(EXPR09, $pass)){
            $errors = $errors + 1;
        }
    }
    
    return $errors == 0;
}

?>