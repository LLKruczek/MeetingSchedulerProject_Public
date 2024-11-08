<?php
    session_start();
    include "getAccountDetails.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <meta name="author" content="Le Li Kruczek">
  <meta name="author" content="JAC Kruczek">
  <meta name="author" content="Mark Rupert">
  <title>Landing page</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.5.2/css/rivet.min.css">
</head>
<body class="rvt-layout">

<!-- **************************************************************************
    LANDING PAGE
    
    -> rivet.iu.edu/layouts/index-page/
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
                    <a class="rvt-lockup" href="landing_after_login.php">
                        
                        <!-- **************************************************
                            Trident logo
                        *************************************************** -->

                        <div class="rvt-lockup__tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-lockup__trident" viewBox="0 0 28 34">
                                <path fill="currentColor" d="M-3.34344e-05 4.70897H8.83308V7.174H7.1897V21.1426H10.6134V2.72321H8.83308V0.121224H18.214V2.65476H16.2283V21.1426H19.7889V7.174H18.214V4.64047H27.0471V7.174H25.0614V23.6761L21.7746 26.8944H16.2967V30.455H18.214V33.8787H8.76463V30.592H10.6819V26.8259H5.20403L1.91726 23.6077V7.174H-3.34344e-05V4.70897Z"></path>
                            </svg>
                        </div>

                        <!-- **************************************************
                            Website or application title 
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

                        <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
                            <ul class="rvt-header-menu__list">
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




                           </ul>
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

<main id="main-content" class="rvt-layout__wrapper">

    <!-- **********************************************************************
        Hero
    *********************************************************************** -->

    <div class="rvt-hero">
        <div class="rvt-container-lg">
            <div class="rvt-hero__inner">
                <div class="rvt-hero__body [ rvt-flow ]">
                    <h1 class="rvt-hero__title">Become the best you with Rendez-Vous Scheduler</h1>
                    <div class="rvt-hero__teaser">
                        <p>Schedule and maintain the important tasks, events, and appointments in your life so you never have to stress again. Always keep up to date on the latest details and never again question when or where something will take place or if it has been canceled or modified.</p>
                    </div>
			<div> 
	 	        	<a class="rvt-cta rvt-cta--button" href="view_events.php">View Your Events</a> 
				<a class="rvt-cta rvt-cta--button" href="create_event.php">Schedule An Event</a> 
			</div>
                </div>
                <div class="rvt-hero__media">
                    <img src="https://st3.depositphotos.com/7921108/18180/v/600/depositphotos_181808070-stock-illustration-isolated-calendar-vector-template.jpg" alt="Stock image of calendar">
                </div>
            </div>
        </div>
    </div>

    <!-- **********************************************************************
        Billboard

        -> rivet.iu.edu/components/billboard/
    *********************************************************************** -->
    
    <div class="rvt-container-lg rvt-p-tb-xl rvt-p-tb-3-xl-md-up">
        <div class="rvt-billboard rvt-billboard--reverse">
            <div class="rvt-billboard__image">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/009/223/190/small/various-question-marks-pop-up-cartoon-effect-on-green-background-free-video.jpg" alt="Stock Image of Question marks">
            </div>
            <div class="rvt-billboard__body">
                <h2 class="rvt-billboard__title">Why you should use Rendez-Vous Scheduler</h2>
                <div class="rvt-billboard__content [ rvt-flow ]">
                    <p>There are many reasons why you should use Rendez-Vous Scheduler. For example, time efficiency, 24/7 accessibility, automatic reminders, calendar and time(timezones) intergration, customization, user-friendly interface, group scheduling, secure and private, and customer support.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- **********************************************************************
        Billboard

        -> rivet.iu.edu/components/billboard/
    *********************************************************************** -->

    <div class="rvt-container-lg rvt-p-tb-xl rvt-p-tb-3-xl-md-up">
        <div class="rvt-billboard">
            <div class="rvt-billboard__image">
                <img src="https://static4.depositphotos.com/1001686/338/i/380/depositphotos_3381349-stock-photo-water-splash-with-bubbles.jpg" alt="Stock image of an alarm clock">
            </div>
            <div class="rvt-billboard__body">
                <h2 class="rvt-billboard__title">Explore the possibilities of Rendez-Vous Scheduler</h2>
                <div class="rvt-billboard__content [ rvt-flow ]">
                    <p>Worry no more about timezone differencs, forgetting about appointments, events or meetings, miscommunicating, or last minute changes to appointments, events or meetings.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- **********************************************************************
        Quote

        -> rivet.iu.edu/components/quote/
    *********************************************************************** -->

    <div class="rvt-p-tb-xxl rvt-p-top-3-xl-md-up rvt-p-bottom-4-xl-md-up">
        <div class="rvt-container-lg">
            <div class="rvt-quote [ rvt-flow ]">
                <blockquote class="rvt-quote__text">
                    <p></p>
                </blockquote>              
                <p class="rvt-quote__citation">
                    <span class="rvt-quote__title"></span>
                </p>
            </div>
        </div>
    </div>
