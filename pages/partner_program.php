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

            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->

             <div>

                 We are a veteran owned organization.

                 We are truly a partner and absolutely NOT just another vender.

                 We have project managers on staff to manage your installation and billing needs no matter how small.

                 Our vendor referral program is second to none.

                 We can dedicate someone to work in your office once a week or more if need be.

                 We have over 20 years experience in telecommunications.

                 We are an authorized agent for AT&T.

                 We will do whatever it takes to earn your business and ensure you are extremely satisfied before, during, and after the installation.
             </div>

             <div>
                 The AT&T Alliance Channel Solution Provider Showcase is a web syndication tool that enables Solution Providers (MSP, SP, ASP) to embed AT&T content that automatically updates on their website. The tool is designed to provide Solution Providers’ customers with timely, compelling and rich web content that reinforces their expertise and the power of AT&T solutions.


                 http://demos.ziftsolutions.com/sample/InnovativeTechnology/?a=att&wid=ff8081815493e907015495df2dd20a78
             </div>

             <div>
                 Vendor Referral Program
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



                 First and Last Name


                 Your Email Address


                 Subject


                 Your Message



             </div>

             <div>
                 DSTORM PARTNERSHIP

                 Our vendor referral program is second to none.

                 We have service managers on staff to manage installation and billing needs regardless of how small.

                 Your customers will be VERY SATISFIED working with DSTORM.

                 We can dedicate someone to work in your office once a week or more if need be.

                 We have over 20 years experience in telecommunications.

                 We are an authorized agent for AT&T.

                 We will do whatever it takes to earn your business and ensure you and your customerare extremely satisfied before, during, and after the installation.
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
