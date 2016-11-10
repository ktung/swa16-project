<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
</head>
    <script
    src="https://code.jquery.com/jquery-1.7.js"
    integrity="sha256-fBiF7IYg9AoQ0EWUjT+fe4+cT3vS/x3ftIap8n6V4+M="
    crossorigin="anonymous"></script>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal"><!-- un include ça peut être chouette -->
            <h1 id="bienvenue">Bienvenue dans notre super Hotel</h1><br/>
            <p>Nous vous proposons un hotel atypique</p>
            <br/>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>

<script type="text/javascript">
if (window.location.href.indexOf("pseudo=")) {
    var pseudo_position = location.href.indexOf("pseudo=");
    var pseudo = location.href.substring(pseudo_position+5);
    document.getElementById("bienvenue").innerHTML=" Hello, " + pseudo + "!";
    console.log("ok");
}
console.log("ko");
</script>

</html>