<?php
ini_set('display_errors',1);
     error_reporting(E_ALL);
     
            $conn=mysql_connect("localhost","nalin","");

            $db=mysql_select_db("comic",$conn);
            $tb="category";

if(!$db)
{
echo mysql_error();
}
$name=$_POST['pname'];
$description=$_POST['des'];
$photo= addslashes(file_get_contents($_FILES['pphoto']['tmp_name']));
$image =getimagesize($_FILES['pphoto']['tmp_name']);

$imagetype= $image['mime'];
$q="INSERT INTO $tb(name,description,image,imagetype) VALUES('$name','$description','$photo','$imagetype')";

$r=mysql_query($q,$conn);
     if($r)
     {
        header("location:thankyou.php");

     }
else
     {
     echo mysql_error();
     }

?>