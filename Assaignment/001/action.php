<?php

require_once 'vendor/autoload.php';

use App\Classes\Assaignment;

if(isset($_GET['page'])) {
    if($_GET['page'] == 'division') {
        $assaignment = new Assaignment();
        $divisions = $assaignment->getBangladeshDivision();
        
        include 'pages/division.php';
    }
}