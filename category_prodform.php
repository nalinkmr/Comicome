
<html>
    <head>
    <title>CATEGORY_ADD</title>
    <style> 
body {
   background:url("prod.jpg"); 
     background-size: 1300px 1080px;
}
    </style>
    </head>
<body>
<form method="post" action="category_prodstore.php" enctype="multipart/form-data">
   <font size="10" color="white"> Select category to upload</font>
    <hr>
    <br/>
  <b> Name:<input type="text" name="pname"/></b> 
    </br>
    </br>
        <b> Description: <input type="text" style="background-color:LightGreen" placeholder="enter description" name="des"/></b> 
  <b> upload_product:<input type="file" name="pphoto"/></b> 

    </br>
    </br>

  <b>  <input type="submit" value="Upload" name="submit"/></b> 
</form>
</body>
</html>
