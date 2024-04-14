<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <meta name="author" content="Le Li Kruczek">
  <title>Rendez-Vous Scheduler - User Registration</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.5.2/css/rivet.min.css">
</head>
<body class="rvt-layout">

<!-- **************************************************************************
    APP CREATE/EDIT RESOURCE - SINGLE-COLUMN LAYOUT
    
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
        <div class="rvt-container-lg">
            <div class="rvt-header-global__inner">
                <div class="rvt-header-global__logo-slot">
                    <a class="rvt-lockup" href="landing_page.html">
                        
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
                            <span class="rvt-lockup__subtitle">Team #5</span>
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

                        <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>

                            <!-- **************************************************
                                Avatar and "log in" link
                            *************************************************** -->

                            <div class="rvt-flex rvt-items-center rvt-m-left-md rvt-p-bottom-md rvt-p-bottom-none-lg-up">
                                <div class="rvt-ts-14 rvt-m-left-xs rvt-p-right-xs rvt-m-right-xs rvt-border-right">Have an account?</div>
                                <a href="login_page.php" class="rvt-ts-14">Log in</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-flex rvt-flex-column rvt-grow-1">
    <div class="rvt-bg-black-000 rvt-border-bottom rvt-p-top-xl">
        <div class="rvt-container-lg rvt-prose rvt-flow rvt-p-bottom-xl">
            
            <!-- **************************************************************
                Breadcrumb navigation
            *************************************************************** -->

            <nav class="rvt-flex rvt-items-center" role="navigation" aria-label="Breadcrumb">
                <ol class="rvt-breadcrumbs rvt-grow-1">
                    <li>
                        <a href="landing_page.html">
                            <span class="rvt-sr-only">Home</span>
                            <svg fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m8 .798 7 4.667V15H9v-4.444H7V15H1V5.465L8 .798ZM3 6.535V13h2V8.556h6V13h2V6.535L8 3.202 3 6.535Z"></path></svg>
                        </a>
                    </li>
                    <li><a href="register_page.php">New user registration</a></li>
                </ol>
            </nav>

            <!-- **************************************************************
                Page title
            *************************************************************** -->
            
            <h1 class="rvt-m-top-xs">New user registration</h1>
        </div>
    </div>

    <!-- **********************************************************************
        Content
    *********************************************************************** -->
    
    <div class="rvt-layout__wrapper [ rvt-p-tb-xxl ]">
        <div class="rvt-container-lg">
            <div class="rvt-row">
                <div class="rvt-cols-8-md rvt-flow rvt-prose">

                    <!-- ******************************************************
                        Alert box
                    ******************************************************* -->

		    <!--
                    <div class="rvt-alert rvt-alert--warning [ rvt-m-bottom-md ]" role="alert" aria-labelledby="list-alert-alert-title" data-rvt-alert="warning">
                        <div class="rvt-alert__title" id="list-alert-alert-title">Alert box</div>
                        <p class="rvt-alert__message">Use this space for error handling, confirmation messages, and warnings.</p>
                        <button class="rvt-alert__dismiss" data-rvt-alert-close>
                            <span class="rvt-sr-only">Dismiss this alert</span>
                            <svg fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m3.5 2.086 4.5 4.5 4.5-4.5L13.914 3.5 9.414 8l4.5 4.5-1.414 1.414-4.5-4.5-4.5 4.5L2.086 12.5l4.5-4.5-4.5-4.5L3.5 2.086Z"></path></svg>
                        </button>
                    </div>
		    -->

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
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="user_name">User name: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="text" id="user_name" name="user_name" required>
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="pronoun">Pronoun: </label>
                                <input class="rvt-input" type="text" id="pronoun" name="pronoun">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="email">Email: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="email" id="email" name="email" required>
                            </div>
			    <div id = "errorMessageDiv" class="rvt-inline-alert rvt-inline-alert--danger">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="phone">Phone number: </label>
                                <input class="rvt-input" type="tel" id="phone" name="phone">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="password">Password: <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <input class="rvt-input" type="password" id="password" name="password" required>
                            </div>
                            <div class="rvt-m-top-lg">
                                <label class="rvt-label" for="select-one">Select your timezone</label>
                            <!--    <select class="rvt-select rvt-validation-danger" name="" id="select-one" aria-describedby="select-option-message"> -->
                                <select class="rvt-select" name="timezone" id="timezone" aria-describedby="select-option-message">
                                    <option value="Pacific/Midway" >(UTC-11:00) Midway Island</option>
                                    <option value="Pacific/Honolulu" >(UTC-10:00) Hawaii</option>
                                    <option value="Pacific/Samoa" >(UTC-11:00) Samoa</option>
                                    <option value="America/Adak" >(UTC-09:00) Aleutian Islands</option>
                                    <option value="America/Anchorage" >(UTC-09:00) Alaska</option>
                                    <option value="America/Los_Angeles" >(UTC-08:00) Pacific Time (US & Canada)</option>
                                    <option value="America/Tijuana" >(UTC-08:00) Tijuana, Baja California</option>
                                    <option value="America/Denver" >(UTC-07:00) Mountain Time (US & Canada)</option>
                                    <option value="America/Phoenix" >(UTC-07:00) Arizona</option>
                                    <option value="America/Chihuahua" >(UTC-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option value="America/Mazatlan" >(UTC-07:00) Mazatlan</option>
                                    <option value="America/Chicago" >(UTC-06:00) Central Time (US & Canada)</option>
                                    <option value="America/Regina" >(UTC-06:00) Saskatchewan</option>
                                    <option value="America/Guatemala" >(UTC-06:00) Central America</option>
                                    <option value="America/Mexico_City" >(UTC-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option value="America/New_York" >(UTC-05:00) Eastern Time (US & Canada)</option>
                                    <option value="America/Bogota" >(UTC-05:00) Bogota, Lima, Quito</option>
                                    <option value="America/Indiana/Indianapolis" >(UTC-05:00) Indiana (East)</option>
                                    <option value="America/Caracas" >(UTC-04:30) Caracas</option>
                                    <option value="America/Halifax" >(UTC-04:00) Atlantic Time (Canada)</option>
                                    <option value="America/La_Paz" >(UTC-04:00) La Paz</option>
                                    <option value="America/Santiago" >(UTC-04:00) Santiago</option>
                                    <option value="America/St_Johns" >(UTC-03:30) Newfoundland</option>
                                    <option value="America/Argentina/Buenos_Aires" >(UTC-03:00) Buenos Aires</option>
                                    <option value="America/Godthab" >(UTC-03:00) Greenland</option>
                                    <option value="America/Montevideo" >(UTC-03:00) Montevideo</option>
                                    <option value="America/Noronha" >(UTC-02:00) Mid-Atlantic</option>
                                    <option value="Atlantic/Azores" >(UTC-01:00) Azores</option>
                                    <option value="Atlantic/Cape_Verde" >(UTC-01:00) Cape Verde Islands</option>
                                    <option value="Africa/Casablanca" >(UTC+00:00) Casablanca</option>
                                    <option value="Europe/Dublin" >(UTC+00:00) Dublin, Edinburgh, Lisbon, London</option>
                                    <option value="Europe/Amsterdam" >(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                    <option value="Europe/Belgrade" >(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                    <option value="Europe/Paris" >(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option value="Europe/Warsaw" >(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                    <option value="Africa/Lagos" >(UTC+01:00) West Central Africa</option>
                                    <option value="Europe/Istanbul" >(UTC+03:00) Istanbul</option>
                                    <option value="Asia/Jerusalem" >(UTC+02:00) Jerusalem</option>
                                    <option value="Asia/Amman" >(UTC+02:00) Amman</option>
                                    <option value="Asia/Beirut" >(UTC+02:00) Beirut</option>
                                    <option value="Africa/Cairo" >(UTC+02:00) Cairo</option>
                                    <option value="Africa/Harare" >(UTC+02:00) Harare, Pretoria</option>
                                    <option value="Europe/Athens" >(UTC+02:00) Athens</option>
                                    <option value="Europe/Bucharest" >(UTC+02:00) Bucharest</option>
                                    <option value="Europe/Helsinki" >(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                    <option value="Asia/Baghdad" >(UTC+03:00) Baghdad</option>
                                    <option value="Asia/Kuwait" >(UTC+03:00) Kuwait, Riyadh</option>
                                    <option value="Africa/Nairobi" >(UTC+03:00) Nairobi</option>
                                    <option value="Asia/Tehran" >(UTC+03:30) Tehran</option>
                                    <option value="Asia/Muscat" >(UTC+04:00) Abu Dhabi, Muscat</option>
                                    <option value="Asia/Baku" >(UTC+04:00) Baku</option>
                                    <option value="Asia/Tbilisi" >(UTC+04:00) Tbilisi</option>
                                    <option value="Asia/Yerevan" >(UTC+04:00) Yerevan</option>
                                    <option value="Asia/Kabul" >(UTC+04:30) Kabul</option>
                                    <option value="Asia/Yekaterinburg" >(UTC+05:00) Yekaterinburg</option>
                                    <option value="Asia/Karachi" >(UTC+05:00) Islamabad, Karachi, Tashkent</option>
                                    <option value="Asia/Calcutta" >(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                    <option value="Asia/Colombo" >(UTC+05:30) Sri Jayawardenapura</option>
                                    <option value="Asia/Katmandu" >(UTC+05:45) Kathmandu</option>
                                    <option value="Asia/Almaty" >(UTC+06:00) Almaty, Novosibirsk</option>
                                    <option value="Asia/Dhaka" >(UTC+06:00) Astana, Dhaka</option>
                                    <option value="Asia/Rangoon" >(UTC+06:30) Yangon (Rangoon)</option>
                                    <option value="Asia/Bangkok" >(UTC+07:00) Bangkok, Hanoi, Jakarta</option>
                                    <option value="Asia/Krasnoyarsk" >(UTC+07:00) Krasnoyarsk</option>
                                    <option value="Asia/Hong_Kong" >(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                    <option value="Asia/Irkutsk" >(UTC+08:00) Irkutsk, Ulaanbaatar</option>
                                    <option value="Asia/Kuala_Lumpur" >(UTC+08:00) Kuala Lumpur, Singapore</option>
                                    <option value="Australia/Perth" >(UTC+08:00) Perth</option>
                                    <option value="Asia/Taipei" >(UTC+08:00) Taipei</option>
                                    <option value="Asia/Ulaanbaatar" >(UTC+08:00) Ulaanbaatar</option>

                                    <option value="Asia/Tokyo" >(UTC+09:00) Osaka, Sapporo, Tokyo</option>
                                    <option value="Asia/Seoul" >(UTC+09:00) Seoul</option>
                                    <option value="Asia/Yakutsk" >(UTC+09:00) Yakutsk</option>
                                    <option value="Australia/Adelaide" >(UTC+09:30) Adelaide</option>
                                    <option value="Australia/Darwin" >(UTC+09:30) Darwin</option>
                                    <option value="Australia/Brisbane" >(UTC+10:00) Brisbane</option>
                                    <option value="Australia/Sydney" >(UTC+10:00) Canberra, Melbourne, Sydney</option>
                                    <option value="Pacific/Guam" >(UTC+10:00) Guam, Port Moresby</option>
                                    <option value="Australia/Hobart" >(UTC+10:00) Hobart</option>
                                    <option value="Asia/Vladivostok" >(UTC+10:00) Vladivostok</option>
                                    <option value="Asia/Magadan" >(UTC+11:00) Magadan, Solomon Islands, New Caledonia</option>
                                    <option value="Pacific/Fiji" >(UTC+12:00) Fiji Islands, Kamchatka, Marshall Islands</option>
                                    <option value="Pacific/Auckland" >(UTC+12:00) Auckland, Wellington</option>
                                    <option value="Pacific/Tongatapu" >(UTC+13:00) Nuku'alofa</option>

                                </select>


		                <!--
                                <div class="rvt-inline-alert rvt-inline-alert--danger">
                                    <span class="rvt-inline-alert__icon">
                                        <svg fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="m8 6.586-2-2L4.586 6l2 2-2 2L6 11.414l2-2 2 2L11.414 10l-2-2 2-2L10 4.586l-2 2Z"></path><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2 8a6 6 0 1 1 12 0A6 6 0 0 1 2 8Z"></path></svg>
                                    </span>
                                    <span class="rvt-inline-alert__message" id="select-option-message">
                                    This input has an error associated with it.
                                    </span>
                                </div>
				-->
                            </div>
			    <!--
                            <div class="rvt-m-top-lg">
                                <label for="textarea-1" class="rvt-label">Textarea <span class="rvt-color-orange-500 rvt-text-bold">*</span></label>
                                <textarea id="textarea-1" class="rvt-textarea" required></textarea>
                            </div>
		            -->
                        </fieldset>

			<br>

                        <!-- Submit button -->
                        <button class="rvt-button" type="submit">Submit</button>

                        <!-- Save and Exit button -->
                        <button class="rvt-button rvt-button--danger" type="button" onclick="saveAndExit()">Save and Exit</button>

                        <div class="rvt-button-group [ rvt-m-top-xl ]">
		        </div>

                    </form>

	            <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const form = document.querySelector("form");
                            const errorMessageContainer = document.getElementById("errorMessageDiv");
                                
                            form.addEventListener("submit", function (event) {
                                event.preventDefault();
                                    
                                // Create FormData object to send form data to the server
                                const formData = new FormData(form);
                                    
                                // Send form data to the server using fetch
                                fetch("write_new_user.php", {
                                    method: "POST",
                                    body: formData,
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // Display error message
                                        errorMessageContainer.textContent = data.message; 
			            } else {
                                        // Handle other scenarios if needed
                                        alert("Registration successful.");
                                        window.location.href = "login_page.php";
                                    }
                                })
                                .catch(error => {
                                    console.error("Error:", error);
                                });
                            });
                        });
                    </script>

		    <script>
                        function saveAndExit() {
                            // Add any logic for saving data before exiting
                            alert("Data saved. Exiting...");
                            // You can also add additional actions like redirecting to another page
                            window.location.href = "landing_page.html";
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
    <div class="rvt-container-lg">
        <div class="rvt-footer-base__inner">
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
    </div>
</footer>
<script src="https://unpkg.com/rivet-core@2.5.2/js/rivet.min.js"></script>
<script>
  Rivet.init();
</script>
</body>
</html>
