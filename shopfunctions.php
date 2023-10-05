<?php

// function component($productname,$productprice,$productimg,$productid){
//     $element = "
	
	
//     <div class=\"wrapper\">
//   <div class=\"outer\">
//     <div class=\"content animated fadeInLeft\">
//       <span class=\"bg animated fadeInDown\">EXCLUSIVE</span>
//       <h1 class=\"h1Card\"><br/> $productname</h1>
//       <p class=\"pCard\">Jordan's popularity is because it offers a certain exclusivity level,incomparable to other footwear
//       of its type. These shoes are manufactured with extremely high-quality materials, including full-grain 
//       calfskin and premium leather uppers. With these materials being used, there's a creation of a sense of durability.</p>
//        <form action=\"shopvalid.php\" method=\"post\">
//       <div class=\"buttonCard\">
//         <a class=\"btn btn-warning my-5\">$$productprice</a>
// 		<button type=\"submit\" class=\"btn btn-warning my-5\" name=\"add\" id=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
//        <input type='hidden' name='product_id' value='$productid'>
//       </div>
// 	  </form>
      
//     </div>
//     <img src=\"$productimg\" width=\"300px\" class=\"animated fadeInRight\" id=\"imgCard\">
//   </div>
  
// </div>
//     ";
//     echo $element;
//}





function component($productname,$productprice,$productimg,$productid){
  $element = "


  <div class=\"wrapper\">
<div class=\"outer\">
  <div class=\"content animated fadeInLeft\">
    <span class=\"bg animated fadeInDown\">EXCLUSIVE</span>
    <h1 class=\"h1Card\"><br/> $productname</h1>
    <p class=\"pCard\">Jordan's popularity is because it offers a certain exclusivity level,incomparable to other footwear
    of its type. These shoes are manufactured with extremely high-quality materials, including full-grain 
    calfskin and premium leather uppers. With these materials being used, there's a creation of a sense of durability.</p>
     <form action=\"shopvalid.php\" method=\"post\">
    <div class=\"buttonCard\">
      <span id=\"price\">$$productprice</span>
  <button type=\"submit\" name=\"add\" id=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
     <input type='hidden' name='product_id' value='$productid'>
    </div>
  </form>
    
  </div>
  <img src=\"$productimg\" width=\"300px\" class=\"animated fadeInRight\" id=\"imgCard\">
</div>

</div>
  ";
  echo $element;
}




function cartElement($productimg,$productname,$productprice,$productid){
$element = "
<div id=\"shoping-cart\">
<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
             <img src=$productimg alt=\"image1\" id=\"imgproduct\">
               <div class=\"productinfo\">
                 <h5 id=\"productname\">$productname</h5>
                  <small id=\"productby\">Seller:AlbinXhafa</small>
                  <h5 id=\"productprice\">$$productprice</h5>
                  <button type=\"submit\" class=\"savebutton\" name=\"save\">Save for later</button>
                  <button type=\"submit\" class=\"removebutton\" name=\"remove\">Remove</button>
            </div>
          </div>
       </div>
</form>
</div>
";
echo $element;
}
 ?>

