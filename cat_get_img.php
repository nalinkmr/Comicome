<?php
ini_set('display_errors',1);
     error_reporting(E_ALL);
        $con=mysql_connect("localhost","nalin","");
           
if(!$con)
{
echo mysql_error();
}
 $db=mysql_select_db("comic",$con);
if(!$db)
{
echo mysql_error();
}
$c_id = $_GET['c_id'];
$q="SELECT image,imagetype FROM category where c_id='$c_id'";
$r= mysql_query("$q",$con);
if($r)
{
$row=mysql_fetch_array($r);
$type="content-type: ".$row['imagetype'];
  header($type);
echo $row['image'];
}
else
{
echo mysql_error();
}
?>