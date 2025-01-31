<?php
define("templates_url",__DIR__."/templetes");
require"app.php";

function template( $name ,$inicio=false ){
    include templates_url."/${name}.php";
}
