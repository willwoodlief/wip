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
            <h1>Partner Program</h1>

            <div class="row" style="margin-left: 1em">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->


                <div class=" col-md-4 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Vendor Referral Program</div>
                    <div class="panel-body">

                        Why become a DSTORM Consulting Vendor?

                        Our vendor referral program is second to none.


                        We have service managers on staff to manage installation and billing needs regardless of how small.


                        Your customers will be VERY SATISFIED working with DSTORM.


                        We can dedicate someone to work in your office once a week or more if need be.


                        Extensive telecommunications experience.


                        We are an authorized agent for AT&T.


                        We will do whatever it takes to earn your business and ensure you and your customer are extremely satisfied before, during, and after the installation.

                        Request more information

                        Please call at 281-407-7407 or fill out the information below and someone will contact you.
                        <form>
                            <div class="form-group">
                                <label for="inputEmail">First and Last Name</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Your Email Address</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="password" class="form-control" id="subject" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="message">Subject</label>
                                <textarea class="form-control custom-control" id="message" rows="3" style="resize:none"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>


                    </div>
                </div>
                <div class="col-md-8">
                <div class="col-md-offset-1 col-md-5 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> We are a veteran owned organization</div>
                    <div class="panel-body">

                        We are truly a partner and absolutely NOT just another vender.

                        We have project managers on staff to manage your installation and billing needs no matter how small.

                        Our vendor referral program is second to none.

                        We can dedicate someone to work in your office once a week or more if need be.

                        We have over 20 years experience in telecommunications.

                        We are an authorized agent for AT&T.

                        We will do whatever it takes to earn your business and ensure you are extremely satisfied before, during, and after the installation.
                    </div>
                </div>





                <div class="col-md-offset-1 col-md-5 panel panel-default">
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


                <div class="col-md-offset-1 col-md-11 panel panel-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> The AT&T Alliance Channel Solution Provider Showcase</div>
                    <div class="panel-body">

                        The AT&T Alliance Channel Solution Provider Showcase is a web syndication tool that enables Solution Providers (MSP, SP, ASP) to embed AT&T content that automatically updates on their website. The tool is designed to provide Solution Providers’ customers with timely, compelling and rich web content that reinforces their expertise and the power of AT&T solutions.

                        <a href="http://demos.ziftsolutions.com/sample/InnovativeTechnology/?a=att&wid=ff8081815493e907015495df2dd20a78">
                            Click here for demo
                        </a>
                    </div>
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
