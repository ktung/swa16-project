
document.getElementById = function(text){
	if (text=="secret"){
		return "ceci n'est pas le secret";
	}
	else{
		return "continue à essayer";
	}
};

////////////////////////////
// test nouveell funciton///
////////////////////////////



window.alert("defense:  " + document.getElementById("secret"));
//if( $('#sec').css('display') != null )  { 
//    window.alert(document.getElementsByClassName("sec")[0].innerHTML);
//} 
//else { 
    /*does not have*/ 
//}
		