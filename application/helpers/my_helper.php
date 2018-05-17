<?php
/**
 * Created by PhpStorm.
 * User: rafaelescuadra
 * Date: 15/05/2018
 * Time: 11:29 AM
 */
function input_prep($string){ //use to handle inputs before going to database
    if(is_array($string)){
        foreach ($string as $key => $value) {
            $string[$key] = clean_string($value);
        }
    }else{
        $string = clean_string($string);
}

    return $string;

}


function clean_string($string)
{
    $string = trim($string);
    $string = str_replace("'", "''", $string);
    return $string;
}

function debug($data,$die=FALSE){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    if($die){
        die();
    }
}