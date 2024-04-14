<?php
session_start();

// Database configuration

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'RDV';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    //$message="connection failed";
    die("Connection failed: " . $conn->connect_error);
}

//echo "user id is ".$_SESSION['session_user_id'];
//$message= "Connected successfully";
$get_name_query="SELECT * 
FROM users
WHERE user_id=".$_SESSION['session_user_id'];


$result=$conn->query($get_name_query);

if (!$result){
    die("Invalid query: ".$conn->error);
}

$userInfo=$result->fetch_assoc();
$userName=$userInfo["user_name"];
$userEmail=$userInfo["user_email"];
$userPronoun=$userInfo["user_pronoun"];
$phoneNumber=$userInfo["phone_number"];
$timeZone=$userInfo["time_zone"];



// Close the connection when done
$conn->close();

?>
