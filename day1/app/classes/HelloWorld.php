<?php

namespace App\Classes;

class HelloWorld {
    public $message;
    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index()
    {
        echo $this->message;
    }
}