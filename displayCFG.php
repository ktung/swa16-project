<!DOCTYPE html>
<html>
<head>
    <title>Management</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>

    </script>
</head>
<body>

<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal">
            <?php
                $filename = './install/config.txt';
                if (strpos(file_get_contents($filename),"activated") !== false) : ?>

                        <h1>Account Management</h1><br/>
                        <p>Votre nom de compte admin est "secretholder".</p>
                        <p>Vous êtes le seul à disposer de votre mot de passe.</p>
                        <br />
                        
                <?php  else : ?>
                    <p>Vous ne pouvez pas afficher cette page. </p>
                <?php endif; ?>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>