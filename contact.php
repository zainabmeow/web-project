<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="contacting.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="myscript.js"></script>
</head>
<body>
    <header class="header"><div class="bottom-header"><div class="header-logo">
        <img src="images/wb logo.png" alt="Logo"></a></div><div class="navigations"><ul class="nav-list desktop">
            <li><a class="" href="index.html">Home</a></li><li>
        <a class="" href="aboutus.html">About Us</a></li>
        <li><a class="" href="menu.html">Menu</a></li>
        <li><a class="" href="locations.html">Branches</a></li>
        <li><a class="" href="careers.html">Careers</a></li>
        <li><a class="active" href="contact.php">Contact Us</a></li>
        <li><a class="" href="franchising.html">Franchising</a></li>
            </header>
         
            <div class="container">
                <div class="contact-box">
                    <div class="left"></div>
                    <div class="right">
                        <h2>CONTACT US!</h2>
                        <form action="text.php" method="POST">
                            <input type="text" class="field" placeholder="Your Name"  required id="name">
                            <input type="email" class="field" placeholder="Your Email" required id="mail">
                            <input type="text" class="field" placeholder="Your Phone Number" required id="number">
                            <textarea class="field area" placeholder="Message" required id="message"></textarea>
                            <button class="btn" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/wb logo.png">
                            <div class="contact-info">
                                <div>
                                    <img src="images/phone.png" alt="Phone Icon" class="icon">
                                    HQ: 04 410 666
                                </div>
                                <div>
                                    <img src="images/phone.png" alt="Phone Icon" class="icon">
                                    Call Center: 1635 - SOON
                                </div>
                                <div>
                                    <img src="images/mail.png" alt="Mail Icon" class="icon">
                                    <a href="mailto:info@woodenbakery.com">info@woodenbakery.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Navigation:</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="franchising.html">Franchising</a></li>
                                        <li><a href="menu.html">Order Now</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="aboutus.html">About Us</a></li>
                                        <li><a href="aboutus.html">Quality Policy</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="menu.html">Menu</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="locations.html">Branches</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                        <div class="col-md-4">
                            <div class="social-icons">
                                <a href="https://www.instagram.com/woodenbakery.leb/"><img src="images/instageam.png" alt="Instagram" class="icon"></a>
                                <a href="https://www.youtube.com/channel/UCbqm7N9DNGQBG-AHBnLfCMA"><img src="images/yt.png" alt="YouTube" class="icon"></a>
                                <a href="https://www.facebook.com/WoodenBakeryLebanon"><img src="images/facebook.png" alt="Facebook" class="icon"></a>
                                <a href="https://www.linkedin.com/company/wooden-bakery/"><img src="images/in.png" alt="LinkedIn" class="icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>
        
</body>
</html>