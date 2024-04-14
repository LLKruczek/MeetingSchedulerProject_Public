<?php
session_start();

//echo "this is a php file.";
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $user_password = $_POST["password"];

    //echo "successfully prepared post variables.";
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'RDV';
    
    $conn = new mysqli($host, $username, $password, $database);
    
    //Check the connection
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

    if ($num_email==0){
	$response="User does not exist.";
        $user_login=false;
    }
    else if ($num_email==1){
        $get_password_query="
            SELECT user_id, password FROM users 
            WHERE user_email=?;
        ";
    
        $stmt_get_password = $conn->prepare($get_password_query);
    
        if (!$stmt_get_password) {
            die("Prepare failed: " . $conn->error);
        }

        if (!$stmt_get_password->bind_param('s', $email)) {
            die("Binding parameters failed: " . $stmt_get_password->error);
        }

        //echo "successfully prepared sql statement.";
        $result=$stmt_get_password->execute();
        //echo "successfully executed sql statement.";
        $stmt_get_password->bind_result($stored_user_id, $stored_password);
        $stmt_get_password->fetch();
        //echo $stored_password;

        if ($user_password==$stored_password){
	$response="";
        $user_login=true;
        $_SESSION['session_user_id']=$stored_user_id;
	}
        else {
	$response="User email or password does not match.";
        $user_login=false;
        }

        $stmt_get_password->close();

    }
    else {
        $user_login=false;
        $response="Error.";
    }
    $conn->close(); 
    header('Content-Type: application/json');
    echo json_encode(array("success" => $user_login, "message" => $response));
    exit();

}
else {
    // If accessed directly without a form submission, redirect to the form page
    header("edit_info.php");
    exit();
}


?>