</main>


<!-- **************************************************************************
    Footer: Social media

    -> rivet.iu.edu/components/footer/
*************************************************************************** -->
<!--
<div aria-labelledby="social-heading" class="rvt-footer-social" role="complementary">
    <div class="rvt-container-lg">
        <h2 class="rvt-sr-only" id="social-heading">Social media</h2>
        <ul class="rvt-footer-social__list">
            <li>
                <a href="https://www.facebook.com/IndianaUniversity">
                    <span class="rvt-sr-only rvt-color-white">Facebook for IU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                        <path d="M24.8996 9.99982V13.1998H23.0996C23.0996 13.1998 21.4996 12.9998 21.4996 14.4998V16.9998H24.7996L24.3996 20.3998H21.4996V29.9998H17.6996V20.2998H15.0996V16.9998H17.7996V14.0998C17.7996 14.0998 17.4996 12.4998 18.8996 11.1998C20.2996 9.89982 22.1996 9.99982 22.1996 9.99982H24.8996Z" fill="#F7F7F8"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/indiana-university/">
                    <span class="rvt-sr-only rvt-color-white">Linkedin for IU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                        <path d="M11.3 16H15V28H11.3V16ZM13.2 10C14.4 10 15.4 11 15.4 12.2C15.4 13.4 14.4 14.4 13.2 14.4C12 14.4 11 13.4 11 12.2C11 11 12 10 13.2 10Z" fill="#F7F7F8"></path>
                        <path d="M17.3999 16.0002H20.9999V17.6002C21.4999 16.7002 22.6999 15.7002 24.4999 15.7002C28.2999 15.7002 28.9999 18.2002 28.9999 21.4002V28.0002H25.2999V22.2002C25.2999 20.8002 25.2999 19.0002 23.3999 19.0002C21.4999 19.0002 21.1999 20.5002 21.1999 22.1002V28.0002H17.4999V16.0002H17.3999Z" fill="#F7F7F8"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/IndianaUniv">
                    <span class="rvt-sr-only rvt-color-white">Twitter for IU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                        <path d="M30.0002 13.7998C29.3002 14.0998 28.5002 14.2998 27.6002 14.3998C28.4002 13.8998 29.1002 13.0998 29.4002 12.0998C28.6002 12.5998 27.7002 12.8998 26.8002 13.0998C26.1002 12.2998 25.0002 11.7998 23.8002 11.7998C21.5002 11.7998 19.7002 13.5998 19.7002 15.8998C19.7002 16.1998 19.7002 16.4998 19.8002 16.7998C16.4002 16.5998 13.4002 14.9998 11.3002 12.4998C10.9002 13.0998 10.7002 13.7998 10.7002 14.5998C10.7002 15.9998 11.4002 17.2998 12.5002 17.9998C11.8002 17.9998 11.2002 17.7998 10.6002 17.4998C10.6002 17.4998 10.6002 17.4998 10.6002 17.5998C10.6002 19.5998 12.0002 21.1998 13.9002 21.5998C13.6002 21.6998 13.2002 21.6998 12.8002 21.6998C12.5002 21.6998 12.3002 21.6998 12.0002 21.5998C12.5002 23.1998 14.0002 24.3998 15.8002 24.3998C14.4002 25.4998 12.6002 26.1998 10.7002 26.1998C10.4002 26.1998 10.0002 26.1998 9.7002 26.0998C11.5002 27.2998 13.7002 27.8998 16.0002 27.8998C23.5002 27.8998 27.7002 21.5998 27.7002 16.1998C27.7002 15.9998 27.7002 15.7998 27.7002 15.6998C28.8002 15.2998 29.4002 14.5998 30.0002 13.7998Z" fill="#F7F7F8"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/iubloomington/">
                    <span class="rvt-sr-only rvt-color-white">Instagram for IU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                        <path d="M24.3004 29.9999H15.6004C12.5004 29.9999 9.90039 27.4999 9.90039 24.2999V15.5999C9.90039 12.4999 12.4004 9.8999 15.6004 9.8999H24.3004C27.4004 9.8999 30.0004 12.3999 30.0004 15.5999V24.2999C30.0004 27.4999 27.5004 29.9999 24.3004 29.9999ZM24.3004 28.4999C25.4004 28.4999 26.5004 28.0999 27.2004 27.2999C27.9004 26.4999 28.4004 25.4999 28.4004 24.3999V15.6999C28.4004 14.5999 28.0004 13.4999 27.2004 12.7999C26.4004 11.9999 25.4004 11.5999 24.3004 11.5999H15.6004C14.5004 11.5999 13.4004 11.9999 12.7004 12.7999C11.9004 13.5999 11.5004 14.5999 11.5004 15.6999V24.3999C11.5004 25.4999 11.9004 26.5999 12.7004 27.2999C13.5004 27.9999 14.5004 28.4999 15.6004 28.4999H24.3004Z" fill="#F7F7F8"></path>
                        <path d="M25.4006 19.9C25.4006 22.9 23.0006 25.3 20.0006 25.3C17.0006 25.3 14.6006 22.9 14.6006 19.9C14.6006 16.9 17.0006 14.5 20.0006 14.5C23.0006 14.5 25.4006 17 25.4006 19.9ZM20.0006 16.4C18.1006 16.4 16.5006 18 16.5006 19.9C16.5006 21.8 18.1006 23.4 20.0006 23.4C21.9006 23.4 23.5006 21.8 23.5006 19.9C23.5006 18 21.9006 16.4 20.0006 16.4Z" fill="#F7F7F8"></path>
                        <path d="M25.5002 15.8002C26.2182 15.8002 26.8002 15.2182 26.8002 14.5002C26.8002 13.7822 26.2182 13.2002 25.5002 13.2002C24.7822 13.2002 24.2002 13.7822 24.2002 14.5002C24.2002 15.2182 24.7822 15.8002 25.5002 15.8002Z" fill="#F7F7F8"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/user/iu">
                    <span class="rvt-sr-only rvt-color-white">Youtube for IU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                        <path d="M20,40A20,20,0,1,0,0,20,20,20,0,0,0,20,40Z" fill="#7A1705"></path>
                        <path d="M29.58,15.17a2.49,2.49,0,0,0-1.77-1.78C26.25,13,20,13,20,13s-6.25,0-7.81.42a2.49,2.49,0,0,0-1.77,1.78A26.26,26.26,0,0,0,10,20a26.23,26.23,0,0,0,.42,4.84,2.47,2.47,0,0,0,1.77,1.75C13.75,27,20,27,20,27s6.25,0,7.81-.42a2.47,2.47,0,0,0,1.77-1.75A26.23,26.23,0,0,0,30,20,26.26,26.26,0,0,0,29.58,15.17ZM18,23V17l5.23,3Z" fill="#F7F7F8"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>
