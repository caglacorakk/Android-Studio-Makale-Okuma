<?php
$conn = mysqli_connect("localhost", "root", "","interesting" );

if(!$conn){
	die("Connectioned failed!" . mysqli_connect_error());
}

$user_email = $_POST["identifier_loginEmail"];
$user_pass = $_POST["identifier_loginPassword"];
//$user_email="halilcorak22@gmail.com";
//$user_pass="123";

$mysql_query = "SELECT * FROM users WHERE email = '$user_email'
AND password = '$user_pass'";

$result = mysqli_query($conn,$mysql_query);


if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	$email = $row["email"];


	echo "true,".$name.",".$email;
}
else{
	echo "false,1,1";
}

?>