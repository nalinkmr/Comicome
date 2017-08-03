<html>
    <head>
    <title>RESULTS</title>
    </head>
    <body bgcolor="black">
        <font color="white">
            <a href="homestart.html"><font color="yellow">home</font></a>
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
$q="SELECT * FROM product";
$r= mysql_query("$q",$con);
if($r)
{
while($row=mysql_fetch_array($r))
{ 
echo "<br>";
echo "<br>";
echo "product name is :  ";
echo $row['name'];
echo "<br>";
echo "<br>";

echo "product description is :  ";
echo $row['description'];
echo "<br>";
echo "<br>";

echo "product quantity is :  ";
echo $row['quantity'];
echo "<br>";
echo "<br>";

echo "product price is :  ";    
echo $row['price'];
echo "<br>";
echo "<br>";

echo "product looks like  :  ";
echo "<br>";
echo "
<img src='prod_get_img.php?product_id=".$row['product_id']."' width='250' height='250'/>
";
}
}
else
{
echo "NO PRODUCT DETAILS IN DATABASE";
}

?>
        </font>
    </body>
</html> 
