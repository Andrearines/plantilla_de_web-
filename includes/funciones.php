<?php
define("templates_url",__DIR__."/templetes");


function template( $name ,$inicio=false ){
    include templates_url."/${name}.php";
}
