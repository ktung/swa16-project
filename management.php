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
            <h1>Management</h1><br/>
            <p>En tant que manager, vous pouvez ici gérer votre hôtel.</p>
            <br/>
            <button onclick="clearGuestbook()">Effacer tous les messages du livre d'or</button>
            <br />
            <div id= answerClearGuestbook></div>
            <br />
            <button onclick="manageReservations()">Gérer les réservations</button>
            <br />
            <div id= answerManageReservations></div>
            <br />
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>