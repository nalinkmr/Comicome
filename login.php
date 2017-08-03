<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysql_connect($hostname, $username, $password)or die("could not connect to database");
$selected=mysql_select_db("comic", $conn);
$myname = $_POST['username'];
$mypassword = $_POST['password'];

$myusername=stripslashes($myusername);
$mypassword=stripslashes($mypassword);

$query = "SELECT * FROM customer WHERE myname='$myname' and mypassword='$mypassword'";

$result = mysql_query($query);
$count = mysql_num_rows($result);
$row = mysql_fetch_row($result);
$uname= $row[1];
if($count==0)
{
    header('Location: homestart.html');
}
elseif($uname=='admin')
{
    $_SESSION['username']= $myname;
    header("location: admin.html");
}
else
{
    $_SESSION["username"]= $myname;
    header('Location: homesignedin.html	');
    
}
    
?> 
