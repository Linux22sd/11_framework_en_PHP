<?php

namespace App\Http\Controllers;

class ServicesController{

    public function index(){
        return new \App\Http\Response('services');
    }


}

?>