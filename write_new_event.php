<?php
// Include the PHP file
include 'getAccountDetails.php';

//echo "this is a php file.";
//echo "test";
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST["event_name"];
    $event_start_time = $_POST["event_start_time"];
    $event_end_time = $_POST["event_end_time"];
    $event_date = $_POST["event_date"];
    $event_location = $_POST["event_location"];
    $event_description = $_POST["event_description"];
    $user_id=$_SESSION['session_user_id'];
    //echo "session_user_id is ".$user_id;
    $participants=$_POST["participant_email"];
    //var_dump($participants);
    $organizer = $userEmail;
    // Convert event start time and end time to UNIX timestamps
    $timeZone=$timeZone;
    date_default_timezone_set($timeZone);
    $unix_start_time = strtotime("$event_date $event_start_time");
    $unix_end_time = strtotime("$event_date $event_end_time");
    //echo $unix_end_time;
    //echo $unix_end_time;

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
    $event_id=get_event_id($conn);
    //echo "new event id is ".$event_id;

    // Check if the organizer exists in the users table
    if (!checkOrganizer($organizer, $conn)) {
        $response = "Organizer does not exist. Please sign up as an organizer first.";
        $event_created = false;
    } else {
        // Check if the participants exist in the users table
        if (!checkParticipants($participants, $conn)){
            $event_created = false;
            $response="Invalid participant email.";
        }
        else{
            $event_created = true;
            $response = "";
            $insert_query = "
                INSERT INTO events (event_id, event_name, event_date, event_start_time, event_end_time, unix_start_time, unix_end_time, event_location, event_description, organizer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
            ";

            $stmt_insert = $conn->prepare($insert_query);

            if (!$stmt_insert) {
                die("Prepare failed: " . $conn->error);
            }

            if (!$stmt_insert->bind_param('issssiisss', $event_id, $event_name, $event_date, $event_start_time, $event_end_time, $unix_start_time, $unix_end_time, $event_location, $event_description, $organizer)) {
                die("Binding parameters failed: " . $stmt_insert->error);
            }

            //echo "successfully prepared sql statement.";
            $result_insert = $stmt_insert->execute();
            $stmt_insert->close();

            write_event_participants($participants, $event_id, $user_id, $conn);
            }
        }

    echo json_encode(array("success" => $event_created, "message" => $response));
    $conn->close(); 

} else {
    // If accessed directly without a form submission, redirect to the form page
    header("edit_info.php");
    exit();
}

?>

<?php
    function checkParticipants($participants, $conn) {
        foreach($participants as $participant){
            //echo $participant;
            $check_user_query = "
                SELECT COUNT(*) AS num_email FROM users
                WHERE
                user_email = ?;
            ";
    
            $stmt_check_user = $conn->prepare($check_user_query);
    
            if (!$stmt_check_user) {
                die("Prepare failed: " . $conn->error);
            }

            if (!$stmt_check_user->bind_param('s', $participant)) {
                die("Binding parameters failed: " . $stmt_check_user->error);
            }

            $result_check_user = $stmt_check_user->execute();

            if (!$result_check_user) {
                die("Invalid query: " . $conn->error);
            }

            $stmt_check_user->bind_result($num_email);
            $stmt_check_user->fetch();
            //echo $num_email;

            $stmt_check_user->close();
            
            if ($num_email==0){
                return false;
            }
        }
        return true;
    }

    function checkOrganizer($organizer, $conn) {
        $check_organizer_query = "
        SELECT COUNT(*) AS num_organizer FROM users
        WHERE
            user_email = ?;
         ";
    
        $stmt_check_organizer = $conn->prepare($check_organizer_query);
    
        if (!$stmt_check_organizer) {
            die("Prepare failed: " . $conn->error);
        }

        if (!$stmt_check_organizer->bind_param('s', $organizer)) {
            die("Binding parameters failed: " . $stmt_check_organizer->error);
        }

        $result_check_organizer = $stmt_check_organizer->execute();

        if (!$result_check_organizer) {
            die("Invalid query: " . $conn->error);
        }

        $stmt_check_organizer->bind_result($num_organizer);
        $stmt_check_organizer->fetch();
        //echo $num_organizer;

        $stmt_check_organizer->close();
        if ($num_organizer==0 or $num_organizer>1){
            return false;
        }
        return true;

    }

    function get_event_id($conn){
        $result=$conn->query("SELECT COUNT(*) AS num_events FROM events;");
        $num_events_row=$result->fetch_assoc();
        $num_events=$num_events_row["num_events"];
        if ($num_events==0){
            $event_id=0;
        }
        else{
            $get_id_query="SELECT MAX(event_id)+1 AS new_event_id FROM events;";
            $result=$conn->query($get_id_query);
            $eventInfo=$result->fetch_assoc();
            $event_id=$eventInfo["new_event_id"];
        }
        return $event_id;
    }

    function write_event_participants($participants, $event_id, $user_id, $conn){
        $insert_query = "
                INSERT INTO participants (event_id, user_id) VALUES (".$event_id.", ".$user_id.");
            ";

        $result=$conn->query($insert_query);

        //var_dump($participants);    

        // SQL query template
        $insert_query = "
            INSERT INTO participants (event_id, user_id)
            SELECT ?, u.user_id
            FROM users u
            WHERE u.user_email = ?;
        ";

        // Prepare the statement
        $stmt = $conn->prepare($insert_query);

        // Check if the preparation was successful
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters and execute the statement for each participant
        foreach ($participants as $participant) {
            $user_email = $participant;

            // Bind parameters
            $stmt->bind_param('is', $event_id, $user_email);

            // Execute the statement
            $result = $stmt->execute();

            // Check if execution was successful
            if (!$result) {
                die("Error executing statement: " . $stmt->error);
            }
        }

        // Close the statement and connection
        $stmt->close();


            

    }
?>
