<?php
    $mail= $_GET["mail"];
    $password = $_GET["pwd"];
    $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
    $queryCheckExisting = 'SELECT * from users WHERE mail="'.$mail.'"';
    $existing = $connexion->query($queryCheckExisting);
    $existingAccount = $existing->fetch_object();
    if ($existingAccount->password) {
        echo "existing";
    } else {
        $query = 'INSERT INTO users (mail, password) VALUES ("' . $mail . '","' . $password . '")';
        $res = $connexion->query($query);
    }
?>
