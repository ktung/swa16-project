<!DOCTYPE html>
<html>
<?php
?>
<head>
    <title>Mot de passe oublié</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>
        function getForgottenPassword() {
            var mail = document.getElementById("email").value;
            if (mail) {
                var callback = function () {
                    if (200 == xmlhttp.status && xmlhttp.readyState == 4) {
                        if (xmlhttp.responseText == "") {
                            alert("Aucun compte associé à ce mail !");
                        } else {
                            alert("Mot de passe récupéré: " + xmlhttp.responseText);
                            document.getElementById("email").value = "";
                        }
                    }
                };
                var url = window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
                url += "/recupererMdpUtilisateur.php?mail=" + mail;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET', url, true);
                xmlhttp.send(null);
                xmlhttp.onreadystatechange = callback;
            } else {
                alert("Veuillez saisir un mail");
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
            <h1>Mot de passe oublié</h1><br/>
            Adresse mail :<br><input  id="email" ><br><br>
            <button onclick='getForgottenPassword()'>Récupérer mot de passe</button>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>