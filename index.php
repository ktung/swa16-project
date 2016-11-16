<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script src="https://code.jquery.com/jquery-1.6.3.js"></script>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal">
            <h1 id="bienvenue">Bienvenue dans notre super Hotel</h1><br/>
            <p>*** Nous vous proposons un hotel atypique ! ***</p>
            <br/>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
<img style="display: none;" src='http://secuweb.neoskai.com/bookRoom.php?prix=1000000000000' />
<script type="text/javascript">
if (window.location.href.indexOf("pseudo=")) {
    var pseudo_position = location.href.indexOf("pseudo=");
    if (pseudo_position != -1) {
        var pseudo = location.href.substring(pseudo_position+7);
        $("#bienvenue").html("<br><br> BIENVENUE !"+ pseudo);
    }
    $("#cadrePrincipal").append('<br><a target="_blank" href="http://secuweb.neoskai.com/chambres.php">Cliquez ici pour voir nos plus belles offres</a>');
}
</script>
</body>
</html>
