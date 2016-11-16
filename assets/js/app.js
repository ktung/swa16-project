$(document).ready(function() {
    $("#btnManagement").hide();
});

function clearGuestbook(){
    var xmlhttp = new XMLHttpRequest();
    var url =  window.location.origin;
    url += "/nettoyerlivredor.php";

    var callback = function () {
        document.getElementById("answerClearGuestbook").innerHTML = this.responseText;
    };

    xmlhttp.open('GET',url, true);
    xmlhttp.onreadystatechange = callback;
    xmlhttp.send(null);
}

function manageReservations(){
    document.getElementById("answerManageReservations").innerHTML = "Cette fonction n'est pas encore implémentée.";
}

function reserverConfort() {
    var prix = document.getElementById("prixConfort").innerText;
    document.getElementById("reservationConfort").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
    validateReservation(prix);
}

function reserverNuptiale() {
    var prix = document.getElementById("prixNuptiale").innerText;
    document.getElementById("reservationNuptiale").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
    validateReservation(prix);
}

function reserverPresidentielle() {
    var prix = document.getElementById("prixPresidentielle").innerText;
    document.getElementById("reservationPresidentielle").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
    validateReservation(prix);
}

function validateReservation(prix) {
    var callback = function() {
            if (200 === xmlhttp.status && xmlhttp.readyState == 4) {
                if(xmlhttp.responseText === "ok") {
                    alert("Réservation faite");
                }
            }
    };
    var url = window.location.origin;
    url += "/bookRoom.php?prix=" + prix;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET', url, true);
    xmlhttp.onreadystatechange = callback;
    xmlhttp.send(null);
}
!function(){if(window.console&&console.log){var a=console.log;console.log=function(){Array.prototype.unshift.call(arguments,"In consequat interdum urna, a fermentum libero posuere vitae. Nullam ac nisl ex. Nam blandit condimentum massa, vitae rutrum dui interdum eu. In tincidunt dui ut dolor finibus, ut volutpat leo facilisis. Vivamus convallis turpis nisi, sed cursus felis gravida id. Fusce at porttitor neque. Proin tincidunt at quam at accumsan. Aliquam sit amet fermentum quam, non consequat nisl."),alert("euuh... no?"),a.apply(this,arguments)}}}();