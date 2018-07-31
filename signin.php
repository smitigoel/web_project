<?php
  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "frositedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from regtb where username='".$username"', email='".$email"', password='".$password"' ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"]. " - email: " . $row["email"]. " " . $row["password"]. "<br>";
    
	echo "login successfully
	<a href=webign.html>"}
} else {
    echo "0 results";
	echo "details are  not correct"
}
$conn->close();

?>