<?php
session_start();
?>
<html>
    <head>
    <title>product_detail</title>
              <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body bgcolor="black">
        <font color="white">
            <a href="tshirts.php"><font color="silver">back</font></a>
            	<span>|</span>
             Welcome <a href="#"><font color="yellow"><?php echo $_SESSION["username"];?></font></a>
            <hr>
            <h3 align="center"><b><u><font color="lightblue">PRODUCT DETAIL</font></u></b></h3>
             

<?php
$con=mysql_connect("localhost","nalin","");
$db=mysql_select_db("comic",$con);
if(!$con)
{
echo mysql_error();
}
$product_id=$_GET['p_id'];
$q="SELECT product_id,name,image,imagetype,description,quantity,price FROM product where product_id='$product_id'";
$r= mysql_query("$q",$con);
if($r)
{
while($row=mysql_fetch_array($r))
{
$p_id=$row['product_id'];
$type="content-type: ".$row['imagetype'];
$name=$row['name'];
$des=$row['description'];
$quantity=$row['quantity'];
$price=$row['price'];
$image=$row['image'];
    
echo "
<form action='storeshopproduct.php' method='GET'>
<br/>
<font color='brown'>name is:</font>$name
<br/>
<font color='brown'>description is:</font>$des
<br/>
<font color='brown'>quantity available:</font>$quantity
<br/>
<img src='prod_get_img.php?product_id=".$row['product_id']."' width='180' height='180' />
<br/>
<font color='silver'>price:</font>$price
<br/>
<input type='text' name='p_id' value='$p_id' class='hidden'/>
<input type='text' name='name' value='$name' class='hidden'/>
<input type='file' name='image' value='prod_get_img.php?product_id=".$row['product_id']."' class='hidden'/>
<input type='text' name='quantity' value='$quantity' class='hidden'/>
<input type='text' name='price' value='$price' class='hidden'/>
<input type='submit' value='cart it' name='submit'/></b>
</div>
</form>
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

