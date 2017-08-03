<?php
            $con=mysql_connect("localhost","nalin","");

            mysql_select_db("comic",$con);
            $tb="customer";      
            $id=$_GET['name'];
            $sign= "DELETE FROM 
            $tb WHERE customer_id=$id";
            
            $result = mysql_query($sign,$con);
if($result)
{
    echo 'user is deleted';
}
 else
 {
    echo 'error deleting record:';
}
            
            mysql_close($con);
        
    ?>
