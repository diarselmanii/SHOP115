
<!DOCTYPE html>
<html>
<head>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />



 
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="styleslider.css">
    
    

</head>
<body>
 <div class="header">
        <div class="header-logo">
         <div class="slider">
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo.jpg" alt="">
        </div>
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo1.png" alt="">
        </div>
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo.jpg" alt="">
        </div>
        <script src="main.js"></script>
    </div>
        </div>
        <div class="header-menu">
            <ul class="menu">
                <a href="homeLogin.php"><li id="li-menu">Home</li></a>
                <a href="shopvalid.php" ><li id="li-menu"  style="background-color: black; 
                    color: white;
                     border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;">Shop</li></a>
              
                 <a href="contact.php"><li id="li-menu">Contact</li></a>
            </ul>
        </div>
    </div>
  
 <div>
    <a href="cart.php"  id="shopcart"><i class="fas fa-shopping-cart" id="cart" >Cart
                    <?php
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning\">$count</span></i></a>";
                    }else{
                        echo  "<span id=\"cart_count\" class=\"text-warning\">0</span></i></a>";
                    }
                    ?>
                    </div>
<div class="footer">
    <div class="div-footer1">
        <ul class="ul-footer">
            <a href="about.php" style="color: white;"><li id="li-footer">About</li></a>
            <a href="contact.php" style="color: white;"><li id="li-footer">Contact</li></a>
            <a href="shop.php" style="color: white;"><li id="li-footer">What we can offer you ?</li></a>
        </ul>
    </div>
    <div class="div-footer1">
        <ul class="ul-footer">
            <a href="shop.php" style="color: white;"><li id="li-footer">Click to see All new by Jordan Air</li></a>
            <a href="login.php" style="color: white;"><li id="li-footer">Log in</li></a>
            <li id="li-footer">If u don't have an account,you can</li><a href="login.html" id="register-a">register now!</a>
        </ul>
        
    </div>
    <div class="div-footer1">
        <ul class="ul-footer">
            <a href="#" style="color: white;"><li id="li-footer">Costummer Suport</li></a>
            <a href="contact.php" style="color: white;"><li id="li-footer">Report for something </li></a>
            <li id="li-footer">Click to see what peoples likes the most </li><a href="login.php" id="register-a"></a>
            <li>Follow us</li>
        </ul>
        
    </div>
    <div class="div-footer2">
        <ul class="ul-footer2">
         
            <li id="li-footer"><img id="instagram" src="img/instagramlogo.png" alt=""></li>
            <li id="li-footer"><img id="twitter" src="img/twitterlogo.png" alt=""></li>
            <li id="li-footer"><img id="facebook" src="img/facebooklogo.png" alt=""></li>

        </ul>
        <p id="copyright"><img src="img/copyright.png" alt="" id="logo-copyright"><br> All right reserved.Powered by Jordan.com</p>
    </div>
</div>
</body>
<script src="shop.js"></script>
</html>