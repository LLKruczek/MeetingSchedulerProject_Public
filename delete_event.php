<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

ob_start(); 

//echo "this is a php file.";

    $event_id=$_GET['event_id'];
    //echo $event_id;
    
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
    
    $deleteParticipantsQuery = "DELETE FROM participants WHERE event_id = ?";
    $deleteParticipantsStmt = $conn->prepare($deleteParticipantsQuery);
    $deleteParticipantsStmt->bind_param("i", $event_id);
    $deleteParticipantsStmt->execute();
    $deleteParticipantsStmt->close();

    $deleteEventQuery="
        DELETE FROM events
        WHERE
            event_id = ?;
    ";
    
    $deleteEventStmt  = $conn->prepare($deleteEventQuery);
    
    if (!$deleteEventStmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    //echo "SQL Query: $update_query\n";
    //echo "Values: $name, $email, $phone, $timezone, $user_id\n";
        
    //$paramCount = $stmt->param_count;
    //echo "Number of parameters: $paramCount\n";
    
    if (!$deleteEventStmt->bind_param('i', $event_id)) {
            die("Binding parameters failed: " . $deleteEventStmt->error);
    }
        
    //echo "query successfully prepared.";
    $deleteEventStmt->execute();
    // Close the connection when done
    $conn->close();

    // Display success message
    //$successMessage = "Deletion successful!.";
    
    // Return success message as JSON
    //echo json_encode(array("success" => true, "message" => $successMessage));
    header('Content-Type: text/html; charset=utf-8');
    header("Location: view_events.php");

    ob_end_flush(); 
    exit();


?>
