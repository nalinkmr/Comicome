<?php
            $con=mysql_connect("localhost","nalin","nalin@123");

            mysql_select_db("comicomee",$con);
            $tb="products";

      
            $product_name=$_POST['name'];
            
      
            $products="INSERT INTO $tb(product_name)VALUES('$product_name')";
            
            $result = mysql_query($products,$con);
if($result)
{
    echo 'it worked!';
}
 else
 {
    echo 'login again!';
}
            
            mysql_close($con);
        
    ?>