<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($email) < 5 || mb_strlen($email) > 90) {
        echo "Unavailable lentgh of email";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', 'root', 'sundetov_db');
    $mysql->query("INSERT INTO `users` (`email`)
    VALUES('$email')");

    $mysql->close();

?>