<?php

namespace App\Http\Controllers;

class ContactController{

    public function index(){
        return new \App\Http\Response('contact');
    }


}

?>