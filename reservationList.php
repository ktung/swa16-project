<!DOCTYPE html>
<html>
<?php
  $connexion = mysqli_connect("db4free.net", "rundlel", "booksmart2016", "booksmarttcd", "3306");
  $id= $_COOKIE["token"];
  $query = 'SELECT pseudo FROM users WHERE token = "'.$id.'"';
  $pseudo = $connexion->query($query)->fetch_object();
  if ($pseudo->pseudo != "") {
    $query = 'SELECT * FROM booked WHERE users = "'.$pseudo->pseudo.'"';
    $queryRes = $connexion->query($query);
    $res = "";
    foreach ($queryRes->fetch_all() as $v) {
        $res = $res.$v[0]." - ".$v[1]."<br>";
    }
  }
?>
<head>
    <title>Mes Réservations</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal">
            <h1>Vos réservations</h1><br/>
            <div align="center">
              <script>
                  document.write("<?php echo $res;?>");
              </script>
            </div>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>
