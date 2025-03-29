<?php
namespace controllers;
use MVC\Router;

class paginas{
    public function index(Router $router){
        $router->view('home/index.php',['inicio'=> true]);
    }
}