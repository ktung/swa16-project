<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>
        function subscribe() {
            var callback = function() {
                if (200 === xmlhttp.status && xmlhttp.readyState == 4) {
                    if (xmlhttp.responseText === "existing") {
                        alert("Compte déjà existant avec ce pseudo");
                    } else {
                        document.getElementById("pseudo").value = "";
                        document.getElementById("pwd").value = "";
                        window.location = "index.php";
                    }
                }
            };
            var pseudo=document.getElementById("pseudo").value;
            var password=document.getElementById("pwd").value;
            if (pseudo && password) {
                var url = window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
                url += "/inscrireUtilisateur.php?pseudo=" + pseudo + "&pwd=" + password;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET', url, true);
                xmlhttp.onreadystatechange = callback;
                xmlhttp.send(null);
            } else {
                alert("Veuillez saisir un pseudo et un password");
            }
        }
    </script>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal"><!-- un include ça peut être chouette -->
            <h1>Inscription</h1><br/>
            Pseudo :<br><input  id="pseudo" ><br><br>

            Mot de passe :<br><input  id="pwd" ><br><br>
            <button onclick='subscribe()'>S'inscrire</button>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>