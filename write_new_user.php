<?php

//echo "this is a php file.";
//echo "test";
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"];
    $pronoun = $_POST["pronoun"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $timezone = $_POST["timezone"];
    $user_password = $_POST["password"];

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

    $check_email_query="
        SELECT COUNT(*) AS num_email FROM users
        WHERE
            user_email = ?;
    ";
    
    $stmt = $conn->prepare($check_email_query);
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    //echo "successfully prepared sql statement.";

    if (!$stmt->bind_param('s', $email)) {
            die("Binding parameters failed: " . $stmt->error);
    }
        
    //echo "query successfully binded parameters.";
    $result=$stmt->execute();

    if (!$result){
        die("Invalid query: ".$conn->error);
    }

    $stmt->bind_result($num_email);
    $stmt->fetch();
    //echo $num_email;

    $stmt->close();

    if ($num_email==1){
	$response="Email already exists. Please sign in instead.";
	$user_exists=true;
    }
    else{
        $user_exists=false;
        $response="";
	$insert_query="
            INSERT INTO users (user_name, user_email, user_pronoun, phone_number, time_zone, password) VALUES (?, ?, ?, ?, ?, ?);
        ";
    
        $stmt_insert = $conn->prepare($insert_query);
    
        if (!$stmt_insert) {
            die("Prepare failed: " . $conn->error);
        }

        if (!$stmt_insert->bind_param('sssiss', $name, $email, $pronoun, $phone, $timezone, $user_password)) {
            die("Binding parameters failed: " . $stmt->error);
        }

        //echo "successfully prepared sql statement.";
        $result=$stmt_insert->execute();
        $stmt_insert->close();
    }
    echo json_encode(array("success" => $user_exists, "message" => $response));
    $conn->close(); 


}
else {
    // If accessed directly without a form submission, redirect to the form page
    header("edit_info.php");
    exit();
}


?>
