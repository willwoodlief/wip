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
            <h1>Vendor Referral Program</h1>

            <div class="row" style="margin-left: 1em">


                <div class=" col-md-8 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Vendor Referral Program</div>
                    <div class="panel-body">


                        <p>Join the DSTORM Consulting Vendor Family! Our vendor referral program is second to none.
                        We have an Operations Manager on staff to manage the contracting, installation and billing
                        needs regardless of how large or small the network.</p>

                        <p>Your customers will be VERY SATISFIED working with DSTORM. We will dedicate someone to work in your office
                        once a week or more if need be. We have been creating Custom Telecommunications Solutions
                        for over 20-years. We are an authorized agent for AT&T.</p>

                        <p>We will do whatever it takes to earn your business and ensure you and your customer are extremely
                        satisfied before, during, and after the installation.</p>

                        <p>To request more information please call at 281-407-6407</p>

                        <p>or complete the information listed below and someone will contact you.</p>


                        <form>
                            <div class="form-group">
                                <label for="inputEmail">First and Last Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email Address</label>
                                <input type="text" class="form-control" id="email" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label for="message">Subject</label>
                                <textarea class="form-control custom-control" id="message" rows="3" style=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>


                    </div>
                </div>



                    <div class="col-md-4 panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading"> DSTORM PARTNERSHIP</div>
                        <div class="panel-body">

                            Our vendor referral program is second to none.

                            We have service managers on staff to manage installation and billing needs regardless of how small.

                            Your customers will be VERY SATISFIED working with DSTORM.

                            We can dedicate someone to work in your office once a week or more if need be.

                            We have over 20 years experience in telecommunications.

                            We are an authorized agent for AT&T.

                            We will do whatever it takes to earn your business and ensure you and your customerare extremely satisfied before, during, and after the installation.
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
