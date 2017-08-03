<html>
    <head>
    <title>RESULTS</title>
    </head>
    <body bgcolor="black">
        <font color="white">
        
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customer_id, myname, mylastname ,myemail ,myagainmail ,mypassword ,mycpassword FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id -> " . $row["customer_id"]. "&nbsp;&nbsp;&nbsp;Name is -> " . $row["myname"]. "&nbsp;&nbsp;&nbsp;last name -> " . $row["mylastname"]. "&nbsp;&nbsp;&nbsp;E-mail is -> " . $row["myemail"]. "&nbsp;&nbsp;&nbsp; RE-ENTERED E-mail is -> " . $row["myagainmail"]. "&nbsp;&nbsp;&nbsp;password is -> " . $row["mypassword"].  "<br>"; 
    }
} 
else {
echo "NO USER DETAILS IN DATABASE";
}
$conn->close();
?> 
            </font>
        </body>
    </html> 