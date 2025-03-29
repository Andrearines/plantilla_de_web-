<?php
require_once __DIR__. '/../includes/app.php';
use MVC\Router;
use controllers\paginas;
$r=new Router;
$R->get("/",[paginas::class,'index']);
$r->Rutas();