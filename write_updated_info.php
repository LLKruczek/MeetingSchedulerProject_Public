<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

//echo "this is a php file.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id=$_SESSION['session_user_id'];
    $name = $_POST["name"];
    $pronoun = $_POST["pronoun"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $timezone = $_POST["timezone"];
    
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
        UPDATE users
        SET
            user_name = ?,
            user_pronoun = ?,
            user_email = ?,
            phone_number = ?,
            time_zone = ?
        WHERE
            user_id = ?;
    ";
    
    $stmt = $conn->prepare($update_query);
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    //echo "SQL Query: $update_query\n";
    //echo "Values: $name, $email, $phone, $timezone, $user_id\n";
        
    //$paramCount = $stmt->param_count;
    //echo "Number of parameters: $paramCount\n";
    
    if (!$stmt->bind_param('sssisi', $name, $pronoun, $email, $phone, $timezone, $user_id)) {
            die("Binding parameters failed: " . $stmt->error);
    }
        
    //echo "query successfully prepared.";
    $stmt->execute();
    // Close the connection when done
    $conn->close();

    // Display success message
    $successMessage = "Submission successful! Thank you, $name, for your submission.";
    
    // Return success message as JSON
    echo json_encode(array("success" => true, "message" => $successMessage));

} 

else {
    // If accessed directly without a form submission, redirect to the form page
    header("edit_info.php");
    exit();
}


?>
