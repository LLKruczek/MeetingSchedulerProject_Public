<?php
//session_start();
?>

<?php
// Include the PHP file
include 'getAccountDetails.php';
//echo $_SESSION['session_user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <meta name="author" content="JAC Kruczek">
  <title>Rendez-Vous Scheduler</</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.5.2/css/rivet.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body class="rvt-layout">

<!-- **************************************************************************
    APP CREATE/EDIT RESOURCE - TWO-COLUMN LAYOUT WITH ANCHORED SIDEBAR
    
    -> rivet.iu.edu/layouts/app-create-or-edit-resource-page/
*************************************************************************** -->

<!-- **************************************************************************
    Header

    -> rivet.iu.edu/components/header/
*************************************************************************** -->

<header class="rvt-header-wrapper">
    
    <!-- **********************************************************************
        "Skip to main content" link for keyboard users
    *********************************************************************** -->

    <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>
    
    <!-- **********************************************************************
        Global header area
    *********************************************************************** -->
    
    <div class="rvt-header-global">
        <div class="rvt-p-lr-md">
            <div class="rvt-header-global__inner">
                <div class="rvt-header-global__logo-slot">
                    <a class="rvt-lockup" href="#0">
                        
                        <!-- **************************************************
                            Trident logo
                        *************************************************** -->

                        <div class="rvt-lockup__tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-lockup__trident" viewBox="0 0 28 34">
                                <path fill="currentColor" d="M-3.34344e-05 4.70897H8.83308V7.174H7.1897V21.1426H10.6134V2.72321H8.83308V0.121224H18.214V2.65476H16.2283V21.1426H19.7889V7.174H18.214V4.64047H27.0471V7.174H25.0614V23.6761L21.7746 26.8944H16.2967V30.455H18.214V33.8787H8.76463V30.592H10.6819V26.8259H5.20403L1.91726 23.6077V7.174H-3.34344e-05V4.70897Z"></path>
                            </svg>
                        </div>

                        <!-- **************************************************
                            Application title 
                        *************************************************** -->

                        <div class="rvt-lockup__body">
                            <span class="rvt-lockup__title">Rendez-Vous Scheduler</span>
                        </div>
                    </a>
                </div>
                <div class="rvt-header-global__controls">
                    <div data-rvt-disclosure="menu" data-rvt-close-click-outside>
                        <button aria-expanded="false" class="rvt-global-toggle rvt-global-toggle--menu rvt-hide-lg-up" data-rvt-disclosure-toggle="menu">
                            <span class="rvt-sr-only">Menu</span>
                            <svg class="rvt-global-toggle__open" fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="M15 4H1V2h14v2Zm0 5H1V7h14v2ZM1 14h14v-2H1v2Z"></path></svg>
                            <svg class="rvt-global-toggle__close" fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m3.5 2.086 4.5 4.5 4.5-4.5L13.914 3.5 9.414 8l4.5 4.5-1.414 1.414-4.5-4.5-4.5 4.5L2.086 12.5l4.5-4.5-4.5-4.5L3.5 2.086Z"></path></svg>
                        </button>

                        <!-- ******************************************************
                            Primary navigation
                        ******************************************************* -->

                        <!--<nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
                            <ul class="rvt-header-menu__list">
                                <li class="rvt-header-menu__item">
                                    <a class="rvt-header-menu__link" href="#0">Nav Item One</a>
                                </li>
                                <li class="rvt-header-menu__item">
                                    <a class="rvt-header-menu__link" href="#0">Nav Item Two</a>
                                </li>
                                <li class="rvt-header-menu__item rvt-header-menu__item--current">
                                    <div class="rvt-header-menu__dropdown rvt-dropdown" data-rvt-dropdown="primary-nav-3">
                                        <div class="rvt-header-menu__group">
                                            <a class="rvt-header-menu__link" href="#0" aria-current="page">Nav Item Three</a>
                                            <button aria-expanded="false" class="rvt-dropdown__toggle rvt-header-menu__toggle" data-rvt-dropdown-toggle="primary-nav-3">
                                                <span class="rvt-sr-only">Toggle Sub-navigation</span>
                                                <svg class="rvt-global-toggle__open" fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m15.146 6.263-1.292-1.526L8 9.69 2.146 4.737.854 6.263 8 12.31l7.146-6.047Z"></path></svg>
                                            </button>
                                        </div>
                                        <div class="rvt-header-menu__submenu rvt-dropdown__menu rvt-dropdown__menu--right" data-rvt-dropdown-menu="primary-nav-3" hidden>
                                            <ul class="rvt-header-menu__submenu-list">
                                                <li class="rvt-header-menu__submenu-item">
                                                    <a class="rvt-header-menu__submenu-link" href="#0">Sub One</a>
                                                </li>
                                                <li class="rvt-header-menu__submenu-item">
                                                    <a class="rvt-header-menu__submenu-link" href="#0">Sub Three</a>
                                                </li>
                                                <li class="rvt-header-menu__submenu-item">
                                                    <a class="rvt-header-menu__submenu-link" href="#0">Sub Three</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="rvt-header-menu__item">
                                    <a class="rvt-header-menu__link" href="#0">Nav Item Four</a>
                                </li>
                            </ul>-->

                            <!-- **************************************************
                                Avatar and "log out" link
                            *************************************************** -->

                            <div class="rvt-flex rvt-items-center rvt-m-left-md rvt-p-bottom-md rvt-p-bottom-none-lg-up">
                                <div class="rvt-avatar rvt-avatar--xs">
                                    <span class="rvt-avatar__text"><?php echo substr($userName, 0, 1); ?></span>
                                </div>
                                <div class="rvt-ts-14 rvt-m-left-xs rvt-p-right-xs rvt-m-right-xs rvt-border-right"><?php echo $userName; ?></div>
                                <a href="#0" id="logoutLink" class="rvt-ts-14">Log out</a> 
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#logoutLink").on("click", function (e) {
                e.preventDefault(); // Prevent the default hyperlink behavior

                // Ajax request to the logout script
                $.ajax({
                    url: "logout.php",
                    type: "POST",
                    dataType: "json",
                    success: function (data) {
                        if (data.success) {
                            // Redirect to the main page after successful logout
                            window.location.href = "landing_page.html"; 
                        }
                    },
                    error: function (error) {
                        console.error("Logout failed:", error);
                    }
                });
            });
        });
    </script>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details">

    <!-- **********************************************************************
        Sidebar
    *********************************************************************** -->

    <div class="rvt-layout__sidebar [ rvt-p-top-xxl rvt-p-left-md rvt-bg-black-000 ]" id="section-nav">

        <!-- **********************************************************************
            Sidenav
        *********************************************************************** -->
        
        <!--
        <nav class="rvt-sidenav" aria-labelledby="details-pages" data-rvt-sidenav>
            <span class="rvt-sidenav__label" id="details-pages">Details pages</span>
            <ul class="rvt-sidenav__list">
                <li class="rvt-sidenav__item">
                    <a href="#0" class="rvt-sidenav__link">Side navigation one</a>
                </li>
                <li class="rvt-sidenav__item">
                    <div class="rvt-sidenav__item-wrapper">
                        <a href="#0" class="rvt-sidenav__link" aria-current="page">Side navigation two</a>
                        <button class="rvt-sidenav__toggle" data-rvt-sidenav-toggle="toggle-2">
                            <span class="rvt-sr-only">Show or hide additional items in this section</span>
                            <svg fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m15.146 6.263-1.292-1.526L8 9.69 2.146 4.737.854 6.263 8 12.31l7.146-6.047Z"></path></svg>
                        </button>
                    </div>
                    <ul class="rvt-sidenav__list" data-rvt-sidenav-list="toggle-2">
                        <li class="rvt-sidenav__item">
                            <a href="#0" class="rvt-sidenav__link">Nested child one</a>
                        </li>
                        <li class="rvt-sidenav__item">
                            <a href="#0" class="rvt-sidenav__link">Nested child one</a>
                        </li>
                        <li class="rvt-sidenav__item">
                            <a href="#0" class="rvt-sidenav__link">Nested child one</a>
                        </li>
                        <li class="rvt-sidenav__item">
                            <a href="#0" class="rvt-sidenav__link">Nested child one</a>
                        </li>
                    </ul>
                </li>
                <li class="rvt-sidenav__item">
                    <a href="#0" class="rvt-sidenav__link">Side navigation three</a>
                </li>
                <li class="rvt-sidenav__item">
                    <a href="#0" class="rvt-sidenav__link">Side navigation four</a>
                </li>
                <li class="rvt-sidenav__item">
                    <a href="#0" class="rvt-sidenav__link">Side navigation five</a>
                </li>
            </ul>
        </nav>

            -->



    </div>

     <script>
