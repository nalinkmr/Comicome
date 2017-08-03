<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>search_products</title>
    <body bgcolor="black">
        <font color="white">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
    <body>
                    <a href="homesignedin.html"><font color="yellow">go home:)</font></a>

        <table  cellpadding="2">
             <tr>
                        <h2>search</h2>
                       </tr>
            <tr>
                   <form action="searchproductsignedin.php" method="get">
                      
                  <td>
        <input type="text"  placeholder="search..."  name="search" size="50" value='<?php echo $_GET['search']; ?>'/>
                  </td>
                  <td>
                     <input type="image" src="images/search.jpeg" value="submit" width="20" height="20">
                  </td>
                       </form>
                </tr>
             </table>
            <hr/>
            <?php
$search= $_GET['search'];
$terms = explode(" ",$search);

$query= "SELECT * FROM product WHERE " ;

foreach ($terms as $each)
{
   // $i++;
    if($each)
        $query .=" keywords LIKE '%$each%' " ;
    else
        $query .= " OR keywords LIKE '%$each%' ";
        }
    
            $con=mysql_connect("localhost","nalin","");
            mysql_select_db("comic",$con);
            $query= mysql_query($query);
            $numrows =mysql_num_rows($query);                                
            
            if($numrows > 0 ){
            while($row=mysql_fetch_assoc($query))
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
                echo "<img src=productmanagement/prod_get_img.php?product_id=".$row['product_id']."/>";
            
            }
        }
            else
            echo "not found";
            
            mysql_close();
            ?>
    </body>
</html>