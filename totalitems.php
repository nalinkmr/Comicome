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


$q="SELECT c_id FROM place";
$c_id=$row['c_id'];
$get_items='select *from place where c_id="$c_id"';
$result = mysql_query($get_items);
$count_items=mysqli_num_rows($result);
else    
{
$q="SELECT c_id FROM place";
$c_id=$row['c_id'];
$get_items='select *from place where c_id="$c_id"';
$run_items=mysqli_query($con,$get_items);
$count_items=mysqli_num_rows($run_items);

}
echo $count_items
?>

   