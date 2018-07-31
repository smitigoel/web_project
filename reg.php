<?php

$servername="localhost";
$pss="";
$db="frositedb";
$username="root";
$conn=new mysqli($servername,$username,$pss,$db);
if(mysqli_connect_errno()/*$conn->connect_error()*/)
{
echo"failed to connect to mysql:".$conn->connect_error;
}
echo "connected succesfully";
if ($_POST) 
{
    //store the data posted from the form into variables
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password1']);

        $sql = "INSERT INTO regtb(username,email,password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql)=== TRUE) {
            echo 'User created successfully';
			echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" type="image" href="image/FS-Logo-2.png" />
			<title>Sign up/in</title>
		<style>
div.transbox {
  margin: 80px;
  background-color: #ffffff;
  border: 2px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  color: #000000;
}
.button {
    border: 2px solid black;
	top:50%;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
	border: 2px solid black;
	border-radius:15px;
}
.button:hover{
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		color:#DE0C59;
		border:2px solid #DE0C59;

}
		</style>
	</head>
	<body background="image/maxresdefault.jpg">
	<font face="Alegria sans" size="12">
	<p>Frosite</p>
	<div align="center" class="transbox">
		<p>Thanks For Registering...</p>
		<a href="signupin.html" class="button" >Sign in</a>
		<pre> </pre>
	</div>
	</body>
</html>';
            

        } 
		else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
        }
	}

?>