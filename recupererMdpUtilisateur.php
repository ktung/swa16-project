<?php
$pseudo= $_GET["pseudo"];
$password = $_GET["pwd"];
$connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
$query="SELECT password FROM users WHERE pseudo='".$pseudo."'";
$res = $connexion->query($query);
$result="";
while ($list = mysqli_fetch_assoc($res)) {
    $result = $result . $list[password];
}
echo $result;