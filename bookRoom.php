<?php
    if (isset($_COOKIE["token"])) {
          $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
          $id= $_COOKIE["token"];
          file_put_contents('php://stderr', print_r($id, TRUE));
          $query = 'SELECT pseudo FROM users WHERE token = "'.$id.'"';
          file_put_contents('php://stderr', print_r($query, TRUE));
          $pseudo = $connexion->query($query)->fetch_object();
          file_put_contents('php://stderr', print_r($pseudo->pseudo, TRUE));
          if ($pseudo->pseudo != "") {
            $price = $_GET["prix"];
            $query = 'INSERT INTO booked (users, price) VALUES ("'.$pseudo->pseudo. '","'.$price.'")';
            $res = $connexion->query($query);
            echo "ok"
            return;
          }
    }
    echo "ko";
?>
