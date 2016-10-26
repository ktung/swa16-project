function reserverConfort() {
	var prix = document.getElementById("prixConfort").innerText;
	document.getElementById("reservationConfort").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
}

function reserverNuptiale() {
	var prix = document.getElementById("prixNuptiale").innerText;
	document.getElementById("reservationNuptiale").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
}

function reserverPresidentielle() {
	var prix = document.getElementById("prixPresidentielle").innerText;
	document.getElementById("reservationPresidentielle").innerText = "=> Réservation à confirmer en payant, pour un montant de "+prix+"€.";
}