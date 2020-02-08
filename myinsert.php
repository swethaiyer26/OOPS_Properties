<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myfriend(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql = "INSERT INTO myfriend(firstname,lastname,email) VALUES('swetha','janardhan','swetha@google.com'),
('arjun','arvind','arjun@google.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>