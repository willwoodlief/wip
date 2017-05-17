<?php
//die(var_dump($_REQUEST));
require_once '../users/init.php';

require_once $abs_us_root.$us_url_root.'users/includes/header_not_closed.php';
?>

<?php require_once 'includes/postit_pre.php'; // postit css linking ?>
<style>
    .put-page-only-styles-here {
        /* for styles for the entire site put in users/css/custom.css */
    }
</style>

</head>

<body>
<?php
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';




if (!securePage($_SERVER['PHP_SELF'])){die('Need to be logged in and have a User role to see this page');}
if ($settings->site_offline==1){die("The site is currently offline.");}

?>

<div id="page-wrapper" style="">
    <div class="container-fluid">
        <!-- Content Starts Here -->
        <!-- For css classes add above around line 9 -->
        <!-- For javascript add stuff below where it says per-page-javascript -->
        <!-- Jquery is already loaded into this page, if you need it -->

            <!-- Page Heading -->
            <h1>Veteran Owned</h1>

            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->
                <div class="col-md-offset-2 col-md-4 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Military Service</div>
                    <div class="panel-body">
                        HOMAS MARKS, president and CEO of the Dstorm Consulting Inc., is a United States Air Force Veteran serving from 1990 to 1994.

                        He was a Firefighter who specialized in Paramedic Rescue, Aviation Crash Emergency and Structural First Responser.

                        His Air Force assignments included Yokota Air Base Japan from 1990 to 1992.  While at Yokota Marks was deployed to Operation Desert Storm, King Khalid Air Base Khamis Mushait, Saudi Arabia.  He was also stationed at K. I. Sawyer Air Force Base from 1992 to 1994. While at K. I. Sawyer Marks was deployed to Operation Desert Shield, Al Dhabi Air Base Mussafah, UAE 20 miles from Abu Dhabi, UAE.

                        Thomas Marks was Honorably Discharged from the United States Air Force June 6, 1994.
                    </div>
                </div>
            </div>



        <!-- Content Ends Here -->
    </div>


</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<script>

</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
