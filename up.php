<?php
session_start();
?>
<html>
   <head>
      <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
      <style>
#font
{
   color:white;
   font-size: 60;
}
      </style>

   </head>
   <body bgcolor="black" >
      <table class="logsin">
         <tr>
             <td>
            <div id="top-navigation">
                Welcome <a href="#"><font color="yellow"><?php echo $_SESSION["username"];?></font></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="index.html" target="_top">Log out</a>
			</div>
                 </td>
            </tr>
   <tr>
         <td>
            <a href="#">My Account</a> 
            <a href="#">Wishlist</a> 
            <a href="#">Checkout</a>
         </td>
      </tr>
          <tr>
           <td><font color="yellow">item:</font>
                 
             <a href="cart.php" target="_parent"><img src="images/cart.jpg" height="30" width="60"></a>       
              <font color="white"> CART</font>
          </td>
              </tr>
      <tr>
         <td>
               <table>
                    <form action="searchproductsignedin.php" target="_parent">
                  <td>
                     <input type="text" placeholder="search..." name="search"/>
                  </td>
                  <td>
                     <input type="image" src="images/search.jpeg" value="submit" width="20" height="20">
                  </td>
                    </form>
               </table>
            
         </td>
      </tr>
  
   </table>        
   
      <table>
         <tr> 
            <h1><td id="font"><a href="" target=""><font color="white">COMICOME</font></a></td></h1>

            <td><img src="images/comicome.png" title="comicome" height="100" width="100"></td>
         </tr>  
      </table>
   <div id="menu-wrapper">
      <div id="menu" class="container">
         <ul>
            <li><a href="homesignedin.html" accesskey="1" target="_parent" title="">Homepage</a></li>
            <li><a href="aboutus.html" accesskey="2"  target="down" title="">About us</a></li>
            <li><a href="news/retrylinks.html" target="down" title="">NEWS</a></li>
            <li><a href="#" accesskey="4" target="down" title="">EVENTS</a></li>
            <li><a href="collections.html" target="down">Collections<span> </span></a></li>
            <li><a href="" target="up">Sale<span> </span></a></li>
            <li><a href="contact.html" accesskey="5" target="up" title="">Contact Us</a></li>

         </ul>
      </div>
   </div>
</body>
</html>

