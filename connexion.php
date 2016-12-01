<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>
        function forgotPassword() {
            window.location = "mdpoublie.php"
        }

        function connect(){
            var pseudo = document.getElementById("pseudo").value;
            var pwd = document.getElementById("pwd").value;
            if (pseudo && pwd) {
                var callback = function () {
                    if (200 === xmlhttp.status && xmlhttp.readyState == 4) {
                        if(xmlhttp.responseText === "ok") {
                            document.getElementById("pseudo").value = "";
                            document.getElementById("pwd").value = "";
                            window.location = "index.php?pseudo="+pseudo;
                        } else if(xmlhttp.responseText === "ko") {
                            alert("Aucun compte pour ce pseudo et ce mot de passe!");
                        }
                    }
                };
                var url = window.location.origin;
                url += "/connecterUtilisateur.php?pseudo=" + pseudo + "&pwd=" + pwd;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET', url, true);
                xmlhttp.onreadystatechange = callback;
                xmlhttp.send(null);
            } else {
                alert("Veuillez saisir un pseudo et un mot de passe");
            }
        }

        function goToSubscribe() {
            window.location = "inscription.php";
        }
    </script>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal">
            <h1>Connexion</h1><br/>
            Pseudo :<br><input type="text" id="pseudo" ><br><br>

            Mot de passe :<br><input type="password" id="pwd" ><br><br>
            <button onclick= 'connect()' >Se connecter</button>
            <button onclick='forgotPassword()'>Mot de passe oublié</button>
            <br><br>
            <h1>Vous n'avez pas encore de compte ?</h1><br/>
            <button onclick= 'goToSubscribe()' >S'inscrire</button>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>