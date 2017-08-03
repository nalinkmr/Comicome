<?php
ini_set('display_errors',1);
     error_reporting(E_ALL);
     
            $conn=mysql_connect("localhost","nalin","");

            $db=mysql_select_db("comic",$conn);
            $tb=product;
if(!$db)
{
echo mysql_error();
}
$name=$_POST['pname'];
$amount=$_POST['amount'];
$quantity=$_POST['quantity'];
$description=$_POST['des'];
$keyword=$_POST['key'];
$photo= addslashes(file_get_contents($_FILES['pphoto']['tmp_name']));
$image =getimagesize($_FILES['pphoto']['tmp_name']);

$imagetype= $image['mime'];
$q="INSERT INTO $tb(name,image,description,quantity,price,imagetype,keywords) VALUES('$name','$photo','$description','$quantity','$amount','$imagetype','$keyword')";

$r=mysql_query($q,$conn);
     if($r)
     {
        header("location:product_form.php");

     }
else
     {
     echo mysql_error();
     }

?>