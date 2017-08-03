<?php
session_start();
?>
<?php
ini_set('display_errors',1);
     error_reporting(E_ALL);
     
            $conn=mysql_connect("localhost","nalin","");

            $db=mysql_select_db("comic",$conn);
            $tb='place';
if(!$db)
{
echo mysql_error();
}
$cus=$_SESSION["username"];
$p_id=$_GET['p_id'];
$image=$_GET['image'];
$name=$_GET['name'];
$quantity=$_GET['quantity'];
$price=$_GET['price'];
echo"
<br/>
$name
<br/>
$quantity
<br/>
$price
<br/>
$image
";
$q="INSERT INTO $tb (product_id,name,quantity,price,image,customer) VALUES ('$p_id','$name','$quantity','$price','$image','$cus')";
$r=mysql_query($q,$conn);
     if($r)
     {
        header("location:thankyou.php");
     }
else
     {
     echo "error";
     }

?>