fetch("sidenav.php")
 	.then(response => response.text())
 	.then(data => document.getElementById("section-nav").innerHTML = data);
 </script>
    <div class="rvt-layout__content [ rvt-p-top-xxl rvt-p-lr-md rvt-p-lr-xxl-md-up ]">
        <div class="rvt-prose">

            <!-- **************************************************************
                Breadcrumb navigation
            *************************************************************** -->

            <nav class="rvt-flex rvt-items-center" role="navigation" aria-label="Breadcrumb">
                <ol class="rvt-breadcrumbs rvt-grow-1">
                    <li>
                        <a href="landing_after_login.php">
                            <span class="rvt-sr-only">Home</span>
                            <svg fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m8 .798 7 4.667V15H9v-4.444H7V15H1V5.465L8 .798ZM3 6.535V13h2V8.556h6V13h2V6.535L8 3.202 3 6.535Z"></path></svg>
                        </a>
                    </li>
                </ol>
            </nav>

            <!-- **************************************************************
                Page title
            *************************************************************** -->
            
            <h1 class="rvt-m-top-xs">Create Event</h1>
        </div>
        <div class="rvt-container-lg rvt-m-top-xl rvt-m-left-none rvt-m-right-none rvt-p-right-none rvt-p-left-none">
            <div class="rvt-row">
                <div class="rvt-cols-8-lg">

                   

                    <!-- ******************************************************
        Create/edit form
    ******************************************************* -->
                    <!-- <form action="write_new_user.php" method="post"> -->
                    <form action="">
                        <!-- Your form fields go here -->
                        <!-- **************************************************
                    Grouped set of fields
                *************************************************** -->

                        <fieldset class="rvt-fieldset">
                            <legend class="rvt-legend [ rvt-ts-18 rvt-border-bottom rvt-p-bottom-xs ]">Please fill in the fields below. </legend>
                            <p class="rvt-ts-14">Required fields are marked with <span class="rvt-color-orange-500 rvt-text-bold">*</span></p>
                            <!-- <div class="rvt-m-top-sm">
            <label class="rvt-label" for="eventOrganizer">Event Organizer:</label>
            <input class="rvt-input" type="text" id="eventOrganizer" name="eventOrganizer" required>
            </div> -->

                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="event_name">Event Name: <span class="rvt-color-orange-500 rvt-text-bold">*</span> </label>
                                <input class="rvt-input" type="text" id="event_name" name="event_name" placeholder="Enter the event name" required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="event_date">Event Date: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="date" id="event_date" name="event_date" required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="event_time">Event Start Time: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="time" id="event_start_time" name="event_start_time" required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="event_time">Event End Time: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="time" id="event_end_time" name="event_end_time" required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" <label for="event_location">Event Location:  <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="text" id="event_location" name="event_location" placeholder="Enter the event location"required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="event_description">Event Description: </label>
                                <textarea class="rvt-input" id="event_description" name="event_description" rows="4" placeholder="Enter the event description. Example: Join us for an exciting event!"></textarea>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="add_participants">Add Participants: </label>
                                
                                <div id="participantsContainer">
                                <!-- Participant Input Template -->
 
                                    <div class="participant-input">
                                        <input type="email" name="participant_email[]" required>
                                        
                                        <button type="button" class="removeParticipant rvt-button rvt-button--plain">Remove</button>
                                    </div>
                                
                                </div>
                                <button type="button" id="addParticipant" class="rvt-button rvt-button--plain">Add Another</button>
                              
                            <div id="errorMessageDiv" class="rvt-inline-alert rvt-inline-alert--danger">

                            </div>

                            </div>



                        </fieldset>

                        <br>

                        <!-- Submit button -->
                        <button class="rvt-button" type="submit">Submit</button>

                        <!-- Save and Exit button -->
                        <button class="rvt-button rvt-button--danger" type="button" onclick="exit()">Exit</button>

                        <div class="rvt-button-group [ rvt-m-top-xl ]">


                            


                        </div>

                    </form>

                    <script>
                                // Generate a unique event ID using the current timestamp
                                const eventId = new Date().getTime();

                                // Set the default value of the date input to the current date
                                const currentDate = new Date();
                                const year = currentDate.getFullYear().toString();
                                const month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
                                const day = currentDate.getDate().toString().padStart(2, '0');
                                document.getElementById('event_date').value = `${year}-${month}-${day}`;

                                // Set the default value of the time input to the current time
                                const hours = currentDate.getHours().toString().padStart(2, '0');
                                const minutes = currentDate.getMinutes().toString().padStart(2, '0');
                                document.getElementById('event_start_time').value = `${hours}:${minutes}`;

                                // Calculate the end time (current time + 1 hour)
                                const endTime = new Date(currentDate.getTime() + 60 * 60 * 1000);
                                const endHours = endTime.getHours().toString().padStart(2, '0');
                                const endMinutes = endTime.getMinutes().toString().padStart(2, '0');

                                // Set the default value of the end time input to the calculated end time
                                document.getElementById('event_end_time').value = `${endHours}:${endMinutes}`;

                                // Set the default value of the description textarea
                                //const defaultDescription = "Join us for an exciting event!";
                                //document.getElementById('event_description').value = defaultDescription;

                                eventStartTimeInput.addEventListener('input', updateUnixTime);
                                eventEndTimeInput.addEventListener('input', updateUnixTime);

                                function updateUnixTime() {
                                    const startTime = new Date(`${currentDate.toISOString().split('T')[0]}T${eventStartTimeInput.value}`);
                                    const endTime = new Date(`${currentDate.toISOString().split('T')[0]}T${eventEndTimeInput.value}`);

                                    const unixStartTime = startTime.getTime() / 1000; // Convert to seconds
                                    const unixEndTime = endTime.getTime() / 1000; // Convert to seconds
                                }
                            </script>

                    <script>
                        $(document).ready(function () {
                            // Counter for unique IDs
                            var participantCounter = 1;

                            // Add Participant
                            $("#addParticipant").on("click", function () {
                                if (participantCounter < 5) { // Limit to 5 participants
                                    var newParticipant = $(".participant-input:first").clone();
                                    newParticipant.find("input").val("");
                                    newParticipant.find("label").attr("for", "participant_email[" + participantCounter + "]");
                                    newParticipant.find("input").attr("name", "participant_email[]");
                                    $("#participantsContainer").append(newParticipant);
                                    participantCounter++;
                                 }
                            });

                            // Remove Participant
                            $("#participantsContainer").on("click", ".removeParticipant", function () {
                                if (participantCounter>1){
                                    $(this).parent().remove();
                                    participantCounter--;
                                }
                            });
                        });
                    </script>

                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const form = document.querySelector("form");
                            const errorMessageContainer = document.getElementById("errorMessageDiv");

                            form.addEventListener("submit", function (event) {
                                event.preventDefault();

                                // Create FormData object to send form data to the server
                                const formData = new FormData(form);

                                // Send form data to the server using fetch
                                fetch("write_new_event.php", {
                                    method: "POST",
                                    body: formData,
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (!data.success) {
                                        // Display error message
                                        errorMessageContainer.textContent = data.message;
                                    } else {
                                        // Handle other scenarios if needed
                                        errorMessageContainer.textContent = data.message;
                                        alert("Event Creation Successful.");
                                        window.location.href = "view_events.php";
                                    }
                                })
                                .catch(error => {
                                    console.error("Error:", error);
                                });
                            });
                        });
                    </script>

                    <script>
                        function exit() {
                            // Add any logic for saving data before exiting
                            // alert("Data saved. Exiting...");
                            // You can also add additional actions like redirecting to another page
                            window.location.href = "view_events.php";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- **************************************************************************
    Footer

    -> rivet.iu.edu/components/footer/
**************************************************************************** -->

<footer class="rvt-footer-base rvt-footer-base--light">
    <div class="rvt-footer-base__inner [ rvt-p-lr-md ]">
        <div class="rvt-footer-base__logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <polygon fill="currentColor" points="15.3 3.19 15.3 5 16.55 5 16.55 15.07 13.9 15.07 13.9 1.81 15.31 1.81 15.31 0 8.72 0 8.72 1.81 10.12 1.81 10.12 15.07 7.45 15.07 7.45 5 8.7 5 8.7 3.19 2.5 3.19 2.5 5 3.9 5 3.9 16.66 6.18 18.98 10.12 18.98 10.12 21.67 8.72 21.67 8.72 24 15.3 24 15.3 21.67 13.9 21.67 13.9 18.98 17.82 18.98 20.09 16.66 20.09 5 21.5 5 21.5 3.19 15.3 3.19" fill="#231f20" />
            </svg>
        </div>
        <ul class="rvt-footer-base__list">
            <li class="rvt-footer-base__item">
                <a class="rvt-footer-base__link" href="https://accessibility.iu.edu/assistance/">Accessibility</a>
            </li>
            <li class="rvt-footer-base__item">
                <a class="rvt-footer-base__link" href="#0">Privacy Notice</a>
            </li>
            <li class="rvt-footer-base__item">
                <a class="rvt-footer-base__link" href="#0">Copyright</a> © 2023 The Trustees of <a class="rvt-footer-base__link" href="https://www.iu.edu">Indiana University</a>
            </li>
        </ul>
    </div>
</footer>
<script src="https://unpkg.com/rivet-core@2.5.2/js/rivet.min.js"></script>
<script>
  Rivet.init();
</script>
</body>
</html>
