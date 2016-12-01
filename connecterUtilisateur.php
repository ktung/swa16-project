<?php
$pseudo= $_GET["pseudo"];
$password = $_GET["pwd"];
$connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
$query = 'SELECT * FROM users WHERE pseudo="'.$pseudo.'" AND password="'.$password.'"';
$res = $connexion->query($query);
$row = $res->fetch_object();
if($row->pseudo) {
    $result = "ok";
    setcookie("token", $row->token, time() + 7*24*60*60);
    setcookie("pseudo", $pseudo, time() + 7*24*60*60);
} else {
    $result = "ko";
}
echo ($result);