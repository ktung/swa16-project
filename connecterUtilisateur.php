<?php
    $pseudo= $_GET["pseudo"];
    $password = $_GET["pwd"];
    $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
    $query = 'SELECT * FROM users WHERE pseudo="'.$pseudo.'" AND password="'.$password.'"';
    $res = $connexion->query($query);
    $row = $res->fetch_object();
    if($row->pseudo) {
        $result = "ok";
        setcookie("token", $row->token);
    } else {
        $result = "ko";
    }
    echo ($result);
?>
