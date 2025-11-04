<?php


namespace App\classes;

class Contact {
    public function getFullName($param) {
        return $param['fname'] . " " . $param['lname'];
    }
}