<?php

function conectaDB(): mysqli{
    $db = new mysqli("localhost","usuario","contraseña","base de datos");

    if(!$db){
        echo"conecion fallida";
        exit;
    }

    return $db;
}
