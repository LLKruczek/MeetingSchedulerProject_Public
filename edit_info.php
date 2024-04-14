
<?php
// Include the PHP file
include 'getAccountDetails.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <meta name="author" content="Le Li Kruczek">
  <title>Rendez-Vouz Scheduler</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.5.2/css/rivet.min.css">
</head>

<body class="rvt-layout">

<!-- **************************************************************************
    APP VIEW RESOURCE - TWO-COLUMN ANCHORED SIDEBAR
    
    -> rivet.iu.edu/layouts/app-view-resource-page/
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
                        <!--
                        <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
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
                            </ul>  -->

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

</header>

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
		    <!--
                    <li><a href="#0">Tier two title</a></li>
                    <li><a href="#0">Tier three title</a></li>
		    -->
                </ol>
            </nav>

            <!-- **************************************************************
                Page title
            *************************************************************** -->

            <h1 class="rvt-m-top-xs">Edit Personal Info</h1>
        </div>
        
        <!-- ******************************************************************
            Content sections
        ******************************************************************* -->

        <div class="rvt-container-lg rvt-m-top-xl rvt-m-left-none rvt-m-right-none rvt-p-right-none rvt-p-left-none">
            <div class="rvt-row">
                <div class="rvt-cols-8-lg">
                    <div class="rvt-prose rvt-flow">

                        <!-- **************************************************
                            Section #1 header
                        *************************************************** -->

                        <div class="rvt-flex-md-up rvt-items-center rvt-p-bottom-xs rvt-p-lr-xxs rvt-border-bottom">
                            
                            <!-- **********************************************
                                Header title
                            *********************************************** -->
                            
                            <h2 class="rvt-grow-1 rvt-ts-18 rvt-text-regular">Edit Personal Info</h2>


                            <!-- **********************************************
                                Right-aligned action link
                            *********************************************** -->

                            <a href="account_page.php" class="rvt-flex rvt-items-center rvt-link-plain rvt-m-top-sm rvt-m-top-none-md-up">
                                <svg class="rvt-color-blue-300" fill="currentColor" width="16" height="16" viewBox="0 0 16 16"><path d="M9 7v5H7V7h2ZM8 4a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z"></path><path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Zm8-6a6 6 0 1 0 0 12A6 6 0 0 0 8 2Z"></path></svg>
                                <span class="rvt-ts-14 rvt-m-left-xs">View Account Details</span>
                            </a>

                        </div>

                        <!-- **************************************************
                            Section #1 content
                        *************************************************** -->
			 
			
			<form action="write_updated_info.php" method="post">
                            <dl class="rvt-list-description rvt-m-top-lg">
                                <dt><label for="name">Name:</label></dt>
                                <dd><input type="text" id="name" name="name" value=<?php echo $userName; ?> required></dd>
                                <dt><label for="pronoun">Pronoun:</label></dt>
                                <dd><input type="text" id="pronoun" name="pronoun" value=<?php echo $userPronoun; ?> ></dd>
                                <dt><label for="email">Email:</label></dt>
                                <dd><input type="email" id="email" name="email" value=<?php echo $userEmail; ?> required></dd>
                                <dt><label for="phone">Phone number:</label></dt>
                                <dd><input type="tel" id="phone" name="phone" value=<?php echo $phoneNumber; ?> ></dd>
                                <dt><label for="timezone">Time Zone:</label></dt>
                                <dd><select id="timezone" name="timezone" required>
                                    <option value="Pacific/Midway" <?php echo ($timeZone == 'Pacific/Midway') ? 'selected' : ''; ?>>(UTC-11:00) Midway Island</option>
                                    <option value="Pacific/Honolulu" <?php echo ($timeZone == 'Pacific/Honolulu') ? 'selected' : ''; ?>>(UTC-10:00) Hawaii</option>
                                    <option value="Pacific/Samoa" <?php echo ($timeZone == 'Pacific/Samoa') ? 'selected' : ''; ?>>(UTC-11:00) Samoa</option>
                                    <option value="America/Adak" <?php echo ($timeZone == 'America/Adak') ? 'selected' : ''; ?>>(UTC-09:00) Aleutian Islands</option>
                                    <option value="America/Anchorage" <?php echo ($timeZone == 'America/Anchorage') ? 'selected' : ''; ?>>(UTC-09:00) Alaska</option>
                                    <option value="America/Los_Angeles" <?php echo ($timeZone == 'America/Los_Angeles') ? 'selected' : ''; ?>>(UTC-08:00) Pacific Time (US & Canada)</option>
                                    <option value="America/Tijuana" <?php echo ($timeZone == 'America/Tijuana') ? 'selected' : ''; ?>>(UTC-08:00) Tijuana, Baja California</option>
                                    <option value="America/Denver" <?php echo ($timeZone == 'America/Denver') ? 'selected' : ''; ?>>(UTC-07:00) Mountain Time (US & Canada)</option>
                                    <option value="America/Phoenix" <?php echo ($timeZone == 'America/Phoenix') ? 'selected' : ''; ?>>(UTC-07:00) Arizona</option>
                                    <option value="America/Chihuahua" <?php echo ($timeZone == 'America/Chihuahua') ? 'selected' : ''; ?>>(UTC-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option value="America/Mazatlan" <?php echo ($timeZone == 'America/Mazatlan') ? 'selected' : ''; ?>>(UTC-07:00) Mazatlan</option>
                                    <option value="America/Chicago" <?php echo ($timeZone == 'America/Chicago') ? 'selected' : ''; ?>>(UTC-06:00) Central Time (US & Canada)</option>
                                    <option value="America/Regina" <?php echo ($timeZone == 'America/Regina') ? 'selected' : ''; ?>>(UTC-06:00) Saskatchewan</option>
                                    <option value="America/Guatemala" <?php echo ($timeZone == 'America/Guatemala') ? 'selected' : ''; ?>>(UTC-06:00) Central America</option>
                                    <option value="America/Mexico_City" <?php echo ($timeZone == 'America/Mexico_City') ? 'selected' : ''; ?>>(UTC-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option value="America/New_York" <?php echo ($timeZone == 'America/New_York') ? 'selected' : ''; ?>>(UTC-05:00) Eastern Time (US & Canada)</option>
                                    <option value="America/Bogota" <?php echo ($timeZone == 'America/Bogota') ? 'selected' : ''; ?>>(UTC-05:00) Bogota, Lima, Quito</option>
                                    <option value="America/Indiana/Indianapolis" <?php echo ($timeZone == 'America/Indiana/Indianapolis') ? 'selected' : ''; ?>>(UTC-05:00) Indiana (East)</option>
                                    <option value="America/Caracas" <?php echo ($timeZone == 'America/Caracas') ? 'selected' : ''; ?>>(UTC-04:30) Caracas</option>
                                    <option value="America/Halifax" <?php echo ($timeZone == 'America/Halifax') ? 'selected' : ''; ?>>(UTC-04:00) Atlantic Time (Canada)</option>
                                    <option value="America/La_Paz" <?php echo ($timeZone == 'America/La_Paz') ? 'selected' : ''; ?>>(UTC-04:00) La Paz</option>
                                    <option value="America/Santiago" <?php echo ($timeZone == 'America/Santiago') ? 'selected' : ''; ?>>(UTC-04:00) Santiago</option>
                                    <option value="America/St_Johns" <?php echo ($timeZone == 'America/St_Johns') ? 'selected' : ''; ?>>(UTC-03:30) Newfoundland</option>
                                    <option value="America/Argentina/Buenos_Aires" <?php echo ($timeZone == 'America/Argentina/Buenos_Aires') ? 'selected' : ''; ?>>(UTC-03:00) Buenos Aires</option>
                                    <option value="America/Godthab" <?php echo ($timeZone == 'America/Godthab') ? 'selected' : ''; ?>>(UTC-03:00) Greenland</option>
                                    <option value="America/Montevideo" <?php echo ($timeZone == 'America/Montevideo') ? 'selected' : ''; ?>>(UTC-03:00) Montevideo</option>
                                    <option value="America/Noronha" <?php echo ($timeZone == 'America/Noronha') ? 'selected' : ''; ?>>(UTC-02:00) Mid-Atlantic</option>
                                    <option value="Atlantic/Azores" <?php echo ($timeZone == 'Atlantic/Azores') ? 'selected' : ''; ?>>(UTC-01:00) Azores</option>
                                    <option value="Atlantic/Cape_Verde" <?php echo ($timeZone == 'Atlantic/Cape_Verde') ? 'selected' : ''; ?>>(UTC-01:00) Cape Verde Islands</option>
                                    <option value="Africa/Casablanca" <?php echo ($timeZone == 'Africa/Casablanca') ? 'selected' : ''; ?>>(UTC+00:00) Casablanca</option>
                                    <option value="Europe/Dublin" <?php echo ($timeZone == 'Europe/Dublin') ? 'selected' : ''; ?>>(UTC+00:00) Dublin, Edinburgh, Lisbon, London</option>
                                    <option value="Europe/Amsterdam" <?php echo ($timeZone == 'Europe/Amsterdam') ? 'selected' : ''; ?>>(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                    <option value="Europe/Belgrade" <?php echo ($timeZone == 'Europe/Belgrade') ? 'selected' : ''; ?>>(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                    <option value="Europe/Paris" <?php echo ($timeZone == 'Europe/Paris') ? 'selected' : ''; ?>>(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                    <option value="Europe/Warsaw" <?php echo ($timeZone == 'Europe/Warsaw') ? 'selected' : ''; ?>>(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                    <option value="Africa/Lagos" <?php echo ($timeZone == 'Africa/Lagos') ? 'selected' : ''; ?>>(UTC+01:00) West Central Africa</option>
                                    <option value="Europe/Istanbul" <?php echo ($timeZone == 'Europe/Istanbul') ? 'selected' : ''; ?>>(UTC+03:00) Istanbul</option>
                                    <option value="Asia/Jerusalem" <?php echo ($timeZone == 'Asia/Jerusalem') ? 'selected' : ''; ?>>(UTC+02:00) Jerusalem</option>
                                    <option value="Asia/Amman" <?php echo ($timeZone == 'Asia/Amman') ? 'selected' : ''; ?>>(UTC+02:00) Amman</option>
                                    <option value="Asia/Beirut" <?php echo ($timeZone == 'Asia/Beirut') ? 'selected' : ''; ?>>(UTC+02:00) Beirut</option>
                                    <option value="Africa/Cairo" <?php echo ($timeZone == 'Africa/Cairo') ? 'selected' : ''; ?>>(UTC+02:00) Cairo</option>
                                    <option value="Africa/Harare" <?php echo ($timeZone == 'Africa/Harare') ? 'selected' : ''; ?>>(UTC+02:00) Harare, Pretoria</option>
                                    <option value="Europe/Athens" <?php echo ($timeZone == 'Europe/Athens') ? 'selected' : ''; ?>>(UTC+02:00) Athens</option>
                                    <option value="Europe/Bucharest" <?php echo ($timeZone == 'Europe/Bucharest') ? 'selected' : ''; ?>>(UTC+02:00) Bucharest</option>
                                    <option value="Europe/Helsinki" <?php echo ($timeZone == 'Europe/Helsinki') ? 'selected' : ''; ?>>(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                    <option value="Asia/Baghdad" <?php echo ($timeZone == 'Asia/Baghdad') ? 'selected' : ''; ?>>(UTC+03:00) Baghdad</option>
                                    <option value="Asia/Kuwait" <?php echo ($timeZone == 'Asia/Kuwait') ? 'selected' : ''; ?>>(UTC+03:00) Kuwait, Riyadh</option>
                                    <option value="Africa/Nairobi" <?php echo ($timeZone == 'Africa/Nairobi') ? 'selected' : ''; ?>>(UTC+03:00) Nairobi</option>
                                    <option value="Asia/Tehran" <?php echo ($timeZone == 'Asia/Tehran') ? 'selected' : ''; ?>>(UTC+03:30) Tehran</option>
                                    <option value="Asia/Muscat" <?php echo ($timeZone == 'Asia/Muscat') ? 'selected' : ''; ?>>(UTC+04:00) Abu Dhabi, Muscat</option>
                                    <option value="Asia/Baku" <?php echo ($timeZone == 'Asia/Baku') ? 'selected' : ''; ?>>(UTC+04:00) Baku</option>
                                    <option value="Asia/Tbilisi" <?php echo ($timeZone == 'Asia/Tbilisi') ? 'selected' : ''; ?>>(UTC+04:00) Tbilisi</option>
                                    <option value="Asia/Yerevan" <?php echo ($timeZone == 'Asia/Yerevan') ? 'selected' : ''; ?>>(UTC+04:00) Yerevan</option>
                                    <option value="Asia/Kabul" <?php echo ($timeZone == 'Asia/Kabul') ? 'selected' : ''; ?>>(UTC+04:30) Kabul</option>
                                    <option value="Asia/Yekaterinburg" <?php echo ($timeZone == 'Asia/Yekaterinburg') ? 'selected' : ''; ?>>(UTC+05:00) Yekaterinburg</option>
                                    <option value="Asia/Karachi" <?php echo ($timeZone == 'Asia/Karachi') ? 'selected' : ''; ?>>(UTC+05:00) Islamabad, Karachi, Tashkent</option>
                                    <option value="Asia/Calcutta" <?php echo ($timeZone == 'Asia/Calcutta') ? 'selected' : ''; ?>>(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                    <option value="Asia/Colombo" <?php echo ($timeZone == 'Asia/Colombo') ? 'selected' : ''; ?>>(UTC+05:30) Sri Jayawardenapura</option>
                                    <option value="Asia/Katmandu" <?php echo ($timeZone == 'Asia/Katmandu') ? 'selected' : ''; ?>>(UTC+05:45) Kathmandu</option>
                                    <option value="Asia/Almaty" <?php echo ($timeZone == 'Asia/Almaty') ? 'selected' : ''; ?>>(UTC+06:00) Almaty, Novosibirsk</option>
                                    <option value="Asia/Dhaka" <?php echo ($timeZone == 'Asia/Dhaka') ? 'selected' : ''; ?>>(UTC+06:00) Astana, Dhaka</option>
                                    <option value="Asia/Rangoon" <?php echo ($timeZone == 'Asia/Rangoon') ? 'selected' : ''; ?>>(UTC+06:30) Yangon (Rangoon)</option>
                                    <option value="Asia/Bangkok" <?php echo ($timeZone == 'Asia/Bangkok') ? 'selected' : ''; ?>>(UTC+07:00) Bangkok, Hanoi, Jakarta</option>
                                    <option value="Asia/Krasnoyarsk" <?php echo ($timeZone == 'Asia/Krasnoyarsk') ? 'selected' : ''; ?>>(UTC+07:00) Krasnoyarsk</option>
                                    <option value="Asia/Hong_Kong" <?php echo ($timeZone == 'Asia/Hong_Kong') ? 'selected' : ''; ?>>(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                    <option value="Asia/Irkutsk" <?php echo ($timeZone == 'Asia/Irkutsk') ? 'selected' : ''; ?>>(UTC+08:00) Irkutsk, Ulaanbaatar</option>
                                    <option value="Asia/Kuala_Lumpur" <?php echo ($timeZone == 'Asia/Kuala_Lumpur') ? 'selected' : ''; ?>>(UTC+08:00) Kuala Lumpur, Singapore</option>
                                    <option value="Australia/Perth" <?php echo ($timeZone == 'Australia/Perth') ? 'selected' : ''; ?>>(UTC+08:00) Perth</option>
                                    <option value="Asia/Taipei" <?php echo ($timeZone == 'Asia/Taipei') ? 'selected' : ''; ?>>(UTC+08:00) Taipei</option>
                                    <option value="Asia/Ulaanbaatar" <?php echo ($timeZone == 'Asia/Ulaanbaatar') ? 'selected' : ''; ?>>(UTC+08:00) Ulaanbaatar</option>

                                    <option value="Asia/Tokyo" <?php echo ($timeZone == 'Asia/Tokyo') ? 'selected' : ''; ?>>(UTC+09:00) Osaka, Sapporo, Tokyo</option>
                                    <option value="Asia/Seoul" <?php echo ($timeZone == 'Asia/Seoul') ? 'selected' : ''; ?>>(UTC+09:00) Seoul</option>
                                    <option value="Asia/Yakutsk" <?php echo ($timeZone == 'Asia/Yakutsk') ? 'selected' : ''; ?>>(UTC+09:00) Yakutsk</option>
                                    <option value="Australia/Adelaide" <?php echo ($timeZone == 'Australia/Adelaide') ? 'selected' : ''; ?>>(UTC+09:30) Adelaide</option>
                                    <option value="Australia/Darwin" <?php echo ($timeZone == 'Australia/Darwin') ? 'selected' : ''; ?>>(UTC+09:30) Darwin</option>
                                    <option value="Australia/Brisbane" <?php echo ($timeZone == 'Australia/Brisbane') ? 'selected' : ''; ?>>(UTC+10:00) Brisbane</option>
                                    <option value="Australia/Sydney" <?php echo ($timeZone == 'Australia/Sydney') ? 'selected' : ''; ?>>(UTC+10:00) Canberra, Melbourne, Sydney</option>
                                    <option value="Pacific/Guam" <?php echo ($timeZone == 'Pacific/Guam') ? 'selected' : ''; ?>>(UTC+10:00) Guam, Port Moresby</option>
                                    <option value="Australia/Hobart" <?php echo ($timeZone == 'Australia/Hobart') ? 'selected' : ''; ?>>(UTC+10:00) Hobart</option>
                                    <option value="Asia/Vladivostok" <?php echo ($timeZone == 'Asia/Vladivostok') ? 'selected' : ''; ?>>(UTC+10:00) Vladivostok</option>
                                    <option value="Asia/Magadan" <?php echo ($timeZone == 'Asia/Magadan') ? 'selected' : ''; ?>>(UTC+11:00) Magadan, Solomon Islands, New Caledonia</option>
                                    <option value="Pacific/Fiji" <?php echo ($timeZone == 'Pacific/Fiji') ? 'selected' : ''; ?>>(UTC+12:00) Fiji Islands, Kamchatka, Marshall Islands</option>
                                    <option value="Pacific/Auckland" <?php echo ($timeZone == 'Pacific/Auckland') ? 'selected' : ''; ?>>(UTC+12:00) Auckland, Wellington</option>
                                    <option value="Pacific/Tongatapu" <?php echo ($timeZone == 'Pacific/Tongatapu') ? 'selected' : ''; ?>>(UTC+13:00) Nuku'alofa</option>
				    </select></dd>
                            </dl>
			    </br>
			    <button class="rvt-button" type="submit">Submit</button>
    		        </form>

		        <div id="successMessage"></div>	

                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const form = document.querySelector("form");
                                const successMessageContainer = document.getElementById("successMessage");
                                
                                form.addEventListener("submit", function (event) {
                                    event.preventDefault();
                                    
                                    // Create FormData object to send form data to the server
                                    const formData = new FormData(form);
                                    
                                    // Send form data to the server using fetch
                                    fetch("write_updated_info.php", {
                                        method: "POST",
                                        body: formData,
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            // Display success message
                                            successMessageContainer.textContent = data.message;
                                        } else {
                                            // Handle other scenarios if needed
                                        }
                                    })
                                    .catch(error => {
                                        console.error("Error:", error);
                                    });
                                });
                            });
                        </script>

                        
                    </div>
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