-->
<!-- **************************************************************************
    Footer: Resource links

    -> rivet.iu.edu/components/footer/
*************************************************************************** -->
<!--
<div aria-labelledby="resources-heading" class="rvt-footer-resources" role="complementary">
    <h2 class="rvt-sr-only" id="resources-heading">Additional resources</h2>
    <div class="rvt-container-lg">
        <div class="rvt-row">
            <div class="rvt-cols-3-md">
                <h3 class="rvt-footer-resources__heading">Indiana University</h3>
                <div class="rvt-footer-resources__text-block">
                    107 S. Indiana Avenue
                    <br />
                    Bloomington, IN
                    <br />
                    47405-7000
                </div>
            </div>
            <div class="rvt-cols-3-md">
                <h3 class="rvt-footer-resources__heading">Services</h3>
                <ul class="rvt-footer-resources__list">
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://canvas.iu.edu">Canvas</a>
                    </li>
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://one.iu.edu">One.IU</a>
                    </li>
                </ul>
            </div>
            <div class="rvt-cols-3-md">
                <h3 class="rvt-footer-resources__heading">Email</h3>
                <ul class="rvt-footer-resources__list">
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://uits.iu.edu/exchange">Outlook Web Access</a>
                    </li>
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://google.iu.edu">Gmail at IU</a>
                    </li>
                </ul>
            </div>
            <div class="rvt-cols-3-md">
                <h3 class="rvt-footer-resources__heading">Find</h3>
                <ul class="rvt-footer-resources__list">
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://directory.iu.edu/">People Directory</a>
                    </li>
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://jobs.iu.edu/">Jobs at IU</a>
                    </li>
                    <li class="rvt-footer-resources__list-item">
                        <a href="https://www.iu.edu/nondiscrimination/index.html">Non-discrimination Notice</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
<!-- **************************************************************************
    Footer: Copyright

    -> rivet.iu.edu/components/footer/
**************************************************************************** -->

<footer class="rvt-footer-base">
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
