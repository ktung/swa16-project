<!DOCTYPE html>
<html>
<head>
    <title>Nos chambres</title>
    <meta charset="UTF-8">
    <?php include('includes.inc.php'); ?>
</head>
<body>
<table class="mainTab">
    <?php include('menu.inc.php'); ?>
    <tr class="mainPart">
        <td class="cote">&nbsp;</td>
        <td id="cadrePrincipal"><!-- un include ça peut être chouette -->
            <h1>Nos chambres</h1><br/>
            <div align="left">
                <h2>Suite confort</h2>
                <img src="/pictures/chambre1.jpg" alt="Suite confort" />
                <p>Une chambre tout confort avec piscine privéee, au bord de l'eau.<br/>Service en demi-pension, restaurant disponible à moins de 10 minutes de marche dans le sable blanc.<br/> Convient pour 1 à 4 personnes. <br/>Prix à la semaine :  <span id="prixConfort">850</span>€.<br/><button class="btn btn-default" onclick="reserverConfort()">Réserver</button><a href="payment.php?url=https://paypal.com" class="btn btn-default">Payer par paypal</a></p>
                <p id="reservationConfort"></p>
                <br/>

                <h2>Suite nuptiale</h2>
                <img src="/pictures/chambre2.jpg" alt="Suite nuptiale" />
                <p>Choix parfait pour un voyage de noce ou séjour romantique.<br/>Service tout inclus, vous n'aurez à vous soucier de rien d'autre que votre bien être.<br/> Convient pour 2 personnes. <br/>Prix à la semaine :  <span id="prixNuptiale">1100</span>€.<button class="btn btn-default" onclick="reserverNuptiale()">Réserver</button><a href="payment.php?url=https://paypal.com" class="btn btn-default">Payer par paypal</a></p>
                <p id="reservationNuptiale"></p>
                <br/>

                <h2>Suite présidentielle</h2>
                <img src="/pictures/chambre3.jpg" alt="Suite presidentielle" />
                <p>Profitez de votre voyage au niveau supérieur avec cette suite de 125m².<br/>Le service est tout inclus, et vous pourrez profiter d'un personnel spécialement mis à votre disposition de jour comme de nuit.<br/> Convient pour 1 à 4 personnes. <br/>Prix à la semaine :  <span id="prixPresidentielle">1800</span>€.<button class="btn btn-default" onclick="reserverPresidentielle()">Réserver</button><a href="payment.php?url=https://paypal.com" class="btn btn-default">Payer par paypal</a></p>
                <p id="reservationPresidentielle"></p>
                <br/>
            </div>
        </td>
        <td class="cote">&nbsp;</td>
    </tr>
</table>
</body>
</html>