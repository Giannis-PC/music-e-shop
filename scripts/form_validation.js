function validateForm() {
    //Εισαγωγή τιμών των html elements σε μεταβλητές javascript.
    //Τύπος μεταβλητής let - τοπική μεταβλητή - ανήκει στο εύρος της συνάρτησης validateForm().
    let fname = document.forms["contact_form"]["fname"].value; //όνομα.
    let lname = document.forms["contact_form"]["lname"].value; //επώνυμο.
    let subject = document.forms["contact_form"]["subject"].value; //περιεχόμενο.
    let message = document.forms["contact_form"]["message"].value; //μήνυμα.
    
    //Εάν το πλήθος των χαρακτήρων του μηνύματος είναι άνω των 1200,
    //τότε δεν λαμβάνει μήνυμα ο server.
    if ( message.length > 1200 ) {
        alert("Μη αποδεκτό περιεχόμενο!");
        return false; //Τερματίζει η funtion = Δεν εκτελείται η επόμενη συνθήκη.
    }

    //Εάν ένα απο τα πεδία είναι κενά τότε δεν λαμβάνει μήνυμα ο server.
    if ( (fname == "")  || (lname == "") || (subject == "") || (message=="") ) {
        alert("Η συμπλήρωση των πεδίων είναι υποχρεωτική.");
    }
}

