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

    div.bio-pic {

        width: 10em;
        height: auto;
        vertical-align:bottom;
        float: left;
        background-color: transparent;
        margin-right: 0.5em ;
        margin-bottom: 0.5em;
        cursor: pointer;
        text-align: center;
    }

    div.bio-pic-large {
        width: 25em;
        height: 25em;
        vertical-align:bottom;
        float: left;
        background-color: transparent;
        margin-right: 0.5em ;
        margin-bottom: 0.5em;
    }

    div.bio-pic img {

        display: none;
        margin: auto auto;

    }

    div.bio-pic-large img {
        display: none;
        margin: auto auto;
    }

    div.bio-pic div.bio-name {
        text-align: center;
        width: 10em;
        font-size: 1.0em;
        font-weight: bold;
    }

    div.detail {
        display: none;
    }

    h1.big-title {
        margin: 0.5em;
        text-align: center;
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
    <div class="container">

        <h1 class="big-title">The DStorm Team</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="bio-pic" data-about="thomas">
                    <div class="bio-name">Thomas Marks</div>
                    <img src="images/bio/thomas-jan-29.jpg" class="" style="">
                </div>

                <div class="bio-pic"  data-about="randy">
                    <div class="bio-name">Randy Lindsey</div>
                    <img src="images/bio/randy.jpg" class="" style="">
                </div>

                <div class="bio-pic"  data-about="indya">
                    <div class="bio-name"  >Indya Rydman</div>
                    <img src="images/bio/indya.png" class="" style="">
                </div>

                <div class="bio-pic" data-about="maria">
                    <div class="bio-name" >Maria Marks</div>
                    <img src="images/bio/maria.jpg"" class="" style="">
                </div>

                <div class="bio-pic" data-about="anne">
                    <div class="bio-name" >Anne Malley</div>
                    <img src="images/bio/anne.jpg" class="" style="">
                </div>
                <div style="clear: both;width: 100%;margin-bottom: 2em"></div>
                <div class="col-md-offset-0 col-md-11 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Please Meet our Team !</div>
                    <div class="panel-body">

                    </div>
                </div>

            </div>

                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->


                <div class=" col-md-6 panel panel-default detail thomas">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Thomas Marks</div>
                    <div class="panel-body" style="clear: both">
                        <div class="bio-pic-large" style="margin-bottom: 1em">
                            <img src="images/bio/thomas-jan-29.jpg" class="" style=" ">
                        </div>
                        <div>
                        <p style="">
                        After working at AT&T for 18 Years as a Regional Sales Manager and a Global Account Manager Thomas launched DStorm Network, Security and Mobility Consulting. As the President and CEO of DStorm Network, Security and Mobility Consulting Thomas has the ultimate responsibility for Customer Satisfaction, Developing go to market strategies, Managing the Vendor Referral Program, and Creating Customized Solutions for our Customers and Partners.
                        <br>
                            Thomas is proud Desert Storm-United States Air Force Veteran. He has a Bachelor’s Degree in Marketing from the University of Houston-Clear Lake.
                        </p>
                        </div>
                    </div>
                </div>


                <div class=" col-md-6 panel panel-default detail randy">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Randy Lindsey</div>
                    <div class="panel-body">
                        <div class="bio-pic-large">
                            <img src="images/bio/randy.jpg" class="" style="">
                        </div>

                        I am a Senior Sales Consultant at DSTORM Consulting Inc. I have over 20-years of experience in telecommunications. I held many Technical Leadership Positions at AT&T. I have a Bachelor of Arts from Our Lady of the Lakes University. As a Senior Sales Consultant for DSTORM Consulting Inc., I am responsible for Driving the Vendor Referral Program and Relationship Acquisition and Development and Creating Customized Solutions for our Partners and or their customers.
                    </div>
                </div>

                <div class=" col-md-6 panel panel-default detail indya">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Indya Rydman</div>
                    <div class="panel-body">
                        <div class="bio-pic-large">
                            <img src="images/bio/indya.png" class="" style="">
                        </div>

                        I am a Senior Sales Consultant at DSTORM Consulting Inc. I have over 18-years of experience in telecommunications. I held many Senior Sales Positions at AT&T. I have a Bachelor’s Degree in Marketing from the Lamar University. As a Senior Sales Consultant for DSTORM Consulting Inc., I am responsible for Driving the Vendor Referral Program and Relationship Acquisition and Development and Creating Customized Solutions for our Partners and or their customers.
                    </div>
                </div>


                <div class=" col-md-6 panel panel-default detail maria">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Maria Marks</div>
                    <div class="panel-body">
                        <div class="bio-pic-large">
                            <img src="images/bio/maria.jpg" class="bio-pic" style="">
                        </div>
                        After working at AT&T for 19 Years as a Service Manager and Account Manager,
                        Maria joined DStorm Network, Security and Mobility Consulting.
                        As the Operations Manager she is responsible for ensuring the orders are tracked, provisioned and installed in a timely manner.
                        In addition, she oversees customer billing and ensures the billing is accurate by taking any steps needed to correct billing issues.
                    </div>
                </div>


                <div class=" col-md-6 panel panel-default detail anne">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Anne Malley</div>
                    <div class="panel-body">
                        <div class="bio-pic-large">
                            <img src="images/bio/anne.jpg" class="bio-pic" style="">
                        </div>
                        After working at AT&T for 5 years as an Account Manager Anne accepted joined DStorm Network,
                        Security and Mobility Consulting.
                        As a Senior Sales Consultant she is responsible for managing and creating new vendor
                        relationships and acquiring new partners.
                        <br> <br>
                        Anne has a Bachelor of Business Administration from Lamar University.
                    </div>
                </div>






        </div>

        <div class="row">

        </div>

    </div>

</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<!-- Place any per-page javascript here -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/resize_images.js"></script>
<script>

    function show_detail(cname) {

        $('.detail').hide();
        $('.'+ cname).show();
    }

    var rotate_this = ['thomas','randy','indya','maria','anne'];
    var rotate_index = 0;

    function next_image() {
        var cname = rotate_this[rotate_index++];
        if (rotate_index >= rotate_this.length) {
            rotate_index = 0;
        }
        show_detail(cname);
    }

    $(function() {

        function after_all_processing_small() {
            $('div.bio-pic img').show();
        }

        function after_all_processing_large() {
            $('div.bio-pic-large img').show();
            next_image();
        }

        var bcont = $('div.bio-pic').first();
        var wh = bcont.width();
        var resize = new ResizeImages({img_selector:'div.bio-pic img',cx:wh,cy:wh,box_model: 'contrain_inside_box',
            all_complete_callback: after_all_processing_small});
        resize.do_resize();

         bcont = $('div.bio-pic-large').first();
         wh = bcont.width();
         resize = new ResizeImages({img_selector:'div.bio-pic-large  img',cx:wh,cy:wh,box_model: 'contrain_inside_box',
            all_complete_callback: after_all_processing_large});
         resize.do_resize();

         $('.bio-pic').click(function() {
             clearInterval(intervalId);
             var c = $(this).data('about');
             show_detail(c);

         });

         $('.detail').click(function() {
             clearInterval(intervalId);
         });

        var intervalId = setInterval(next_image, 7000);

    });
</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
