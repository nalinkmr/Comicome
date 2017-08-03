<html>
    <head>
    <title>PRODUCTS_ADD_REMOVE</title>
    <style> 
body {
   background:url("images/prod.jpg"); 
     background-size: 1300px 1080px;
}
    </style>
    </head>
<body>
<form method="post"  action="prod_store.php" enctype="multipart/form-data">
   <font size="10" color="white"> Select product to upload</font>
    <hr>
    <br/>
  <b> Name:<input type="text" name="pname"/></b> 
    </br>
    </br>
 <b>  amount:<input type="number" style="background-color:LightGreen" placeholder="enter amount" name="amount"/></b> 
    <b> quantity: <input type="number" style="background-color:LightGreen" placeholder="enter quantity" name="quantity"/></b> 
        <b> Description: <input type="text" style="background-color:LightGreen" placeholder="enter description" name="des"/></b> 
            <b> keywords: <input type="text" style="background-color:LightGreen" placeholder="enter description" name="key"/></b> 

 <font color="white"> <b> upload_product:<input type="file" name="pphoto"/></b> </font> 

    </br>
    </br>

  <b>  <input type="submit" value="Upload" name="submit"/></b> 
</form>
</body>
</html>
