/*Η συνάρτηση responsiveMenu() που εκτελείται όταν ο χρήστης
πατάει το button με id 'topBtn'.*/
function responsiveMenu() {

    //Θέτω στην μεταβλητή prd_menu το html element με id 'productsMenu'.
    var prd_menu = document.getElementById('productsMenu');

    /*Εάν η ιδιότητα display του αντικειμένου ποε βρίσκεται στην μεταβλητή prd_menu
    είναι none και ο χρήστης πατήσει το button εφμάνισε το μενού.*/
    if (window.getComputedStyle(prd_menu).display === "none") {
        prd_menu.style.display = "flex";
    }
    //Διαφορετικά κρύψε το.
    else {
        prd_menu.style.display = "none";
    }
    
    /*Προσθήκη ενός event-lestener ώστε εάν αλλάξει το πλάτος της οθόνης
    άνω των 760 pixels το μενού των κατηγοριών των προϊόντων να εμφανίζεται
    διαφορετικά να κρύβεται.*/
    window.addEventListener('resize', function() {

        let win = this;
        
        if (win.innerWidth < 760) {
            prd_menu.style.display = "none";
        } 
        else {
            prd_menu.style.display = "flex";
        }
    });
}


