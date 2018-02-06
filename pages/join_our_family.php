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
            <h1 style="padding-left: 3em">Current Availably: <span style="font-size: smaller"> Join the DStorm Team</span></h1>

            <div class="col-md-offset-1 col-md-5 panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h3>Communications Consultant</h3></div>
                <div class="panel-body">
                    <div class="alert  alert-success">
                        <strong>Katy Texas</strong>
                    </div>


                    <p>The ideal candidate will be located in or near Katy, TX.
                        <br>
                    This position is for someone with very high energy, is great on the phone and has amazing organizational skills.
                    </p>

                    <table>
                        <tr>
                            <td><span style="font-weight: bold"> Part-Time and Full-Time Positions available</span></td>
                            <td></td>
                        </tr>
<!--                        <tr>-->
<!--                            <td>Job Category:</td>-->
<!--                            <td style="padding-left: 6em">Administrative Support</td>-->
<!--                        </tr>-->

                        <tr>
                            <td><span style="font-weight: bold">Salary Range:</span></td>
                            <td style="padding-left: 6em"><span style="text-decoration: underline ">$10 to $15 / hour</span></td>
                        </tr>

                        <tr style=" ">
                            <td style="vertical-align:top"><span style="font-weight: bold">Location:</span></td>
                            <td style="padding-left: 6em">
                                <table>
                                    <tr>
                                        <td>City:</td>
                                        <td>Katy</td>
                                    </tr>

                                    <tr>
                                        <td>State:</td>
                                        <td>Texas</td>
                                    </tr>

                                    <tr>
                                        <td>Zip code:</td>
                                        <td>77494</td>
                                    </tr>

                                    <tr>
                                        <td>Country:</td>
                                        <td>United States</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>



                    <p style="margin-top: 1em">The job duties will include:</p>
                    <ul>
                        <li>Call customers from our database, reading a script and setting appointments for Network Consultants</li>
                        <li>Tracking customer information</li>
                        <li>Managing Appointments by sending calendar invites to customers and network consultants, following up with the customer 24-hours before the appointment and sending the customer information</li>
                        <li>Managing customer installs by keeping up with circuit install dates and customer billing ensuring circuits get installed and billed in a timely manner</li>
                        <li>Resolving billing issues for customers</li>
                        <li>Manage External Partnerships</li>
                    </ul>





                    <p style="margin-top: 1em ">
                    DSTORM is focused on creating a diverse environment where everyone can thrive! DSTORM is an equal Opportunity Employer. <br>
                    Please email your resume to: <a href="mailto:thomasmarks@dstormconsulting.com">thomasmarks@dstormconsulting.com</a>
                    </p>

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
