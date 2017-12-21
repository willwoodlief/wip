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

<div id="page-wrapper" style="margin-top: 4em">
    <div class="container">
        <div class="row">
            <div class="col-md-8  panel panel-default">
                <div class="panel-heading"><h3>About Us</h3></div>
                <div class="panel-body">
                    <h2>Why DStorm Network, Security and Mobility Consulting? </h2>
                    <ul>
                        <li>DSTORM Consulting is an AT&T Master Solution Provider</li>
                        <li>Our president gained invaluable experience at AT&T as a Sales Manager and Global Account Manager for 18 years</li>
                        <li>Understanding the AT&T Culture is crucial when creating and executing an AT&T Customized Solution</li>
                        <li>Our Operations Manager was a Service Manager and Account Manager with AT&T for 19 Years</li>
                        <li>Our Operations Manager understands the dozens of systems that enables her to stay on top of customer circuit installs and billing</li>
                    </ul>

                    <h2>Need your AT&T Service installed and billed correctly, and any AT&T billing issues resolved?</h2>
                    <ul>
                        <li>Nobody understands AT&T Billing and Systems better than our operations team </li>
                    </ul>

                    <h2>Want internet? <span style="font-size: smaller;">(in qualifying buildings)</span></h2>
                    <ul>
                        <li>25/5Mbps to 1Gbps of Internet on AT&T Business Fiber</li>
                        <li style="list-style-type: none;"> <span>&#10033;</span> For a quick quote please click on the <a href="contact_us.php">Contact US</a> and submit request</li>
                    </ul>

                    <h2>Need a Network?</h2>
                    <ul>
                        <li>Network on Demand (Point-to-Point Service) – change the network speeds up or down 2Mbps to 1000Mbps daily if you want. This can be installed in as little as 7 days</li>
                        <li>SD-WAN – Layer SD-WAN on a dedicated internet solution. You can also add wireless backup to mitigate down time</li>
                        <li>MPLS – this can also be an affordable solution. This includes up to 6 layers of CoS to manage both voice and application prioritization. You can also add wireless backup to mitigate down time</li>
                        <li style="list-style-type: none;"> <span>&#10033;</span> For a free network analysis please click on the <a href="contact_us.php">Contact US</a>  and submit request</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 panel panel-default">
                <div class="panel-heading"><h3>About Our Company</h3></div>
                <div class="panel-body" style="padding-top: 2em">
                    <p>After working and gaining invaluable experience at AT&T for 18 Years as a Regional Sales Manager and a Global Account Manager, Thomas Marks launched DStorm Network, Security and Mobility Consulting.</p>

                    <p>DStorm Consulting is a Master Solution Provider for AT&T. DStorm has a sound working knowledge of Networks, Security and Mobility that enables us to develop Secure Networks with Wireless back up to ensure they stay connected. DStorm partners with most vendors to ensure we offer a True Turn Key Solution.</p>

                    <p>We offer our customers and partners unparalleled support. We ensure circuits are installed in a timely manner. We also follow up after the circuits start billing and scrub for accuracy.</p>
                </div>
            </div>
        </div>

    </div>
</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<?php require_once 'includes/postit_romp.php'; // postit code linking ?>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>








