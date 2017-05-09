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
            <h1>About Us</h1>

            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->
                <div>

                    This seems like a good place for this paragraph

                    DSTORM is a Veteran Owned Organization. DSTORM is honored to be an Authorized Solution Provider for AT&T.
                    DSTORM specializes in Security, Data, Hosted Services,
                    Mobility and Voice! DSTORM offers a consultative approach to telecommunications where
                    we are truly a partner and not just another vendor. We offer affordable onsite installation
                    for our partners that do not have IT Staffing or just need some assistance.
                    We meet with our partners and learn about their business to develop comprehensive solutions
                    that will best meet their current and future needs.
                    This process includes uncovering our partner's current applications, needs of the business,
                    goals and budget to create a customized solution.
                    In addition, we have Service Managers on staff that will manage our partner’s
                    installations and billing from start to finish no matter how big or small the solution.
                    At DSTORM our partner’s needs are not an afterthought!
                </div>

                <div>
                    Our Family TAB
                    Have everyones picture Name and title
                    If people click on someone's name and title that person bio pops up.

                    I am the president and CEO of DSTORM Consulting Inc. I have over 20 years of experience in telecommunications. I have held many Leadership Positions at AT&T. I am a proud Veteran of the United States Air Force. I have a Bachelor’s Degree in Marketing from the University of Houston-Clear Lake.

                    As the President and CEO of DSTORM Consulting Inc., I am responsible for developing go to market strategies that include Staffing, Application Management, Developing Training for Service Managers and Sales Consultants, Developing Vendor Referral Programs, Partner Relationship Acquisition and Development and Creating Customized Solutions for our Partners and or their customers.

                    I was a Sales Manager for the Fiber to the Building at ATT. I was focused on developing a Senior Sales Team. My territory included all of Louisiana and Houston. I was responsible for increasing the Fiber Penetration in 20,000 Fiber Ready Buildings in all segments of AT&T. Innovative Sales Leadership, Strategic Planning and Implementation were all keys to my team’s consistent successful performance.

                    Previously I worked as a Senior Account Manager in Nationals Business Markets. I was always focused on being a leader. In addition to reading phenomenal leadership books such as Leadership Gold I was always focused on sales excellence. I was awarded Diamond Club, the most prestigious Sales Award at AT&T.

                    I was formerly a Global Account Manager focused on managing a $210 million book of business in AT&T Global Markets that catered to the Global Corporate Clientele. In that capacity, I led a large-scale network design, process improvement, sales strategy, and technical marketing initiatives.

                    I maintain acute levels of management abilities related to strategy, sales, finance, marketing, engineering, and professional development. I couple this with an undying entrepreneurial spirit that allows me to consistently innovate and produce tangible, measurable results.



                </div>
                <img alt="network" src="http://www.ergoman.net/sites/default/themes/ergoman/img/Telecom-Networking.jpg">
                <img alt="network" src="http://lunainc.com/wp-content/uploads/2012/08/Telecom.jpg">

                <div>
                    tab group ?
                    4 buttons with the following Labels

                    1 Vendor Referral Program
                    2 On-Installation Technicians
                    3
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
