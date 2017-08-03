<?php
session_start();
?>
<html>
    <head>
    <title>YOUR CART</title>
              <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body bgcolor="black">
        <font color="white">
            <a href="homesignedin.html"><font color="silver">back</font></a>
            	<span>|</span>
    Welcome <a href="#"><font color="yellow"><?php echo $_SESSION["username"];?></font></a>
            <hr>
              <div id="static">
                <form name="input" action="cart_del.php" method="get">
                              <br><font color="yellow">
                             <h4><b>REMOVE THE PRODUCT&nbsp;</font>
                                 <input name="name" type="text" size="10"></b></h4>
                                <input type="submit" value="DELETE "></form>
                  </div>
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

$q="SELECT product_id,name,quantity,price FROM place";
$r= mysql_query("$q",$con);
if($r)
{
while($row=mysql_fetch_array($r))
{ 
    $p=$row['product_id'];
    $name=$row['name'];
    $q=$row['quantity'];
    $p=$row['price'];
     
echo"
<br/>
<font color='brown'>product id:</font>$p
<br/>
<font color='brown'>name is:</font>$name
<br/>
<img src='prod_get_img.php?product_id=".$row['product_id']."' width='180' height='180'/>
<br/>
price: $p
<br/>
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
