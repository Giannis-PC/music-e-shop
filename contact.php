<!DOCTYPE html>
<html>
<!--Head: 
    Ορισμός χαρακτήρων
    Τίτλος σελίδας
    Σύνδεση των αρχείων css και javascript
-->
<head>
    <meta charset="UTF-8">
    <title>Music eshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/top_scroll_script.js"></script>
    <script src="scripts/form_validation.js"></script>
</head>  

<!-- Body: Το όρατό τμήμα της σελίδας στον χρήστη -->    
<body>

    <?php include 'includes/test.php'; ?>
    
    <!-- Contact form - Φόρμα επικοινωνίας -->
    <div class="contact-form">
        <h2 class="contact-title">Contact us</h3>
        <hr>
        <form name="contact_form" onsubmit="validateForm()">
            <label for="fname">First Name</label>
            <input type="text" id="fname" placeholder="Your name..">
      
            <label for="lname">Last Name</label>
            <input type="text" id="lname" placeholder="Your last name..">
      
            <label for="subject">Subject</label>
            <input type="text" id="subject" placeholder="Your subject..">
      
            <label for="message">Message</label>
            <textarea id="message" placeholder="Your message.." style="height:200px"></textarea>
      
            <input type="submit" value="Send">
        </form>
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
            <a href="#">Contact</a>
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

    <script src="scripts/toggle-menu.js"></script>
</body>
</html>

