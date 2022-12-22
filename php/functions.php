<?php

function invalidEmail($email){
    $result = null;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result =true;
    }
    else{
        $result = false;
    }
return $result;

}

function invalidNumber($number){
    $result = null;

    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $number)){
        $result =true;
    }
    else{
        $result = false;
    }
return $result;

}



