<?php
require"app.php";
function template( $name ,$inicio=false ){
    include templates_url."/${name}.php";
}
function login($value){
    session_start();
$login=$_SESSION($value);
if(!$login){
return false;
}
return true;
}