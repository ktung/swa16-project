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
	var url = window.location.origin; //permet d'obtenir uniquement l'URL de la forme suivante : protocol://hostname:port
	url += "/bookRoom.php?prix=" + prix;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('GET', url, true);
	xmlhttp.onreadystatechange = callback;
	xmlhttp.send(null);
}
