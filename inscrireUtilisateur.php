<?php
    $pseudo= $_GET["pseudo"];
    $password = $_GET["pwd"];
    $token = uniqid(rand(), true);
    $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
    $queryCheckExisting = 'SELECT * from users WHERE pseudo="'.$pseudo.'"';
    $existing = $connexion->query($queryCheckExisting);
    $existingAccount = $existing->fetch_object();
    if ($existingAccount->password) {
        echo "existing";
    } else {
        $query = 'INSERT INTO users (pseudo, password, token) VALUES ("' . $pseudo . '","' . $password . '", "'.$token.'")';
        $res = $connexion->query($query);
    }
?>
