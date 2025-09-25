<?php
require_once './vendor/autoload.php';
use App\classes\Result;

if(isset($_GET['page'])){
    if($_GET['page'] == 'result'){

        $homePage = new Result();
        $results = $homePage->getAllCoursesResults();

        include 'pages/result.php';
    }
}