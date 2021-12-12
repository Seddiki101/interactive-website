function verif() {
	    var id = document.forms["f"]["id"].value;

	    var nom = document.forms["f"]["nom"].value;

	    var email = document.forms["f"]["email"].value;

   	    var message= document.forms["f"]["comment"].value;


        var errorN = document.getElementById('errorNom');

        var errorI = document.getElementById('errorId');

        var errorE = document.getElementById('errorMail');

       


     if (nom == "") {
        errorN.innerHTML = "Veuillez entrer votre prenom!";

    }
    else  {

    	isNan(id)
    	errorI.innerHTML = "Veuillez entrer votre ID!";
    }
   

}