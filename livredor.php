<!DOCTYPE html>
<html>
<?php
$file="messages.txt";
$messages=file_get_contents($file);
?>
<head>
    <title>Livre d'or</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
    <script>
        function save(){
            var callback = function () {
                var show=document.getElementById("show");

                //show.innerHTML= xmlhttp.responseText;
            } ;
            var message=document.getElementById("message").value;
            var client=document.getElementById("client").value;



            var url =  window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
            url += "/livredorleavemessage.php?message="+message+"&client="+client;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open('GET',url, true);
            xmlhttp.onreadystatechange = callback;
            xmlhttp.send(null);
            document.getElementById("message").value="";
            document.getElementById("client").value="";

            alert("Merci pour votre avis même si ça ne nous interesse pas tellement...");

            window.location.reload();

        }
    </script>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal"><!-- un include ça peut être chouette -->
            <h1>Livre d'or</h1><br/>
            <p>Dites nous ce que vous pensez de notre superbe hotel</p>
            <br/>
            <!-- MESSAGE A DESTINATION DES HACKERS-->
            <!-- Si à cause des valeurs rentrées plus rien ne marche vous pouvez utiliser le cheat:
            dans le input client vous tapez delete et dans l'input message vous tapez delete, vous supprimerez
            donc l'ensemble des messages stockés et donc ceux qui posent problèmes -->
            De :<br><input  id="client" ><br><br>

            Message :<br><input  id="message" ><br><br>
            <button onclick= 'save()' >Envoyer !</button>
            <br><br>
           <h1> Message des anciens clients </h1><br/>
            <div id="show">
            <script>
                document.write("<?php echo $messages;?>");
            </script>
            </div>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>