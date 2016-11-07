<?php
    $mail= $_GET["mail"];
    $password = $_GET["pwd"];
    $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
    $query = 'INSERT INTO users (mail, password) VALUES ("'.$mail.'","'.$password.'")';
    echo $query;
    $res = $connexion->query($query);
?>
