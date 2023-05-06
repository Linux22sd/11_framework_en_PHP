<?php

namespace App\Http;

class Request{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct(){
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();

        var_dump($this->controller);
        var_dump($this->method);
          
    }

    private function setController(){
        $this->controller = empty($this->segments[1]) ? "home" : $this->segments[1];
    }
    private function setMethod(){
        $this->method = empty($this->segments[2]) ? "index" : $this->segments[2];
    }
    public function send(){
     
    }
}

?>