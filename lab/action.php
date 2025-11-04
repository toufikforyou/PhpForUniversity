<?php require_once 'vendor/autoload.php';

use App\classes\Contact;

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'about') {
        include 'pages/about.php';
    } elseif($_GET['page'] == 'contact'){
        include 'pages/contact.php';
    }
}

if(isset($_POST['submit'])){

    $contact = new Contact();
    $name = $contact->getFullName($_POST);
    
    include 'pages/contact.php';
}