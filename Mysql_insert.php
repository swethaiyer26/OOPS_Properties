<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mysql";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 $sql="INSERT into myfriend(firstname,lastname,email) Values('john','Doe','jon@gmail.com')";

 if ($conn-> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
function CloseCon($conn)
 {
 $conn -> close();
 }
   ?>
