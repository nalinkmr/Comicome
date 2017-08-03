
<?php

            $con=mysql_connect("localhost","nalin","");

            mysql_select_db("comic",$con);
            $tb="customer";
 
      
            $myname=$_POST['name'];
            $mylastname=$_POST['lastname'];
            $myemail=$_POST['email'];
            $myagainmail=$_POST['remail'];

            $mypassword=$_POST['password'];
            $mycpassword = $_POST['confirmpassword'];
       //     $mydate = $_POST['date'];
         //   $myyear = $_POST['year'];

            
            

         //   $result=mysql_query($query);
           
            $sign="INSERT INTO $tb(myname,mylastname,myemail,myagainmail,mypassword,mycpassword)VALUES('$myname','$mylastname','$myemail','$myagainmail','$mypassword','$mycpassword')";
            
            $result = mysql_query($sign,$con);
if($result)
{
        header('Location: thankyou.php	');

}
 else
 {
    echo 'login again!';
}
            
            mysql_close($con);
        
    ?>