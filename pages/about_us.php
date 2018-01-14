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

    blockquote{
        border-left:none
    }



    .quote-box{

        overflow: hidden;

        /*padding-top: -100px;*/
        border-radius: 1em;
        background-color: #2e4058 ;    /* #1f4679;#4286df;4ADFCC*/
        margin-top: 0;
        color:white;
        width: 95%;
        box-shadow: 2px 2px 2px 2px #E0E0E0;

    }

    .quotation-mark{

        margin-top: -.2em;
        font-weight: bold;
        font-size: 7.5em;
        color:white;
        font-family: "Times New Roman", Georgia, Serif, serif;

    }

    .quote-text{
        font-size: 19px;
        margin-top: -4.5em;
    }
    .quote-text a {
        color: white;
    }

    div.news-panel a.title {
        color: black;
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
            <div class="col-md-6  ">
                <div class=" panel panel-default  ">

                    <div class="panel-body">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li class="panel ">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#firstLink">
                                    <h2>Why DStorm Network, Security and Mobility Consulting? </h2>
                                </a>
                                <ul id="firstLink" class="collapse">
                                    <li >DSTORM Consulting is an AT&T Master Solution Provider</li>
                                    <li>Our president gained invaluable experience at AT&T as a Sales Manager and Global Account Manager for 18 years</li>
                                    <li>Understanding the AT&T Culture is crucial when creating and executing an AT&T Customized Solution</li>
                                    <li>Our Operations Manager was a Service Manager and Account Manager with AT&T for 19 Years</li>
                                    <li>Our Operations Manager understands the dozens of systems that enables her to stay on top of customer circuit installs and billing</li>
                                </ul>
                            </li>

                            <li class="panel">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#secondLink">
                                    <h2>Need your AT&T Service installed and billed correctly, and any AT&T billing issues resolved?</h2>
                                </a>

                                <ul id="secondLink" class="collapse">
                                    <li>Nobody understands AT&T Billing and Systems better than our operations team </li>
                                </ul>
                            </li>

                            <li class="panel">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#thirdLink">
                                    <h2>Want internet? <span style="font-size: smaller;">(in qualifying buildings)</span></h2>
                                </a>

                                <ul id="thirdLink" class="collapse">
                                    <li>25/5Mbps to 1Gbps of Internet on AT&T Business Fiber</li>
                                    <li style="list-style-type: none;"> <span>&#10033;</span> For a quick quote please click on the <a href="contact_us.php">Contact US</a> and submit request</li>

                                </ul>
                            </li>

                            <li class="panel">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#fourthLink">
                                    <h2>Need a Network?</h2>
                                </a>

                                <ul id="fourthLink" class="collapse">
                                    <li>Network on Demand (Point-to-Point Service) – change the network speeds up or down 2Mbps to 1000Mbps daily if you want. This can be installed in as little as 7 days</li>
                                    <li>SD-WAN – Layer SD-WAN on a dedicated internet solution. You can also add wireless backup to mitigate down time</li>
                                    <li>MPLS – this can also be an affordable solution. This includes up to 6 layers of CoS to manage both voice and application prioritization. You can also add wireless backup to mitigate down time</li>
                                    <li style="list-style-type: none;"> <span>&#10033;</span> For a free network analysis please click on the <a href="contact_us.php">Contact US</a>  and submit request</li>

                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-3 same-height">
                <div class=" panel panel-default same-height-panels">
                    <div class="panel-heading"><h3>About Our Company</h3></div>
                    <div class="panel-body" style="padding-top: 2em">
                        <p>After working and gaining invaluable experience at AT&T for 18 Years as a Regional Sales Manager and a Global Account Manager, Thomas Marks launched DStorm Network, Security and Mobility Consulting.</p>

                        <p>DStorm Consulting is a Master Solution Provider for AT&T. DStorm has a sound working knowledge of Networks, Security and Mobility that enables us to develop Secure Networks with Wireless back up to ensure they stay connected. DStorm partners with most vendors to ensure we offer a True Turn Key Solution.</p>

                        <p>We offer our customers and partners unparalleled support. We ensure circuits are installed in a timely manner. We also follow up after the circuits start billing and scrub for accuracy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 same-height">
                <div class=" panel panel-info same-height-panels news-panel">
                    <div class="panel-heading">
                        <h3>
                            <a  class="title"
                                href="http://www.crn.com/news/networking/300097711/att-brings-more-focus-bigger-investment-to-its-channel-partner-program.htm"
                                target="_blank"
                            >
                                AT&T Brings More Focus, Bigger Investment To Its Channel Partner Program
                            </a>
                        </h3>
                    </div>
                    <div class="panel-body" style="padding-top: 2em">


                        <blockquote class="quote-box">
                            <p class="quotation-mark">
                                “
                            </p>
                            <p class="quote-text">
                                <a href="http://www.crn.com/news/networking/300097711/att-brings-more-focus-bigger-investment-to-its-channel-partner-program.htm"
                                   target="_blank"
                                >
                                    ... quicker and easier for solution providers to work with AT&T. The company also made a long-awaited change to its compensation model,
                                    which now allows Channel Alliance partners to be paid out in a monthly recurring fashion.
                                </a>
                            </p>

                        </blockquote>

                        <p>

                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<script src="js/jquery.matchHeight.js" type="text/javascript"></script>
<script>
    $(function() {
        $("div.same-height").matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

        $("div.same-height-panels").matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
    });
</script>

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>








