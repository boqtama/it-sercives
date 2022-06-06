<?php
    $username = filter_var(trim($_POST['username']),
    FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']),
    FILTER_SANITIZE_STRING);
    $companyName = filter_var(trim($_POST['companyName']),
    FILTER_SANITIZE_STRING);
    $subject = filter_var(trim($_POST['subject']),
    FILTER_SANITIZE_STRING);
    $number = filter_var(trim($_POST['number']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['emailorder']),
    FILTER_SANITIZE_STRING);
    
    
    if($subject == 1) {
        $selected = "Site jasau";
    } else if($subject == 2) {
        $selected = "Baqdarlama";
    } else if($subject == 3) {
        $selected = "Photo men Video";
    } else {
        $selected = "Site jasau";
    }

    $mysql = new mysqli('localhost', 'root', 'root', 'it-qyzmet');
    $mysql->query("INSERT INTO `customers` (`username`, `surname`, `companyName`, `selected`, `number`, `email`)
    VALUES('$username', '$surname', '$companyName', '$selected', '$number', '$email')");

    $mysql->close();

    header('Location: /');

?>