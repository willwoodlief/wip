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
            <h1>DStorm Family</h1>


            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->



                <div class=" col-md-8 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> Temporarily Putting Bios here this is not what it will look like at all</div>
                    <div class="panel-body">

                           <code>I will make a list with pictures and the popup text  </code>
                        <div class="list-group">
                            <p>
                                Thomas Marks
<br>
                                I am the president and CEO of DSTORM Consulting Inc. I have over 20-years of experience in telecommunications. I held many Leadership Positions at AT&T. I am a proud Veteran of the United States Air Force. I have a Bachelor’s Degree in Marketing from the University of Houston-Clear Lake. As the President and CEO of DSTORM Consulting Inc., I am responsible for developing go to market strategies that include Staffing, Application Management, Developing Training for Operations Managers and Sales Consultants, Developing and Driving the Vendor Referral Programs, Partner Relationship Acquisition and Development, and Creating Customized Solutions for our Partners and or their customers.
                                <br>
                                <br>
                                Randy Lindsey
                                <br>
                                I am a Senior Sales Consultant at DSTORM Consulting Inc. I have over 20-years of experience in telecommunications. I held many Technical Leadership Positions at AT&T. I have a Bachelor of Arts from Our Lady of the Lakes University. As a Senior Sales Consultant for DSTORM Consulting Inc., I am responsible for Driving the Vendor Referral Program and Relationship Acquisition and Development and Creating Customized Solutions for our Partners and or their customers.
                                <br>
                                <br>
                                Indya Rydman
                                <br>
                                I am a Senior Sales Consultant at DSTORM Consulting Inc. I have over 18-years of experience in telecommunications. I held many Senior Sales Positions at AT&T. I have a Bachelor’s Degree in Marketing from the Lamar University. As a Senior Sales Consultant for DSTORM Consulting Inc., I am responsible for Driving the Vendor Referral Program and Relationship Acquisition and Development and Creating Customized Solutions for our Partners and or their customers.
                                <br>
                                <br>
                                Jackie Gray
                                <br>
                                I am a Senior Operation Manager at DSTORM Consulting Inc. I have over 30 years of experience in telecommunications. I held many Operational and Sales Management Positions at AT&T. As a Senior Operation Manager for DSTORM Consulting Inc., I am responsible for Assist with creating contracts, manage orders from start to installation, and resolve billing issues.




                            </p>


                        </div>
                    </div>
                </div>




                <div class="col-md-offset-1 col-md-2" >
                    <img alt="network" class="img-rounded img-responsive" src="http://lunainc.com/wp-content/uploads/2012/08/Telecom.jpg">
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
