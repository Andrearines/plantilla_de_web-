<?php
require"app.php";
function template( $name ,$inicio=false ){
    include templates_url."/${name}.php";
}