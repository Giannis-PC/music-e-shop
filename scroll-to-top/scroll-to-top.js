//Εάν ο χρήστης κάνει scroll τότε...
window.onscroll = function() {

    //Θέτω στην top_btn μεταβλητή το html element με id 'topbtn'.
    let top_btn = document.getElementById("topBtn");

    //Εάν ο χρήστης κάνει scroll άνω των 600px εμφάνισε το button.
    if ( document.documentElement.scrollTop > 60 ) {
        top_btn.style.display = "block";
    }
    //Αλλίως κρύψτο. 
    else {
        top_btn.style.display = "none";
    }
};

//Εκτέλεση της onclick funtion του html element με id 'topbtn'.
function topFunction() {
    //Scroll στην κορυφή της σελίδας.
    document.documentElement.scrollTop = 0;
}
