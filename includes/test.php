<html>
<!-- Srcoll to Top button -->
    <button onclick="topFunction()" id="topBtn" title="Scroll to top">&uarr;</button>

    <!-- Header menu -->
    <div class="header">
        <a class="logo" href="/Music_e-shop/index.php">music-store.gr</a>

        <form class="search-bar">
            <input type="text" placeholder="Enter search term ..." name="search">
            <button type="submit" ><i class="fa fa-search"></i></button>
        </form>
        
        <div class="header-menu">
            <a href="#"><i class="fa fa-fw fa-user"></i>Account</a>
            <a href="#"><i class="fa fa-shopping-cart" style="margin-right: 4px;"></i>Cart</a>
            <a href="/Music_e-shop/contact.php"><i class="fa fa-envelope-square pr-1" style="margin-right: 4px;"></i>Contact</a>
        </div>

    </div>
    <!--hamburger menu html (responsive menu για το productsMenu).-->
    <div class="button-container">
        <a href="#" onclick="responsiveMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
        <!-- productsMenu - Μενού των κατηγοριών των προϊόντων. -->
        <div id="productsMenu" class="products-menu">
        <a href="#">Guitars</a>
        <a href="#">Basses</a>
        <a href="#">Drums</a> 
        <a href="#">Keys</a>
        <a href="#">Amplifiers</a>
        <a href="#">Studio-PA</a>
        <a href="#">Accesories</a>  
    </div>
</html>     