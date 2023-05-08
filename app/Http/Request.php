<?php

namespace App\Http;

class Request{
    protected $segments = [];
    protected $controller;
    protected $method;

    // 01 Se ejecuta el constructor al crear la instancia
    public function __construct(){
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
    }


    // 02 se ejecutan estos dos metodo que son llamados del constructor
    private function setController(){
        $this->controller = empty($this->segments[1]) ? "home" : $this->segments[1];
    }
    private function setMethod(){
        $this->method =  $this->segments[2] ?? "index";
        //$this->method = empty($this->segments[2]) ? "index" : $this->segments[2];
    }



    public function getController(){
        $controller =  ucfirst($this->controller);
        return "App\Http\Controllers\\{$controller}Controller";
    }
    public function getMethod(){
        return $this->method;
    }


    // 04 asignando variables
    public function send(){
        $controller = $this->getController();
        $method = $this->getMethod();

        $instance = new $controller;
        $response = $instance->$method();

        // $response = call_user_func([
        //     new $controller,
        //     $method
        // ]);

        $response->send();
    }
}

?>