
<html>
	<head>
		<title>COLLECTIONS PAGE</title>
                      <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
		</head>
	<body>
        
   <body bgcolor="grey">
                <table border="3" align="center" background="images/pinkmetal.jpg" width="1190">
                    <tr>
                        <td><br><font color="white">    
                            <h1><center>OUR PRODUCTS</center></h1>
                       </font> </td>
                    </tr>
                </table>
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
$q="SELECT c_id,name FROM category";
$r= mysql_query("$q",$con);
if($r)
{
while($row=mysql_fetch_array($r))
{
$c_id=$row['c_id'];
$name=$row['name'];
echo" 
<div id='single_product'>
$name
<br/>
<img src=cat_get_img.php?c_id=".$row['c_id']." width='180' height='180' />
<br/>
<a href='aprel.php?c_id=$c_id'>purchase</a>
</div>
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
