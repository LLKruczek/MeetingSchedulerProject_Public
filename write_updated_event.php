<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

//echo "this is a php file.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_id=$_GET['event_id'];
    $event_name = $_POST["event_name"];
    $event_date = $_POST["event_date"];
    $event_start_time = $_POST["event_start_time"];
    $event_end_time = $_POST["event_end_time"];
    $event_location = $_POST["event_location"];
    $event_description = $_POST["event_description"];
    
    //echo "successfully prepared post variables.";
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'RDV';
    
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //echo "successfully connected to the database.";
    
    $update_query="
        UPDATE events
        SET
            event_name = ?,
            event_date = ?,
            event_start_time = ?,
            event_end_time = ?,
            event_location = ?,
            event_description = ?
        WHERE
            event_id = ?;
    ";
    
    $stmt = $conn->prepare($update_query);
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    //echo "SQL Query: $update_query\n";
    //echo "Values: $name, $email, $phone, $timezone, $user_id\n";
        
    //$paramCount = $stmt->param_count;
    //echo "Number of parameters: $paramCount\n";
    
    if (!$stmt->bind_param('ssssssi', $event_name, $event_date, $event_start_time, $event_end_time, $event_location, $event_description, $event_id)) {
            die("Binding parameters failed: " . $stmt->error);
    }
        
    //echo "query successfully prepared.";
    $stmt->execute();
    // Close the connection when done
    $conn->close();

    // Display success message
    $successMessage = "Submission successful!.";
    
    // Return success message as JSON
    echo json_encode(array("success" => true, "message" => $successMessage));

} 

else {
    // If accessed directly without a form submission, redirect to the form page
    header("edit_info.php");
    exit();
}


?>
