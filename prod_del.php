<?php
            $con=mysql_connect("localhost","nalin","");

            mysql_select_db("comic",$con);
            $tb="product";      
            $id=$_GET['name'];
            $sign= "DELETE FROM 
            $tb WHERE product_id=$id";
            
            $result = mysql_query($sign,$con);
if($result)
{
    echo 'product is deleted';
}
 else
 {
    echo 'error deleting product:';
}
            
            mysql_close($con);
        
    ?>
