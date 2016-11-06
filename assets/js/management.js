$(document).ready(function() {
    $("#btnManagement").hide();
});

function clearGuestbook(){
    var xmlhttp = new XMLHttpRequest();
    var url =  window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
    url += "/nettoyerlivredor.php";
    console.log(url);


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