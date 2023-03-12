<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax-form";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO ajax (name, email, username, password)
VALUES ('John', 'mamun@example.com', 'Rajubdpro', '134444')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

echo"Currect connetion";
?>


