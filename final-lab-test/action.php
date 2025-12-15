<?php
require_once 'vendor/autoload.php';

if(isset($_GET['page'])) {
    if ($_GET['page'] == 'mquery'){
        include 'pages/mQuery.php';
    }
}