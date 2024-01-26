<!DOCTYPE html>
<html>
<!--Head: 
    Ορισμός χαρακτήρων.
    Ορισμός της θύρας viewport.
    Τίτλος σελίδας.
    Σύνδεση των αρχείων css και javascript.
-->
<head>
    <meta charset="UTF-8">
    <title>Music-store.gr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/banner.css">
    <link rel="stylesheet" href="style/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/top_scroll_script.js"></script>
</head>  
  
<!-- Body: Το όρατό τμήμα της σελίδας στον χρήστη. -->    
<body>
    
    <?php include 'includes/test.php'; ?>

    <!-- Διαφημιστικό SlideShow -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/fp-banner2.jpg">
            <div class="text">
                <h3>Title One</h3>
                <a href="#" class="btn">Explore now &#8594</a>
            </div>
            
        </div>

        <div class="mySlides fade">
            <img src="images/fp-banner1.jpg">
            <div class="text">
                <h3>Title Two</h3>
                <a href="#" class="btn">Explore now &#8594</a>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="images/fp-banner-4.jpg">
            <div class="text">
                <h3>Title Three</h3>
                <a href="#" class="btn">Explore now &#8594</a>
            </div>
        </div>

        <a class="prev" onclick="changeSlide(-1)">❮</a>
        <a class="next" onclick="changeSlide(1)">❯</a>
    </div>

    <!-- Τα νέα προϊόντα. -->
    <div class="new-products-container">
        <h2 class="product-title">NEW PRODUCTS</h2>
        <hr>
        <div class="row">
            <div class="product-card">
                <img src="images/DBZ-Mondial-ST-Black.jpg" alt="DBZ Guitar" style="width:100%">
                <h3>DBZ Mondial-ST</h3>
                <p class="price">190.60€</p>
                <p>Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="product-card">
                <img src="images/Career-Stage-Bass-1-Sunburst.jpg" alt="Career" style="width:100%">
                <h3>Career Stage-Bass</h3>
                <p class="price">156.50€</p>
                <p>Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="product-card">
                <img src="images/mesa-boogie.jpg" alt="mesa-boogie" style="width:100%">
                <h3>Mesa Bogie</h3>
                <p class="price">1980.00€</p>
                <p>Lorem jeamsun denim. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="product-card">
                <img src="images/ddrum-set.jpg" alt="ddrum-set" style="width:100%">
                <h3>Ddrum kit set</h3>
                <p class="price">878.00€</p>
                <p>Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Add to Cart</button></p>
            </div>

        </div>
    </div>

    <!-- Services / Υπηρεσίες. -->
    <section id="banner_div">
        <div class="banner_img">
            <img src="images/banner-pic.png" alt="banner">
        </div>
        <div class="first_row">
            <div class="ad">             
                <img src="images/free-delivery.png" alt="free-delivery">
                <h4>FREE SHIPPING</h4>
                <hr>
                <p>Pellentesque viverra, neque ut iaculis lacinia, orci nunc vehicula nisi. Gneque ut iaculis lacinia.</p>
            </div>
            <div class="ad">               
                <img src="images/credit-card.png" alt="secure-payment">
                <h4>SECURE PAYMENT</h4>
                <hr>
                <p>Pellentesque viverra, neque ut iaculis lacinia, orci nunc vehicula nisi. Fneque ut iaculis lacinia.</p>
            </div>
        </div>
        <div class="second_row">
            <div class="ad">
                <img src="images/business.png" alt="support">
                <h4>MAIL ORDER</h4>
                <hr>
                <p>Pellentesque viverra, neque ut iaculis lacinia, orci nunc vehicula nisi. Tneque ut iaculis lacinia.</p>
            </div>
            <div class="ad">
                <img src="images/bass-guitar.png" alt="something">
                <h4>LOREM IPSUM</h4>
                <hr>
                <p>Pellentesque viverra, neque ut iaculis lacinia, orci nunc vehicula nisi. Kneque ut iaculis lacinia.</p>
            </div>
        </div>
    </section>    
    <!--<section id="adsContainer">
        <div class="ad">
            <h4>FREE SHIPPING</h4>
            <img src="images/free-delivery.png" alt="free-delivery">
            <p>For purchases over 200€ free shipping all over EU!</p>
        </div>
        <div class="ad">
            <h4>SECURE PAYMENT</h4>
            <img src="images/credit-card.png" alt="secure-payment">
            <p>Easy and reliable payment with credit cards, pay-pal and  bank deposit.</p>
        </div>
        <div class="ad">
            <h4>SUPPORT</h4>
            <img src="images/business.png" alt="support">
            <p>Are you looking for a product? Email us on info@music-store.gr</p>
        </div>
        <div class="ad">
            <h4>LOREM</h4>
            <img src="images/bass-guitar.png" alt="lorem">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        </div>
    </section>-->

    <!-- Brands / Κατασκευαστές προϊόντων. -->
    <div class="brands-container">
        <h2 class="brand-title">BRANDS</h2>
        <hr>
        <div class="brands-row">
            <div class="brand">
                <img src="images/hughes-kettner-logo.jpg" alt="">
            </div>

            <div class="brand">
                <img src="images/LANEY-LOGO.jpg" alt="LANEY">
            </div>

            <div class="brand">
                <img src="images/Engl-Logo.jpg" alt="Engl">
            </div>

            <div class="brand">
                <img src="images/Peavey-Logo.jpg" alt="Peavey">
            </div>

           <div class="brand">
                <img src="images/blackstar-logo.jpg" alt="blackstar">
            </div>

            <!--<div class="brand">
                <img src="images/dixon-logo-300x300.jpg" alt="dixon">
            </div>

            <div class="brand">
                <img src="images/ernie-ball.jpg" alt="ernie-ball">
            </div>

            <div class="brand">
                <img src="images/gotoh-logo-300x300.jpg" alt="gotoh">
            </div>-->
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-col">
            <h4>Categories</h4>
            <a href="#">Guitars</a>
            <a href="#">Basses</a>
            <a href="#">Drums</a> 
            <a href="#">Keys</a>
            <a href="#">Amplifiers</a>
            <a href="#">Studio-PA</a>
            <a href="#">Accesories</a>  
        </div>

        <div class="footer-col">
            <h4>music-store.gr</h4>
            <a href="index.html">Home</a>
            <a href="#">Account</a>
            <a href="#">Cart</a>
            <a href="contact.html">Contact</a>
            <a href="#">Call Service</a>
        </div>

        <div class="footer-col">
            <h4>Information</h4>
            <a href="#">Terms of use</a>
            <a href="#">Privacy note</a>
            <a href="#">Shipping and payments</a>
            <a href="#">About us</a>
        </div>

        <div class="footer-col">
            <h4>Social network</h4>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">youTube</a>
            <a href="#">Instagram</a>
        </div>

        <div class="footer-col">
            <h4>Opening hours</h4>
            <ul>
                <li>Mon 12:00-18:00</li>
                <li>Tue 12:00-18:00</li>
                <li>Wed 12:00-18:00</li>
                <li>Thu 12:00-18:00</li>
                <li>Fri 12:00-18:00</li>
            </ul>
        </div>
        
    </div>

    <!--javascript πριν κλείσει το body,
        γιατί πρώτα πρέπει να έχουν φορτωθεί
        τα html αντικείμενα και οι css ιδιοτητές τους.
    -->
    <script src="scripts/slider.js"></script>
    <script src="scripts/toggle-menu.js"></script>
</body>
</html>

