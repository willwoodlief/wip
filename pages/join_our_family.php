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


        <div class="row">
            <!-- Dont need to have to use bootstrap classes either
            just put everything in the container fluid div
             you can delete the row class if you want
             -->
            <h1>Current Availably: <span style="font-size: smaller"> JOIN THE DSTORM FAMILY</span></h1>

            <div class="col-md-offset-1 col-md-5 panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h3>Sales Consultants</h3></div>
                <div class="panel-body">
                    <div class="alert  alert-success">
                        <strong>Houston Texas</strong>
                    </div>

                    <p>
                    We are currently seeking Sales Consultants that will flourish in a challenging fast paced competitive environment.
                    Area of Responsibilities: Foot and Phone Canvassing, qualifying prospects,
                    developing opportunities and following up. Sales Consultants will “NOT” be involved in the installation
                    and billing process! SCs will receive detailed training on the products, services, and processes.
                    </p>

                    <p>
                    Being a self-starter that is focused on sales excellence is essential to a SCs success.
                    A SC will have the following qualities:

                    </p>

                    <ul>
                        <li>AT&T Wireline and mobility Experience is preferred but not required</li>
                        <li>Self-Starter</li>
                        <li>PC Proficiency including Microsoft Office is required</li>
                        <li>Strong Work Ethic</li>
                        <li>Business Acumen</li>
                        <li>Positive Attitude</li>
                        <li>Proficiency in Foot and Phone Canvassing</li>
                    </ul>
                    DSTORM is focused on creating a diverse environment where everyone can thrive! DSTORM is an equal Opportunity Employer. <br>
                    Please email your resume to: <a href="mailto:thomasmarks@dstormconsulting.com">thomasmarks@dstormconsulting.com</a>

                </div>
            </div>



            <div class="col-md-offset-1 col-md-5 panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h3>Operations Manager</h3></div>
                <div class="panel-body">
                    <div class="alert  alert-success">
                        <strong>Houston Texas</strong>
                    </div>
                    <p>
                    We are currently seeking an Operations Manager that will flourish in a challenging fast paced competitive environment.
                    </p>
                    <p>
                    Area of Responsibilities: Assist with creating contracts, manage orders from start to installation,
                    and resolve billing issues.
                    </p>
                    <p>
                    Being self-starter that is focus on sales support is essential to a OMs success. An OM will have the following qualities:
                    </p>
                    <ul>
                        <li>AT&T Wireline and mobility Experience is preferred but not required</li>
                        <li>Self-Starter</li>
                        <li>PC Proficiency including Microsoft Office is required</li>
                        <li>Strong Work Ethic</li>
                        <li>Business Acumen</li>
                        <li>Positive Attitude</li>
                        <li>Strong Organizational Skills</li>
                    </ul>
                    DSTORM is focused on creating a diverse environment where everyone can thrive! DSTORM is an equal Opportunity Employer. <br>
                    Please email your resume to: <a href="mailto:thomasmarks@dstormconsulting.com">thomasmarks@dstormconsulting.com</a>

                </div>
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
