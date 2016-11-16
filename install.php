<!DOCTYPE html>
<html>
<head>
    <title> <?php echo($GLOBALS['siteName']); ?> </title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal">
           <p> Bievenue sur la page d'installation de votre propre site de vente d'hotel </p>
	<p> <a href = "./install/phpinfo.php"> Accedez aux informations php </a></p>

    <p> <a href = "./displayCFG.php"> Accedez aux informations de configuration actuelle </a></p>

<form method="post" action="install/config.php">
    <input type="submit" value="Activez la totalité des fonctionnalités" />
</form>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>
