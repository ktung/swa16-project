<?php
    $mail= $_GET["mail"];
    $password = $_GET["pwd"];
    $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
    $query = 'SELECT * FROM users WHERE mail="'.$mail.'" AND password="'.$password.'"';
    $res = $connexion->query($query);
    $row = $res->fetch_object();
    if($row->mail) {
        $result = "ok";
    } else {
        $result = "ko";
    }
    echo ($result);
?>
