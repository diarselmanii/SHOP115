
<?php
session_start();

require_once ("CreateDb.php");
require_once ("shopfunctions.php");


$db=new CreateDb("Productdb","Producttb");


if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key =>$value){
            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>

    <link rel="stylesheet" href="cart.css">

</head>
<body>
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
 <!-- <div class="user">
 ?php echo "<ul class=\"menu-user\"><span id=\"welcome\">Welcome</span><li id=\"li-user\"><span id=\"users\"> " . $_SESSION['username'] . "</span></li>
         <li id=\"li-logout\"><a id=\"li-user\" href=\"logout.php\">Logout</a></li></ul>"; ?>
         </div> -->
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
                <a href="shopvalid.php" ><li id="li-menu">Shop</li></a>
              
                 <a href="contact.php"><li id="li-menu">Contact</li></a>
            </ul>
        </div>
    </div>   
 <a href="cart.php"  id="shopcart"><i class="fas fa-shopping-cart" id="cart" >My Cart</i></a>
<div class="container">
    <?php
    $total=0;
    if(isset($_SESSION['cart'])){
    $product_id = array_column($_SESSION['cart'],'product_id');
    $result=$db->getData();
    while($row=mysqli_fetch_assoc($result)){
        foreach($product_id as $id){
        if($row['id']==$id){
            cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
            $total=$total+(int)$row['product_price'];
        }
    }
}
    }else{
        echo "<h5>Cart is empty</h5>";
    }
    ?>
</div>
<div class="details">
<div class="pt-4">
    <h3>PRICE DETAILS</h2>
    <hr>
    <div class="row price-details">
        <div class="col-md-6">
            <?php
            if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
                echo "<h4>Price($count items)</h4>";
            }else{
                echo "<h4>Price(0 items)</h4>";;
            }
            ?>
            <hr>
            <h4>Delivery Charges</h4>
            <hr>
            <h4>Amount Payable</h4>
        </div>
        <div class="col-md-6">
            <h4>$<?php echo $total ?></h4>
        </div>
    </div>
</div>


</body>
</html>