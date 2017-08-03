<html>
    <head>
    <title>RESULTS</title>
              <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
        <script>
        fun()
        {
       document.write("hello");
        }
            </script>
    </head>
    <body bgcolor="black">
        <font color="white">
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

$q="SELECT product_id, name,image, imagetype,description,quantity,price FROM product where c_id='3'";
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
<div id='single_product'>
<br/>
$name
<br/>
<img src='prod_get_img.php?product_id=".$row['product_id']."' width='180' height='180' />
<br/>
<font color='silver'>price:</font>$price<br/>
<a href='pro_details.php?p_id=$p_id' 'style='float:left;'>Details</a>
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

