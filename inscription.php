<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>
        function subscribe() {
            var mail=document.getElementById("email").value;
            var password=document.getElementById("pwd").value;
            if (mail && password) {
                var url = window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
                url += "/inscrireUtilisateur.php?mail=" + mail + "&pwd=" + password;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET', url, true);
                xmlhttp.send(null);
                document.getElementById("email").value = "";
                document.getElementById("pwd").value = "";
                window.location = "index.php";
            } else {
                alert("Veuillez saisir un mail et un password");
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
            Courriel :<br><input  id="email" ><br><br>

            Mot de passe :<br><input  id="pwd" ><br><br>
            <button onclick='subscribe()'>S'inscrire</button>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>