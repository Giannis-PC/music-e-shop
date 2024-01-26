function myFunction() {

    var prd_menu = document.getElementById('productsMenu');

    if (window.getComputedStyle(prd_menu).display === "none") {
        prd_menu.style.display = "flex";
    }
    else {
        prd_menu.style.display = "none";
    }
        
    window.addEventListener('resize', function() {

        let win = this;
        
        if (win.innerWidth < 766) {
            prd_menu.style.display = "none";
        } 
        else {
            prd_menu.style.display = "flex";
        }
    });
}


