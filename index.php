<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
</head>
    <script
    src="https://code.jquery.com/jquery-1.6.3.js"
    integrity="sha256-m6oQ4cVjDD3Nm7Rr8AkTzJSzhV1YyUWa6YSDOcVm6Xs="
    crossorigin="anonymous"></script>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal"><!-- un include ça peut être chouette -->
            <h1 id="bienvenue">Bienvenue dans notre super Hotel</h1><br/>
            <p>*** Nous vous proposons un hotel atypique ! ***</p>
            <br/>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>

<script type="text/javascript">
if (window.location.href.indexOf("pseudo=")) {
    var pseudo_position = location.href.indexOf("pseudo=");
    var pseudo = location.href.substring(pseudo_position+7);
    $("#bienvenue").html(pseudo + "<br><br> BIENVENUE !");
    $("#cadrePrincipal").append('<br><a target="_blank" href="http://secuweb.neoskai.com/chambres.php">Cliquez ici pour voir nos plus belles offres</a>');
}
</script>

</html>