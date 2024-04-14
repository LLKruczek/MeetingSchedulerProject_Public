<?php

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
$get_event_query="
    SELECT 
	event_name, 
        TIME(CONVERT_TZ(FROM_UNIXTIME(events.unix_start_time), @@global.time_zone, users.time_zone)) AS event_start_time,
        TIME(CONVERT_TZ(FROM_UNIXTIME(events.unix_end_time), @@global.time_zone, users.time_zone)) AS event_end_time,
        DATE(CONVERT_TZ(FROM_UNIXTIME(events.unix_start_time), @@global.time_zone, users.time_zone)) AS event_date,
	event_location,
	event_description
    FROM
        events
    JOIN
        users ON users.user_id = ".$_SESSION['session_user_id']."
    WHERE event_id=".$_GET['event_id'];

$result=$conn->query($get_event_query);

if (!$result){
    die("Invalid query: ".$conn->error);
}

$eventInfo=$result->fetch_assoc();
$eventName=$eventInfo["event_name"];
$eventDate=$eventInfo["event_date"];
$eventStartTime=$eventInfo["event_start_time"];
$eventEndTime=$eventInfo["event_end_time"];
//$eventUnixStart=$eventInfo["unix_start_time"];
//$eventUnixEnd=$eventInfo["unix_end_time"];
$eventLocation=$eventInfo["event_location"];
$eventDescription=$eventInfo["event_description"];

$get_participants_query="SELECT user_id FROM participants WHERE event_id=27";
$result=$conn->query($get_participants_query);
if (!$result){
    die("Invalid query: ".$conn->error);
}
$participants=array();
while ($row=$result->fetch_assoc()){
    $participants[]=$row['user_id'];
}
//var_dump($participants);
// Close the connection when done
$conn->close();

?>
