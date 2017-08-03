<?php
            $con=mysql_connect("localhost","nalin","");

            mysql_select_db("comic",$con);
            $tb="place";      
            $id=$_GET['name'];
            $sign= "DELETE FROM 
            $tb WHERE product_id=$id";
            
            $result = mysql_query($sign,$con);
if($result)
{
    header("location: cart.php");
}
 else
 {
    echo 'no such product oops';
}
            
            mysql_close($con);
        
    ?>
