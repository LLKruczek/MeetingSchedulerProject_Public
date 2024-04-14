<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

//echo "this is a php file.";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_id=$_SESSION['session_user_id'];
    $pre_password = $_POST["pre_password"];
    $new_password = $_POST["new_password"];
    
    //echo "successfully obtained post variables.";
     
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

    $get_password_query="SELECT password FROM users WHERE user_id=".$user_id.";";
    //echo "SQL Query: $get_password_query";

    $result=$conn->query($get_password_query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    
    //echo "successfully retrieved stored password.";
    $userInfo=$result->fetch_assoc();
    $userPassword=$userInfo["password"];

    //echo "user password is ".$userPassword; 

    if($userPassword!=$pre_password){
        $response = "Wrong password.";
    }
    else if ($pre_password==$new_password){
	$response = "Please select a different password.";
    }
    else{
        $update_password_query="
            UPDATE users
            SET
                password = ?
            WHERE
                user_id = ?;
        ";
        
        $stmt = $conn->prepare($update_password_query);
        
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        
        $paramCount = $stmt->param_count;
        //echo "Number of parameters: $paramCount\n";
        
        if (!$stmt->bind_param('si', $new_password, $user_id)) {
                die("Binding parameters failed: " . $stmt->error);
        }
            
        $stmt->execute();
        
        $response="Password successfully reset.";
        
        //echo "successfully prepared query.";
    }


    echo json_encode(array("success" => true, "message" => $response));

    $conn->close();
} 

else {
    // If accessed directly without a form submission, redirect to the form page
    header("account_settings.php");
    exit();
}


?>
