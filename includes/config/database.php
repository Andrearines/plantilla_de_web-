<?php

function conectaDB(): mysqli{
    $db = mysqli_connect("localhost","usuario","contraseña","base de datos");

    if($db){
        echo"<p>conecion exitosa con la base de datos</p>";
    }else{
        echo"conecion fallida";
        exit;
    }

    return $db;
}
