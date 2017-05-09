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
        <h1>Join Our Family</h1>

        <div class="row">
            <!-- Dont need to have to use bootstrap classes either
            just put everything in the container fluid div
             you can delete the row class if you want
             -->

        <div>
            Join Our Family
            Current availably: Houston Texas

            We are currently seeking Sales Consultants that will flourish in a challenging fast paced competitive environment.

            Area of Responsibilities: Foot and Phone Canvassing, qualifying prospects, developing opportunities and following up. Sales Consultants will“NOT”be involved in the installation and billing process! SCs will receive detailed training on the products, services, and processes. Being self-starter that is focus on sales excellence is essential to a SEs success.

            A Sales Consultant will have the following qualities:

            ·       AT&T Wireline Experience is wanted but not required

            ·       Self-Starter

            ·       MAC or PC Proficiency including Microsoft Office is required

            ·       Strong Work Ethic

            ·       Business Acumen

            ·       Positive Attitude

            ·       Proficiency in Foot and Phone Canvassing

            DSTORM is focused on creating a diverse environment where everyone can thrive! DSTORM is an equal Opportunity Employer.

            Please email your resume to: thomasmarks@dstormconsulting.com


        </div>
        </div>



        <!-- Content Ends Here -->
    </div>


</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<!-- Place any per-page javascript here -->
<script>

</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
